<!DOCTYPE html>
<?php


    $rgb = array(rand(0,255), rand(0,255), rand(0,255));
    
    
    $complementary = array();
    $triadic = array
        (
        array(),
        array()
        );
    
    
    
    for($i = 0; $i < 2; $i++){
        if($i == 0){
            $triadic[$i][0] = $rgb[1];
            $triadic[$i][1] = $rgb[2];
            $triadic[$i][2] = $rgb[0];
        }
        if($i == 1){
            $triadic[$i][0] = $rgb[2];
            $triadic[$i][1] = $rgb[0];
            $triadic[$i][2] = $rgb[1];
            
        }
        
    }
    
    for($i = 0; $i < 3; $i++){
        $complementary[$i] = abs($rgb[$i] - 255);
    }
    

    function getRandomColor(){
        return "rgba(".$rgb[0].",".$rgb[1].",".$rgb[2].",1);";
    }
    
?>




<html>
    <head>
        <title> </title>
        <meta charset="utf-8"/>
        
        <style>
           
            body{
                background-color: black;
                font-family:'Righteous', cursive;
            }
            h1{
                <?php
                    echo "color: rgb(".$rgb[0].",".$rgb[1].",".$rgb[2].");";
                ?>
            }
            #triadic0{
                <?php
                    echo "background-color: rgb(".$triadic[0][0].",".$triadic[0][1].",".$triadic[0][2].");";
                ?>
                height:200px;
            }
            #triadic1{
                <?php
                    echo "background-color: rgb(".$triadic[1][0].",".$triadic[1][1].",".$triadic[1][2].");";
                ?>
                height:200px;
            }
            #complementary{
                <?php
                    echo "background-color: rgb(".$complementary[0].",".$complementary[1].",".$complementary[2].");";
                ?>
                height:200px;
                width:50%;
            }
            #head{
                 <?php
                    echo "background-color: rgb(".$rgb[0].",".$rgb[1].",".$rgb[2].");";
                ?>
                height:200px;
            }
            table{
                border-width:0;
                border-style:none;
                text-align:center;
                font-size:200%;
            }
            
            
            
        </style>
        <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet"> 
    </head>
    <body>
      <h1>Here's a color:</h1>
      <table style="width:100%" >
          <tr>
              <?php
              echo "<th id = head colspan = 2> R ".$rgb[0]." G ".$rgb[1]." B ".$rgb[2]."</th>";
              ?>
          </tr>
          <tr>
              <td id = complementary> Complementary </td>
              <td id = triadic0> Triadic </td>
          </tr>
          <tr>
              <td id = blank><img src="colorwheel.png" alt="colorwheel"><img src="triadic.png" alt="triadic"> </td>
              <td id = triadic1> </td>
          </tr
      </table>
    </body>
</html>