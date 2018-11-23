<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
   <?php

    $break = "<br>";
        $questionnaire = array('q1'=>
                                    array('question' => "1.Which of the following has not been the name of the hospital?",
                                            'answers' => 
                                                array(
                                                    1 => 'Grey Sherpherd Memorial Hospital.',
                                                    2 => 'Seattle Grace Mercy West Hospital',
                                                    3 => 'Seattle Grace Hospital',
                                                    4 => 'Grey Sloan Memorial Hospital'
                                                    )
                                                ),
                                'q2'=>
                                    array('question' => "2.Who has not lived at Meredith’s mother’s house?",
                                            'answers' => 
                                                array(
                                                    1 => 'George O\'Malley',
                                                    2 => 'Jo Wilson',
                                                    3 => 'Callie Torres',
                                                    4 => 'Teddy Altman'
                                                    )
                                                ),
                                'q3'=>
                                    array('question' => "3.Which of the following has Meredith not lived through?",
                                            'answers' => 
                                                array(
                                                    1 => 'A plan crash',
                                                    2 => 'Drowning',
                                                    3 => 'A car accident.',
                                                    4 => 'A bomb'
                                                    )
                                                ),
                                'q4'=>
                                    array('question' => "4.Which STD does George get from Nurse Olivia?",
                                            'answers' => 
                                                array(
                                                    1 => 'Chlamydia',
                                                    2 => 'Gonorrhea',
                                                    3 => 'Herpes',
                                                    4 => 'Syphilis.'
                                                    )
                                                ),
                                'q5'=>
                                    array('question' => "5.Who hasn’t lived at Derek’s trailer",
                                            'answers' => 
                                                array(
                                                    1 => 'Meredith Grey.',
                                                    2 => 'Alex Karev',
                                                    3 => 'Owen Hunt',
                                                    4 => 'Izzie Stevens'
                                                    )
                                                ),
                                'q6'=>
                                    array('question' => "6.Izzie Stevens was diagnosed with stage IV metastatic melanoma in Season 5. Which symptom made her realize something was wrong?",
                                            'answers' => 
                                                array(
                                                    1 => 'Hallucinations of her dead fiance.',
                                                    2 => 'Headaches and nausea',
                                                    3 => 'Abdominal cramps and vomiting',
                                                    4 => 'Rapid weight loss'
                                                    )
                                                ),
                                'q7'=>
                                    array('question' => "7.How did Arizona Robbins lose her leg?",
                                            'answers' => 
                                                array(
                                                    1 => 'Earthquake',
                                                    2 => 'Car crash',
                                                    3 => 'Plane crash',
                                                    4 => 'Hurricane'
                                                    )
                                                ),
                                'q8'=>
                                    array('question' => "8.What did Derek always say before starting an operation?",
                                            'answers' => 
                                                array(
                                                    1 => '"It\'s a beautiful day to save lives."',
                                                    2 => '"It\'s a good day."',
                                                    3 => '"Let\'s save a life."',
                                                    4 => '"It\'s a great day to save lives."'
                                                    )
                                                ),
                                'q9'=>
                                    array('question' => "9.How did Derek die?",
                                            'answers' => 
                                                array(
                                                    1 => 'Shooting',
                                                    2 => 'Plane crash',
                                                    3 => 'Car accident',
                                                    4 => 'Murder'
                                                    )
                                                ),
                                'q10'=>
                                    array('question' => "10.Which surgery did George flop, resulting in the unfortunate nickname ‘007’",
                                            'answers' => 
                                                array(
                                                    1 => 'Open heart surgery',
                                                    2 => 'Liver removal',
                                                    3 => 'Gallbladder',
                                                    4 => 'Appendectamy'
                                                    )
                                                ),
                                'q11'=>
                                    array('question' => "11.Arizona Robbins is the head of which surgical departments?",
                                            'answers' => 
                                                array(
                                                    1 => 'Orthopedics and general',
                                                    2 => 'Pediatrics and fetal',
                                                    3 => 'Cardio and general',
                                                    4 => 'Pediatrics and orthopedics'
                                                    )
                                                ),
                                'q12'=>
                                    array('question' => "12.How does Meredith first meet Penny?",
                                            'answers' => 
                                                array(
                                                    1 => 'She was part of the Mercy West merger',
                                                    2 => 'She went to school with her',
                                                    3 => 'She operates on Zola',
                                                    4 => 'She was one of the doctors who operated on Derek'
                                                    )
                                                ),
                                'q13'=>
                                    array('question' => "13.Where does Cristina move to at the end of Season 10?",
                                            'answers' => 
                                                array(
                                                    1 => 'Norway',
                                                    2 => 'France',
                                                    3 => 'Sweden',
                                                    4 => 'Switzerland.'
                                                    )
                                                ),
                                'q14'=>
                                    array('question' => "14.Which of the following characters has Callie Torres not dated?",
                                            'answers' => 
                                                array(
                                                    1 => 'George',
                                                    2 => 'Teddy',
                                                    3 => 'Erica',
                                                    4 => 'Penny'
                                                    )
                                                ),
                                'q15'=>
                                    array('question' => "15.Which of these male doctors has never gotten a McNickname?",
                                            'answers' => 
                                                array(
                                                    1 => 'Owen Hunt',
                                                    2 => 'Derek Sherphard',
                                                    3 => 'Jackson Avery',
                                                    4 => 'Mark Sloan'
                                                    )
                                                ),
                                'q16'=>
                                    array('question' => "16.Which of the Season 12 interns pretended to be an older doctor than they really were?",
                                            'answers' => 
                                                array(
                                                    1 => 'Edwards',
                                                    2 => 'Brooks',
                                                    3 => 'Wilson',
                                                    4 => 'DeLuca'
                                                    )
                                                ),
                                'q17'=>
                                    array('question' => "17.Meredith Grey has several nicknames throughout the show. Which of the following was not one of her nicknames?",
                                            'answers' => 
                                                array(
                                                    1 => 'Dirty Mistress',
                                                    2 => 'Twisty Mistress',
                                                    3 => 'Twisted Sister',
                                                    4 => 'Medusa'
                                                    )
                                                ),
                                'q18'=>
                                    array('question' => "18.What was the theme of the party Owen Hunt had to throw to raise money for the hospital",
                                            'answers' => 
                                                array(
                                                    1 => 'Formal',
                                                    2 => 'Space',
                                                    3 => 'Magic',
                                                    4 => 'Carnival'
                                                    )
                                                ),
                                'q19'=>
                                    array('question' => "19.Who plays Meredith Grey?",
                                            'answers' => 
                                                array(
                                                    1 => 'Sandra Oh',
                                                    2 => 'Ellen Pompeo',
                                                    3 => 'Katherine Heigl',
                                                    4 => 'Shonda Rhimes'
                                                    )
                                                ),
                                'q20'=>
                                    array('question' => "20.Who was the first doctor at Seattle Grace to die?",
                                            'answers' => 
                                                array(
                                                    1 => 'Heather Brooks',
                                                    2 => 'Ellis Grey',
                                                    3 => 'Lexie Grey',
                                                    4 => 'George O\'Malley'
                                                    )
                                                ),
                            );

    var_dump($questionnaire);

    foreach ($questionnaire as $key => $question) { 
            echo $question['question'] . $break;
            foreach ($question['answers'] as $key => $answer) {
                echo $answer . $break;
            };
    }       
   ?>
</body>
</html>