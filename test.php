<?php 

$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "root");
$rows = $db->query("SELECT * FROM quiz_questions");
$question1 =$db->query("SELECT content FROM quiz_answers WHERE question_id = '135791'");
$question2 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135792'");
//$answers = $_GET["quiz_answers"];
//$query2 = "SELECT content FROM quiz_answers ";
//$result = PDO($db, $query2);
//$quiz_answers = PDO_fetch_all ($result);
//print_r($quiz_answers);
//$ans =$db->query($query2);


//var_dump($rows);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project Quiz Page</title>
    <link rel="stylesheet" type="text/css" href="quiz.css" />
</head>

<body>

    <h1>Do You Know Your Memes? </h1>
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon">
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon2">
    <h2>By: Nawshin Rahman, Destiny Stribling, Nuran Ghoneim </h2>

    <hr />
    <p class = "instructions"> Instructions: Welcome to "Do You Know Your Memes" Quiz! This quiz consists of 10 questions with 4 options. Out of the 4 choices,
    only one of them is the correct answer. Choose wisely. Have fun!
    </p>


    <div class="questions">
        <ol>
        <?php
        foreach($rows as $row){
            ?>
                <li> <?=$row["content"]?>  </li>      
                 <?php
            foreach($question1 as $q1){
                ?>
                <input type = "radio" name = "choices"/> <?=$q1["content"]?> <br/>
                <?php
            }
            foreach($question2 as $q2){
                ?>
                <input type = "radio" name = "choices"/> <?=$q2["content"]?> <br/>
                <?php
            }

        }
        ?>

        </ol>
        
    </div>
    <form action= results.php >
    <input type = "submit" value="Submit Your Answers" class = "submitbutton"/>
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

<?php
    var_dump($rows);

?>
</body>
</html>