<?php 

$db = new PDO ("mysql:dbname=quiz;host=localhost:3307", "root", "HatsuneMiku90");
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
$question1 =$db->query("SELECT content FROM quiz_answers WHERE question_id = '135791'");
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
                <input type = "radio" name = "q1"/> <?=$q1["content"]?> <br/>
                <?php
            }
        }
        foreach($rows2 as $row2){
            ?>
                <li> <?=$row2["content"]?>  </li>      
                 <?php
        }
            foreach($question2 as $q2){
                ?>
                <input type = "radio" name = "q2"/> <?=$q2["content"]?> <br/>
                <?php
            }

            foreach($rows3 as $row3){
                ?>
                    <li> <?=$row3["content"]?>  </li>      
                     <?php
            }
                foreach($question3 as $q3){
                    ?>
                    <input type = "radio" name = "q3"/> <?=$q3["content"]?> <br/>
                    <?php
                }
                foreach($rows4 as $row4){
                    ?>
                        <li> <?=$row4["content"]?>  </li>      
                         <?php
                }
                    foreach($question4 as $q4){
                        ?>
                        <input type = "radio" name = "q4"/> <?=$q4["content"]?> <br/>
                        <?php
                    }
                    foreach($rows5 as $row5){
                        ?>
                            <li> <?=$row5["content"]?>  </li>      
                             <?php
                    }
                        foreach($question5 as $q5){
                            ?>
                            <input type = "radio" name = "q5"/> <?=$q5["content"]?> <br/>
                            <?php
                        }
                        foreach($rows6 as $row6){
                            ?>
                                <li> <?=$row6["content"]?>  </li>      
                                 <?php
                        }
                            foreach($question6 as $q6){
                                ?>
                                <input type = "radio" name = "q6"/> <?=$q6["content"]?> <br/>
                                <?php
                            }
                            foreach($rows7 as $row7){
                                ?>
                                    <li> <?=$row7["content"]?>  </li>      
                                     <?php
                            }
                                foreach($question7 as $q7){
                                    ?>
                                    <input type = "radio" name = "q7"/> <?=$q7["content"]?> <br/>
                                    <?php
                                }
                                foreach($rows8 as $row8){
                                    ?>
                                        <li> <?=$row8["content"]?>  </li>      
                                         <?php
                                }
                                    foreach($question8 as $q8){
                                        ?>
                                        <input type = "radio" name = "q8"/> <?=$q8["content"]?> <br/>
                                        <?php
                                    }
                                    foreach($rows9 as $row9){
                                        ?>
                                            <li> <?=$row9["content"]?>  </li>      
                                             <?php
                                    }
                                        foreach($question9 as $q9){
                                            ?>
                                            <input type = "radio" name = "q9"/> <?=$q9["content"]?> <br/>
                                            <?php
                                        }
                                        foreach($rows10 as $row10){
                                            ?>
                                                <li> <?=$row10["content"]?>  </li>      
                                                 <?php
                                        }
                                            foreach($question10 as $q10){
                                                ?>
                                                <input type = "radio" name = "q10"/> <?=$q10["content"]?> <br/>
                                                <?php
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
