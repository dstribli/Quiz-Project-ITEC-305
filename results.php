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
    <div class= "answers">
        <ol>
            <li> Your Answer is: 
                    <?php
                        $answer1 = $_POST['q1-answers'];
                    // echo "<p>$answer1</p>";
                        $totalCorrect = 0;

                        if($answer1 == "B"){
                            $totalCorrect++; ?>
                           <span class="correct"> <?php echo "Correct!"; ?> <img src="minion.gif" alt="minion" class="minion"> </span> 
                            <?php
                        } elseif ($answer1 == "A" || $answer1 == "C" || $answer1 == "D") { ?>
                           <span class="incorrect"> <?php echo "Incorrect. The correct answer is: B -- what are those????? "; ?>
                            <img src="lionking.gif" alt="king" class="king"></span> <?php
                        } else{
                            echo " ";
                        }
                    ?>
            <p> </p>
            </li>
            <li> Your Answer is: 
                    <?php
                    $answer2 = $_POST['q2-answers'];
                    //echo "<p>$answer2</p>";
                    if($answer2 == "A"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer2 == "B" || $answer2 == "C" || $answer2 == "D") {?>
                           <span class="incorrect"> <?php echo "Incorrect. The correct answer is: A -- carry on"; ?>
                           <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>
            <p> </p>
            </li>
            <li> Your Answer is:
            <?php
                    $answer3 = $_POST['q3-answers'];
                    //echo "<p>$answer3</p>";

                    if($answer3 == "C"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?> <img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer3 == "B" || $answer3 == "A" || $answer3 == "D") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: C -- Kim, there's people that are dying"; ?> 
                        <img src="lionking.gif" alt="king" class="king"></span> <?php
                    } else{
                        echo " ";
                    }
                    ?>  
            <p> </p>
            </li>
            <li> Your Answer is:
            <?php
                    $answer4 = $_POST['q4-answers'];
                    // echo "<p>$answer4</p>";

                    if($answer4 == "D"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer4 == "B" || $answer4 == "A" || $answer4 == "C") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: D -- you crazy son of a bitch"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>   
            <p> </p>
            </li>
            <li> Your Answer is: 
            <?php
                    $answer5 = $_POST['q5-answers'];
                    //echo "<p>$answer5</p>";

                    if($answer5 == "B"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?> <img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer5 == "D" || $answer5 == "A" || $answer5 == "C") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: B -- 21"; ?> 
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>  
            <p> </p>
            </li>
            <li> Your Answer is: 
            <?php
                    $answer6 = $_POST['q6-answers'];
                    //echo "<p>$answer6</p>";

                    if($answer6 == "D"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer6 == "B" || $answer6 == "A" || $answer6 == "C") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: D -- I'm still a piece of garbage"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?> 
            <p> </p>
            </li>
            <li> Your Answer is: 
            <?php
                    $answer7 = $_POST['q7-answers'];
                    //echo "<p>$answer6</p>";

                    if($answer7 == "C"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?> <img src="minion.gif" alt="minion" class="minion"></span> <?php
                    } elseif ($answer7 == "B" || $answer7 == "A" || $answer7 == "D") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: C -- they disappoint me"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>  
            <p> </p>
            </li>
            <li> Your Answer is:
            <?php
                    $answer8 = $_POST['q8-answers'];
                    //echo "<p>$answer8</p>";

                    if($answer8 == "A"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer8 == "B" || $answer8 == "C" || $answer8 == "D") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: A -- I'm honestly feeling so attacked right now"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?> 
            <p> </p>
            </li>
            <li> Your Answer is: 
            <?php
                    $answer9 = $_POST['q9-answers'];
                    // echo "<p>$answer9</p>";

                    if($answer9 == "B"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer9 == "A" || $answer9 == "C" || $answer9 == "D") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: B -- chickens"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>  
            <p> </p>
            </li>
            <li> Your Answer is:
            <?php
                    $answer10 = $_POST['q10-answers'];
                    // echo "<p>$answer10</p>";

                    if($answer10 == "C"){
                        $totalCorrect++;?>
                        <span class="correct"> <?php echo "Correct!"; ?><img src="minion.gif" alt="minion" class="minion"> </span> <?php
                    } elseif ($answer10 == "A" || $answer10 == "D" || $answer10 == "B") {?>
                        <span class="incorrect"> <?php echo "Incorrect. The correct answer is: C -- lemme take a selfie"; ?>
                        <img src="lionking.gif" alt="king" class="king"> </span> <?php
                    } else{
                        echo " ";
                    }
                    ?>  
            <p> </p>
            </li>
        </ol>
    </div>
    <span class="score"> 
        <?php echo "Score: <div id='results'>$totalCorrect / 10 correct </p>"; ?>
    </span>
        

    <form action= quiz.php >
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