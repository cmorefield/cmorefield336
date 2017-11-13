<!DOCTYPE html>
<html>
    <head>
        <title> 777 Slot Machine </title>
        <meta charset:"utf-8"/>
    </head>
    <body>
        <?php
        $symbol7 = "seven";
        $cherry = "cherry";
        $lemon = "lemon";
        
        function displaySymbol(){
            $result = rand(0,0);
            
            if ($result == 0){
                echo "<img src= 'img/cards/clubs/ace.png' alt=\"seven\" />";
            }
        }
        
        for($i = 0; $i < 3; $i++){
            displaySymbol();
        }
        ?>
        
    </body>
</html>