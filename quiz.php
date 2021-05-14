<?php

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
            <li> Complete the meme: Keep Calm AND _____. <img src="keepcalm.png" alt="Keep Calm" class="keepcalm">  <label> <br /> 
            
                <input type = "radio" name = "choices" value = "Stay 6 feet away" /> Stay 6 feet away <br />
                <input type = "radio" name = "choices" value = "Carry on" /> Carry on <br />
                <input type = "radio" name = "choices" value = "Meme on" /> Meme on<br />
                <input type = "radio" name = "choices" value = "Breathe deeply" /> Breathe deeply</label> </li> <br />
            <li> Complete the meme: Real question is what________. <br /> <label>
                <input type = "radio" name = "choices" value = "Who are you?????" /> Who are you?????<br />
                <input type = "radio" name = "choices" value = "Where am I?????" /> Where am I????? <br />
                <input type = "radio" name = "choices" value = "What are those?????" /> What are those?????<br />
                <input type = "radio" name = "choices" value = "Where are they?????" /> Where are they?????</label> </li> <br />
            <li> Complete the meme: I just came to have a good time, and ________. <br /> <label>
                <input type = "radio" name = "choices" value = "Now I'm just depressed" /> Now I'm just depressed<br />
                <input type = "radio" name = "choices" value = "You guys are ruining everything" /> You guys are ruining everything<br />
                <input type = "radio" name = "choices" value = "It doesn't seem to be happening anytime soon" /> It doesn't seem to be happening anytime soon <br />
                <input type = "radio" name = "choices" value = "I'm honestly feeling so attacked right now" /> I'm honestly feeling so attacked right now</label> </li> <br />
            <li> Complete the meme: Oh my god, I'm gonna cry! My diamond earrings!________. <br /> <label>
                <input type = "radio" name = "choices" value = "Kim, this is why we have insurance" /> Kim, this is why we have insurance <br />
                <input type = "radio" name = "choices" value = "Kim, there's people that are dying" /> Kim, there's people that are dying<br />
                <input type = "radio" name = "choices" value = "Kim, crying about it won't help you find them" /> Kim, crying about it won't help you find them<br />
                <input type = "radio" name = "choices" value = "Kim, you can just buy new ones" /> Kim, you can just buy new ones</label> </li> <br />
            <li> Complete the meme: Look at all those ________. <br /> <label>
                <input type = "radio" name = "choices" value = "Cars" /> Cars<br />
                <input type = "radio" name = "choices" value = "People" /> People<br />
                <input type = "radio" name = "choices" value = "Memes" /> Memes<br />
                <input type = "radio" name = "choices" value = "Chickens" /> Chickens</label> </li> <br />
            <li> Complete the meme: You did it, _________, you did it. <br /> <label>
                <input type = "radio" name = "choices" value = "You crazy old man, you did it" /> You crazy old man, you did it <br />
                <input type = "radio" name = "choices" value = "You crazy son of a bitch, you did it" /> You crazy son of a bitch, you did it <br />
                <input type = "radio" name = "choices" value = "You beautiful man, you did it" /> You beautiful man, you did it<br />
                <input type = "radio" name = "choices" value = "You mysterious stranger, you did it" /> You mysterious stranger, you did it</label> </li> <br />
            <li> Complete the meme: Oh hi thanks for checking in________. <br /> <label>
                <input type = "radio" name = "choices" value = "I'm still a piece of garbage" /> I'm still a piece of garbage <br />
                <input type = "radio" name = "choices" value = "I'm doing just fine" /> I'm doing just fine<br />
                <input type = "radio" name = "choices" value = "I'm slowly dying inside" /> I'm slowly dying inside <br />
                <input type = "radio" name = "choices" value = "I'm not sure why I'm here" /> I'm not sure why I'm here </label> </li> <br />
            <li> Complete the meme: But first, ________. <br /> <label>
                <input type = "radio" name = "choices" value = "Lemme check my phone" /> Lemme check my phone <br />
                <input type = "radio" name = "choices" value = "Lemme tie my shoes" /> Lemme tie my shoes <br />
                <input type = "radio" name = "choices" value = "Lemme take our the trash" /> Lemme take our the trash <br />
                <input type = "radio" name = "choices" value = "Lemme take a selfie" /> Lemme take a selfie </label> </li> <br />
            <li> Complete the meme: I don't need friends________. <br /> <label>
                <input type = "radio" name = "choices" value = "I just need my dog" /> I just need my dog<br />
                <input type = "radio" name = "choices" value = "They dissapoint me" /> They dissapoint me<br />
                <input type = "radio" name = "choices" value = "Just my PC" /> Just my PC<br />
                <input type = "radio" name = "choices" value = "That's why I don't have any" /> That's why I don't have any </label> </li> <br />
            <li> Complete the meme: What's 9 + 10? _______ <br /> <label>
                <input type = "radio" name = "choices" value = "19" /> 19<br />
                <input type = "radio" name = "choices" value = "100" /> 100<br />
                <input type = "radio" name = "choices" value = "21" /> 21<br />
                <input type = "radio" name = "choices" value = "I never learned how to read" /> I never learned how to read </label> </li>
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