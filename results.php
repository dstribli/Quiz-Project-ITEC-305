
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project Results Page</title>
    <link type="text/css" rel="stylesheet" href="results.css">
</head>
<body>

    <h1>Do You Know Your Memes </h1>
   <!-- <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon">
    <img src="https://media.tenor.com/images/d55a83e9abb508b54415a8672e0da24c/tenor.gif" alt="Head Bopping Cat" class="headericon2"> -->
    <h2>Nawshin Rahman, Destiny Stribling, Nuran Ghoneim </h2>

    <hr />

    <?php
        /*if(isset($_POST['q2'])){
            $q2 = $_POST['q2'];
        }
        else{
            $q2 = NULL;
        }
        if($q2 != NULL){
            if ($q2 != $answer){
                echo '$q2 is incorrect';  
            }
            else{
                echo '$q2 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q3'])){
            $q3 = $_POST['q3'];
        }
        else{
            $q3 = NULL;
        }
        if($q3 != NULL){
            if ($q3 != $answer){
                echo '$q3 is incorrect';  
            }
            else{
                echo '$q3 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q4'])){
            $q4 = $_POST['q4'];
        }
        else{
            $q4 = NULL;
        }
        if($q4 != NULL){
            if ($q4 != $answer){
                echo '$q4 is incorrect';  
            }
            else{
                echo '$q4 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q5'])){
            $q5 = $_POST['q5'];
        }
        else{
            $q5 = NULL;
        }
        if($q5 != NULL){
            if ($q5 != $answer){
                echo '$q5 is incorrect';  
            }
            else{
                echo '$q5 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q6'])){
            $q6 = $_POST['q6'];
        }
        else{
            $q6 = NULL;
        }
        if($q6 != NULL){
            if ($q6 != $answer){
                echo '$q6 is incorrect';  
            }
            else{
                echo '$q6 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q7'])){
            $q7 = $_POST['q7'];
        }
        else{
            $q7 = NULL;
        }
        if($q7 != NULL){
            if ($q7 != $answer){
                echo '$q7 is incorrect';  
            }
            else{
                echo '$q7 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q8'])){
            $q8 = $_POST['q8'];
        }
        else{
            $q8 = NULL;
        }
        if($q8 != NULL){
            if ($q8 != $answer){
                echo '$q8 is incorrect';  
            }
            else{
                echo '$q8 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q9'])){
            $q9 = $_POST['q9'];
        }
        else{
            $q9 = NULL;
        }
        if($q9 != NULL){
            if ($q9 != $answer){
                echo '$q9 is incorrect';  
            }
            else{
                echo '$q9 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        }
        if(isset($_POST['q10'])){
            $q10 = $_POST['q10'];
        }
        else{
            $q10 = NULL;
        }
        if($q10 != NULL){
            if ($q10 != $answer){
                echo '$q10 is incorrect';  
            }
            else{
                echo '$q10 is correct';
            }
        }
        else{
            echo 'you must select an answer';
        } */
    ?>

    <p> Score: </p>
    
    <ol>
        <li> Your Answer: 
                <?php
                    $answer1 = $_POST['q1-answers'];
                    echo "<p>$answer1</p>";

                    $totalCorrect = 0;

                    if($answer1 == "A"){
                        $totalCorrect++;
                    }
                ?>
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