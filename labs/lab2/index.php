<?php
 
include 'functions.php';
 
?>
 
<!DOCTYPE html>
<html>
    <head>
        
        <title> 777 Slot Machine </title>
        <meta charset="utf-8"/>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="myMain">
        <?php
            play();
        ?>
       
        <form>
            
            <input type="submit" value="Spin!"/>
        </form>
        </div>
    </body>
</html>