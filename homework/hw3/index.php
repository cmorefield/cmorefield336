<?php
 session_start();
 
?>
 
<!DOCTYPE html>
<html>
    <head>
        
        <title> The Quiz </title>
        <meta charset="utf-8"/>
        <style>
            @import url("styles.css");
        </style>
        <link href="https://fonts.googleapis.com/css?family=Knewave" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    </head>
    <body>
        <h1> The Quiz: </h1>
        <form method="get" action="index.php">
            <div>
            <fieldset>
                <legend>A Question:</legend>
                Please Identify this object:<br>
                <img src="itsarock.png"></img>
                <br></br>
                <select name="Question1">
                    <option value=" "> </option>
                    <option value="Boulder">Boulder</option>
                    <option value="Rock">Rock</option>
                </select> 
                <br></br>
                <?php
                if(isset($_GET['Submit'])){
                    if($_GET['Question1'] == "Rock"){
                        echo "<p class= correctq><i class='material-icons'>check_circle</i> Correct!<p> It's a big, beautiful rock, and its in great shape. ";
                    }
                    else{
                        echo "<p class= incorrectq><i class='material-icons'>not_interested</i>Incorrect!<p> Hint: The pioneers used to drive these babies for miles.";
                    }
                }
                ?>
            </fieldset>
            </div>
            <br></br>
            <fieldset>
                <legend>A Question:</legend>
                <img src="wallet.png"></img>
                <br></br>
                You see someone drop their wallet. Inside the wallet you find an id with a picture of that person along with their name. This must mean that it is:  <br>
                <br></br>
                  <input type="radio" name="wallet" value="yes" checked> Their Wallet<br>
                  <input type="radio" name="wallet" value="no"> Not Their Wallet<br>
                  <br></br>
                  <?php
                  if(isset($_GET['Submit'])){
                    if($_GET['wallet'] == "no"){
                        echo "<p class= correctq><i class='material-icons'>check_circle</i> Correct!<p> It's not his wallet";
                    }
                    else{
                        echo "<p class= incorrectq><i class='material-icons'>not_interested</i>Incorrect!<p> It's not his wallet";
                    }
                    }
                    ?>
            </fieldset>
            <br></br>
            <fieldset>
                <legend>A Question:</legend>
                <img src="seabear.png"></img>
                <br></br>
                What are all the things you should NOT do in order to keep sea bears away? (Select all that apply)<br>
                <br></br>
                  <input type="checkbox" name="clarinet"> Play the Clarinet<br>
                  <input type="checkbox" name="flashlight"> Wave a flashlight back and forth really fast (Flashlights are their natural prey)<br>
                  <input type="checkbox" name="stomp" > Stomp around. They take that as a challenge.<br>
                  <input type="checkbox" name="cheese" > Eat cheese. (Cubed. Sliced is fine.) <br>
                  <input type="checkbox" name="Sombrero"> Wear a Sombrero in a goofy fashion.<br>
                  <input type="checkbox" name="clown"> Clown Shoes<br>
                  <input type="checkbox" name="skirt"> Hoop Skirt<br>
                  <input type="checkbox" name="chimp"> Screech like a chimpanze 
                  <br></br>
                  <?php
                  if(isset($_GET['Submit'])){
                    if(isset($_GET['clarinet'], $_GET['flashlight'], $_GET['stomp'], $_GET['cheese'], $_GET['Sombrero'], $_GET['clown'], $_GET['skirt'], $_GET['chimp'])){
                        echo "<p class= correctq><i class='material-icons'>check_circle</i> Correct!<p> Good thing you're wearing your anti-Sea-Rhinoceros undergarments too." ;
                    }
                    else{
                        echo "<p class= incorrectq><i class='material-icons'>not_interested</i>Incorrect!<p> Please draw an anti-Sea-Bear circle immediately.";
                    }
                }
                ?>
            </fieldset>
            <br></br>
            <fieldset>
                <legend>A (2 Part) Question:</legend>
                <br></br>
                Part 1: Please identify the % composition of this object: <br>
                <br></br>
                <img src="seaweed.png"></img>
                <br></br>
                <input type="text" name="comp1">
                % sea,
                <input type="text" name="comp2">
                % weed.
                 <br></br>
                Part 2: Please identify the % composition of this object: <br>
                <br></br>
                <img src="plankton.png"></img>
                <br></br>
                <input type="text" name="comp3">
                % evil,
                <input type="text" name="comp4">
                % hot gas.
                <br></br>
                <?php
                    if(isset($_GET['Submit'])){
                        if($_GET['comp1'] == 50 && $_GET['comp2'] == 50 && $_GET['comp3'] == 1 && $_GET['comp4'] == 99){
                        echo "<p class= correctq><i class='material-icons'>check_circle</i> Correct!<p>";
                        }
                    else{
                        echo "<p class= incorrectq><i class='material-icons'>not_interested</i> Incorrect! <p>";
                    }
                    }
                ?>
            </fieldset>
            <br></br>
            <input id= "submit" type="submit" name="Submit" value="Submit Your Answers!"/>
        </form> 
    </body>
    <footer>
        <p>Site for Entertainment and educational purposes only. CST 336 CSUMB 207</p>
        <img src="buddy_verified.png"></img>
    </footer>
</html>