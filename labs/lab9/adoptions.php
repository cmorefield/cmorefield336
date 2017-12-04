<?php
    include 'inc/header.php';
    include '../../dbconnection.php';
?>

<?php

    function getPetsList(){
    $conn = getDatabaseConnection("c9");
    
    
    $sql = "SELECT *
            FROM adoptees";
    
           
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    print_r($record);
    
    return $record;
    }
?>

<script>
    $(document).ready(function(){
        $(".petlink").click(function(){
            $.ajax({

                type: "GET",
                url: "api/petInfo",
                dataType: "json",
                data: { "id": $(this).attr('id')},
                success: function(data,status) {
                //alert(data);
                
                },
                complete: function(data,status) { //optional, used for debugging purposes
                //alert(status);
                }
            
            });//ajax
        });
        
    });
</script>

<?php
        $pets = getPetsList();
        foreach($pets as $pet){
            echo "<a href='#' class='petlink' id=". $pet[id]."  >Name: " . $pet['name'] . "</a><br>";
            echo "Type: " .$pet['type'] . "<br>";
            echo "<hr><br>";
            
        }
?>

<div id=petInfo>
    
</div>