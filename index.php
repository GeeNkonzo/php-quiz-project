<!-- Starting session -->

<?php session_start()?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet"> 
    <title>Grey's anatomy quiz</title>
</head>
<body>

<?php

    $_SESSION['$questionnaire'] = $questionnaire = array(
                            0=>
                                array('question' => "1.Which of the following has not been the name of the hospital?",
                                        'options' => 
                                            array(
                                                0 => 'Grey Sherpherd Memorial Hospital',
                                                1 => 'Seattle Grace Mercy West Hospital',
                                                2 => 'Seattle Grace Hospital',
                                                3 => 'Grey Sloan Memorial Hospital'
                                            ),
                                            'answer'=> 0
                                            ),
                            1=>
                                array('question' => "2.Who has not lived at Meredith’s mother’s house?",
                                        'options' => 
                                            array(
                                                0 => 'George O\'Malley',
                                                1 => 'Jo Wilson',
                                                2 => 'Callie Torres',
                                                3 => 'Teddy Altman'
                                            ),
                                            'answer'=> 3
                                            ),
                            2=>
                                array('question' => "3.Which of the following has Meredith not lived through?",
                                        'options' => 
                                            array(
                                                0 => 'A plane crash',
                                                1 => 'Drowning',
                                                2 => 'A car accident',
                                                3 => 'A bomb'
                                            ),
                                            'answer'=> 2
                                            ),
                            3=>
                                array('question' => "4.Which STD does George get from Nurse Olivia?",
                                        'options' => 
                                            array(
                                                0 => 'Chlamydia',
                                                1 => 'Gonorrhea',
                                                2 => 'Herpes',
                                                3 => 'Syphilis'
                                            ),
                                            'answer'=> 3
                                            ),
                            4=>
                                array('question' => "5.Who hasn’t lived at Derek’s trailer",
                                        'options' => 
                                            array(
                                                0 => 'Meredith Grey',
                                                1 => 'Alex Karev',
                                                2 => 'Owen Hunt',
                                                3 => 'Izzie Stevens'
                                            ),
                                            'answer'=> 0
                                            ),
                            5=>
                                array('question' => "6.Izzie Stevens was diagnosed with stage IV metastatic melanoma in Season 5. Which symptom made her realize something was wrong?",
                                        'options' => 
                                            array(
                                                0 => 'Hallucinations of her dead fiance',
                                                1 => 'Headaches and nausea',
                                                2 => 'Abdominal cramps and vomiting',
                                                3 => 'Rapid weight loss'
                                            ),
                                            'answer'=> 0
                                            ),
                            6=>
                                array('question' => "7.How did Arizona Robbins lose her leg?",
                                        'options' => 
                                            array(
                                                0 => 'Earthquake',
                                                1 => 'Car crash',
                                                2 => 'Plane crash',
                                                3 => 'Hurricane'
                                            ),
                                            'answer'=> 2
                                            ),
                            7=>
                                array('question' => "8.What did Derek always say before starting an operation?",
                                        'options' => 
                                            array(
                                                0 => '"It\'s a beautiful day to save lives."',
                                                1 => '"It\'s a good day."',
                                                2 => '"Let\'s save a life."',
                                                3 => '"It\'s a great day to save lives."'
                                            ),
                                            'answer'=> 0
                                            ),
                            8=>
                                array('question' => "9.How did Derek die?",
                                        'options' => 
                                            array(
                                                0 => 'Shooting',
                                                1 => 'Plane crash',
                                                2 => 'Car accident',
                                                3 => 'Murder'
                                            ),
                                            'answer'=> 2
                                            ),
                            9=>
                                array('question' => "10.Which surgery did George flop, resulting in the unfortunate nickname ‘007’",
                                        'options' => 
                                            array(
                                                0 => 'Open heart surgery',
                                                1 => 'Liver removal',
                                                2 => 'Gallbladder',
                                                3 => 'Appendectamy'
                                            ),
                                            'answer'=> 3
                                            ),
                            10=>
                                array('question' => "11.Arizona Robbins is the head of which surgical departments?",
                                        'options' => 
                                            array(
                                                0 => 'Orthopedics and general',
                                                1 => 'Pediatrics and fetal',
                                                2 => 'Cardio and general',
                                                3 => 'Pediatrics and orthopedics'
                                            ),
                                            'answer'=> 1
                                            ),
                            11=>
                                array('question' => "12.How does Meredith first meet Penny?",
                                        'options' => 
                                            array(
                                                0 => 'She was part of the Mercy West merger',
                                                1 => 'She went to school with her',
                                                2 => 'She operates on Zola',
                                                3 => 'She was one of the doctors who operated on Derek'
                                            ),
                                            'answer'=> 3
                                            ),
                            12=>
                                array('question' => "13.Where does Cristina move to at the end of Season 10?",
                                        'options' => 
                                            array(
                                                0 => 'Norway',
                                                1 => 'France',
                                                2 => 'Sweden',
                                                3 => 'Switzerland'
                                            ),
                                            'answer'=> 3
                                            ),
                            13=>
                                array('question' => "14.Which of the following characters has Callie Torres not dated?",
                                        'options' => 
                                            array(
                                                0 => 'George',
                                                1 => 'Teddy',
                                                2 => 'Erica',
                                                3 => 'Penny'
                                            ),
                                            'answer'=> 1
                                            ),
                            14=>
                                array('question' => "15.Which of these male doctors has never gotten a McNickname?",
                                        'options' => 
                                            array(
                                                0 => 'Owen Hunt',
                                                1 => 'Derek Sherphard',
                                                2 => 'Jackson Avery',
                                                3 => 'Mark Sloan'
                                            ),
                                            'answer'=> 2
                                            ),
                            15=>
                                array('question' => "16.Which of the Season 12 interns pretended to be an older doctor than they really were?",
                                        'options' => 
                                            array(
                                                0 => 'Edwards',
                                                1 => 'Brooks',
                                                2 => 'Wilson',
                                                3 => 'DeLuca'
                                            ),
                                            'answer'=> 3
                                            ),
                            16=>
                                array('question' => "17.Meredith Grey has several nicknames throughout the show. Which of the following was not one of her nicknames?",
                                        'options' => 
                                            array(
                                                0 => 'Dirty Mistress',
                                                1 => 'Twisty Mistress',
                                                2 => 'Twisted Sister',
                                                3 => 'Medusa'
                                            ),
                                            'answer'=> 1
                                            ),
                            17=>
                                array('question' => "18.What was the theme of the party Owen Hunt had to throw to raise money for the hospital",
                                        'options' => 
                                            array(
                                                0 => 'Formal',
                                                1 => 'Space',
                                                2 => 'Magic',
                                                3 => 'Carnival'
                                            ),
                                            'answer'=> 3
                                            ),
                            18=>
                                array('question' => "19.Who plays Meredith Grey?",
                                        'options' => 
                                            array(
                                                0 => 'Sandra Oh',
                                                1 => 'Ellen Pompeo',
                                                2 => 'Katherine Heigl',
                                                3 => 'Shonda Rhimes'
                                            ),
                                            'answer'=> 1
                                            ),
                            19=>
                                array('question' => "20.Who was the first doctor at Seattle Grace to die?",
                                        'options' => 
                                            array(
                                                0 => 'Heather Brooks',
                                                1 => 'Ellis Grey',
                                                2 => 'Lexie Grey',
                                                3 => 'George O\'Malley'
                                            ),
                                                'answer'=> 3
                                            )
                        );
    ?>

    <header class = "banner">
        <div class="cover"></div>
       <p>Grey's Anatomy<br> Quiz<br>
       <a href="#start">
            <img class = "arrow" src = "img/down-arrow.png"></p>
        </a>
    </header>
    <div class="background">
    <div class="container">
        <div class="main">
            <form action ="results.php" method = "post" id="start">
                <?php
                    foreach ($questionnaire as $big_key => $question) { ?>
                    <h2><?php echo $question['question'] ?></h2>
                        <?php  foreach ($question['options'] as $key => $option) {    
                        ?>
                        <div>
                            <input type="radio" name = "user_input[<?php echo $big_key; ?>]" value = "<?php echo $key ?>" required>
                            <label class = "label"><?php echo $option; ?></label>
                        </div>
                        <?php } ?>
                <?php }; ?><br><br><br>
                <center><input class="button" type ="submit" value="Submit!"></center>
            </form>
        </div>
    </div>
    </div>
</body>
</html>