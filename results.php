<!-- Session -->
<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
    <title>results</title>
</head>
<body>
    <!-- same classes used in index page are used on this page for consistency and uniform display  -->
    <div class="background">
        <div class="container">
            <div class="main">

            <!-- isset function used to check that all questions have been answered and that there are no empty keys in the array. User input is assigned to a new variable for calculation purposes  -->
                <?php
                $break= "<br>";
                if(isset($_POST)) {
                    $ans = $_POST['user_input'];
                    } 
                
                // total variable created to store user's score
                $total=0;

                // for loop used to calculate user's score
                for($u = 0; $u < 20; $u++){
                if ($ans[$u] == $_SESSION['$questionnaire'][$u]['answer']) {
                    $total++;
                    }
                } ?>
                
            <!-- results class used for specified styling located in the css file -->
            <div class="results">  

            <!-- if statement for a different messages according to the score obtained b the user -->
                <?php
                    if($total==0) {
                            echo "You got " .$total . " out of 20." .$break.' <img src = "../img/gifs/stare.gif"> ';
                        }  
                            
                    elseif ($total >0 && $total <=10) {
                            echo "You got " .$total . " out of 20!!" . $break . " 😐";
                    }

                    elseif($total>10 && $total<=15){
                            echo "You got " .$total . " out of 20!! " . $break . "😃";
                    }
                        
                    elseif($total>15 && $total<20) {
                            echo "Congratulations!!! You got " .$total . " out of 20!!" . $break . "🤩";
                    }
                        
                    elseif($total==20){
                            echo "Congratulations!!! You got " .$total . " out of 20!!" . $break;
                ?>
                            <img src ="../img/gifs/dancing.gif">
                <?php
                    
                }
                ?>
            </div>

            <!-- Retake button that takes you back to the index page  -->
            <form action="index.php" method="post">
                <center><input class="button" type ="submit" value="Retake Test"></center>
            </form>
            </div>
        </div>
    </div>

</body>
</html>