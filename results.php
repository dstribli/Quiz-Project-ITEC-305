<?php
//session_start();
//$score = $_SESSION['score'];
$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "HatsuneMiku90");

function read_words($db){
        
    $parts_of_speech = array("content");
    shuffle($parts_of_speech); #switching the words inside the array
    $answer_part = array_pop($parts_of_speech);
    
    $lines = file($db);
    $choices = array(); #hold array of 5 randomly chosen words
    shuffle($lines); #shuffle our file array so we get randomized choices
    while(count($choices)<5){
        #Pop reads me the last one
        $line = array_pop($lines); #grab the last line in the array
        list("id", "content", "is_correct") = explode("\t", $line); #this gives me an array with 3 indexes = -, 1, 2
        #what list does is that the token extracts into three different variables which separate them into 3 different array indexes
        #list($word, $part, $defn) = $tokens;
        #destructionary = have a structure and breaks into three arrays

        if($part== $answer_part){
            $choices[] = $line; #choosing a word that has all adjectives, verb, or noun. Not a word where the options are mix of speech
        }
    }
    return $choices;

}

function get_definition($answer, $db){
    $lines = file($db);
    foreach($lines as $line)
    {
        list("id", "content", "is_correct") = explode("\t", trim($line));   
        if($answer == $word)  
            return $defn;   
    }
    return null;
}



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

    <?php

$choices = read_words($db);
$correct = 0;
$total = 0;
if(isset($_POST["guess"]))
{
    $answer = $_POST["content"];
    $guess = $_POST["guess"];
    $correct = $_POST["results"];
    $total = $_POST["total"];
    $total++;
    // $defn = get_definition($answer, $filename);
    

    if($guess == trim(get_definition($answer,$db))){
        echo '<p style="color:#1EF23D";>Correct</p>';
        $correct++;
    } else{
        echo get_definition($answer, $db) . '<p style="color:#FF0000";>Incorrect</p>';
    }
    
}
  
    ?>
    <p> Score: </p>
    
    <ol>
        <li> Your Answer: 
        <p> </p>
        </li>
        <li> Your Answer: 
        <p> </p>
        </li>
        <li> Your Answer:  
        <p> </p>
        </li>
        <li> Your Answer:  
        <p> </p>
        </li>
        <li> Your Answer:  
        <p> </p>
        </li>
        <li> Your Answer: 
        <p> </p>
        </li>
        <li> Your Answer:  
        <p> </p>
        </li>
        <li> Your Answer: 
        <p> </p>
        </li>
        <li> Your Answer:  
        <p> </p>
        </li>
        <li> Your Answer: 
        <p> </p>
        </li>
    </ol>

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
