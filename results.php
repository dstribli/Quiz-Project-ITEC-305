<?php
$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "root");

    $answer = $db->query("SELECT * FROM quiz_answers WHERE is_correct = '1'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project Results Page</title>
    <link type="text/css" rel="stylesheet" href="results.css">
</head>
<body>

    <h1>Do You Know Your Memes </h1>
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon">
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon2"> 
    <h2>Nawshin Rahman, Destiny Stribling, Nuran Ghoneim </h2>

    <hr />

    <p> Score: </p>
    
    <ol>
        <li> Your Answer: 
                <?php
                    $answer1 = $_POST['q1-answers'];
                    echo "<p>$answer1</p>";

                    $totalCorrect = 0;

                    if($answer1 == "B"){
                        $totalCorrect++;
                    }
                ?>
        <p> </p>
        </li>
        <li> Your Answer: 
                <?php
                 $answer2 = $_POST['q2-answers'];
                 echo "<p>$answer2</p>";

                 if($answer2 == "A"){
                     $totalCorrect++;
                 }
                ?>
        <p> </p>
        </li>
        <li> Your Answer:
        <?php
                 $answer3 = $_POST['q3-answers'];
                 echo "<p>$answer3</p>";

                 if($answer3 == "C"){
                     $totalCorrect++;
                 }
                ?>  
        <p> </p>
        </li>
        <li> Your Answer:
        <?php
                 $answer4 = $_POST['q4-answers'];
                 echo "<p>$answer4</p>";

                 if($answer4 == "D"){
                     $totalCorrect++;
                 }
                ?>   
        <p> </p>
        </li>
        <li> Your Answer: 
        <?php
                 $answer5 = $_POST['q5-answers'];
                 echo "<p>$answer5</p>";

                 if($answer5 == "B"){
                     $totalCorrect++;
                 }
                ?>  
        <p> </p>
        </li>
        <li> Your Answer: 
        <?php
                 $answer6 = $_POST['q6-answers'];
                 echo "<p>$answer6</p>";

                 if($answer6 == "D"){
                     $totalCorrect++;
                 }
                ?> 
        <p> </p>
        </li>
        <li> Your Answer: 
        <?php
                 $answer7 = $_POST['q7-answers'];
                 echo "<p>$answer6</p>";

                 if($answer7 == "C"){
                     $totalCorrect++;
                 }
                ?>  
        <p> </p>
        </li>
        <li> Your Answer:
        <?php
                 $answer8 = $_POST['q8-answers'];
                 echo "<p>$answer8</p>";

                 if($answer8 == "A"){
                     $totalCorrect++;
                 }
                ?> 
        <p> </p>
        </li>
        <li> Your Answer: 
        <?php
                 $answer9 = $_POST['q9-answers'];
                 echo "<p>$answer9</p>";

                 if($answer9 == "B"){
                     $totalCorrect++;
                 }
                ?>  
        <p> </p>
        </li>
        <li> Your Answer:
        <?php
                 $answer10 = $_POST['q10-answers'];
                 echo "<p>$answer10</p>";

                 if($answer10 == "D"){
                     $totalCorrect++;
                 }
                ?>  
        <p> </p>
        </li>
    </ol>
        <?php
        echo "<div id='results'>$totalCorrect / 10 correct </p>";
        ?>

    <form action= test.php >
    <input type = "submit" value="Retry?" class = "resultsbutton"/>
    </form>

    <p>
    <a href="http://validator.w3.org/check/referer">
        <img src="https://www.w3.org/Icons/valid-xhtml11" 
        alt="W3C HTML1.1" />
    </a>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img src="http://jigsaw.w3.org/css-validator/images/vcss"
        alt="W3C CSS" />
    </a>
    </p>
</body>
</html>