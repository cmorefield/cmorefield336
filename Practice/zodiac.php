<?php
function displaydates($startdate, $enddate){
    $sum = 0;
    for($i = $startdate; $i < $enddate; $i++){
        $sum = $i + $sum;
        echo "<li> Year: ".$i;
        if($i == 1776){
            echo " US INDEPENDENCE!";
        }
        elseif($i%100 == 0){
            echo " Happy New Century";
        }
        echo"</li>";
        
        
    }
    
    echo "Year Sum:".$sum;
}

?>


<!DOCTYPE html>
<html>



    <head>
        <meta charset="utf-8" />
        <title> Chinese Zodiac </title>
    </head>

    <body>
        <header>
            <h1> Chinese Zodiac Calendar</h1>
        </header>
        
        
        <main>
        <ul>
            <?php
            $starty = $_GET["start"];
            $endy = $_GET["end"];
            displaydates($starty, $endy);
            ?>
        </ul>
            
        </main>
        
    </body>

</html>