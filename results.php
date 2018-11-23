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
    <div class="container">
        <div class="main">
            <?php
            $break= "<br>";
            if(isset($_POST)) {
                $ans = $_POST['user_input'];
                } 
            
            
            $total=0;

            for($u = 0; $u < 20; $u++){
            if ($ans[$u] == $_SESSION['$questionnaire'][$u]['answer']) {
                $total++;
                }
            } ?>
            
        
        <div class="results">  
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
        <form action= "index.php" method = "post">
            <center><input class="button" type ="submit" value="Retake Test"></center>
        </form>
        </div>
    </div>

</body>
</html>