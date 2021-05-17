<?php 

$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "root");
$rows = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135791;");
$rows2 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135792;");
$rows3 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135793;");
$rows4 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135794;");
$rows5 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135795;");
$rows6 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135796;");
$rows7 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135797;");
$rows8 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135798;");
$rows9 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 135799;");
$rows10 = $db->query("SELECT * FROM quiz.quiz_questions WHERE id = 1357910;");

$question1opt1 = $db->query("SELECT content FROM quiz_answers WHERE id = 246801"); 
$question1opt2 = $db->query("SELECT content FROM quiz_answers WHERE id = 246802"); 
$question1opt3 = $db->query("SELECT content FROM quiz_answers WHERE id = 246803"); 
$question1opt4 = $db->query("SELECT content FROM quiz_answers WHERE id = 246804"); 
$question1 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135791'"); 
$question2 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135792'");
$question3 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135793'");
$question4 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135794'");
$question5 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135795'");
$question6 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135796'");
$question7 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135797'");
$question8 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135798'");
$question9 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '135799'");
$question10 = $db->query("SELECT content FROM quiz_answers WHERE question_id = '1357910'");
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
   <!-- <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon">
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon2"> -->
    <h2>By: Nawshin Rahman, Destiny Stribling, Nuran Ghoneim </h2>

    <hr />
    <p class = "instructions"> Instructions: Welcome to "Do You Know Your Memes" Quiz! This quiz consists of 10 questions with 4 options. Out of the 4 choices,
    only one of them is the correct answer. Choose wisely. Have fun!
    </p>

    
    <form action="results.php" method="post" id="quiz">

    <div class="questions">
        <ol>
        <?php
        foreach($rows as $row){
            ?>
                <li> <?=$row["content"]?>  </li>   
                <?php 
                foreach($question1opt1 as $opt1){
                ?>
                <div>
                     <input type = "radio" name = "q1-answers" id="q1-answers-A" value="A"/>
                     <label for="q1-answers-A"><?=$opt1["content"]?></label> 
                </div>        
            <?php
                }
                foreach($question1opt2 as $opt2){
                    ?>
                    <div>
                        <input type = "radio" name = "q1-answers" id="q1-answers-B" value="B"/>
                        <label for="q1-answers-B"><?=$opt2["content"]?></label> 
                    </div>   
                 <?php
             }
             foreach($question1opt3 as $opt3){
                ?>
                <div>
                    <input type = "radio" name = "q1-answers" id="q1-answers-C" value="C"/>
                    <label for="q1-answers-C"><?=$opt3["content"]?></label> 
                </div>   
             <?php
             }
             foreach($question1opt4 as $opt4){
                ?>
                <div>
                    <input type = "radio" name = "q1-answers" id="q1-answers-D" value="D"/>
                    <label for="q1-answers-D"><?=$opt2["content"]?></label> 
                </div>   
             <?php
            }
          }
        ?>
        </ol>
        
    </div>
    <input type = "submit" name = "submit" value="Submit Your Answers" class = "submitbutton"/>
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
        </form>
    
</body>
</html>

<?php
    //var_dump($rows);

?>
</body>
</html>
