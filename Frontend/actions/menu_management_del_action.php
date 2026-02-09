<?php
    $id = $_GET["id"];
    $foodType = $_GET["type"];

    $link = mysqli_connect("localhost", "root", "", "restaurant");
    switch ($foodType) {
        case 'breakFasts':
            $result = mysqli_query($link,"DELETE FROM `breakfast` WHERE id=$id");
            break;
        case 'fastFoods':
            $result = mysqli_query($link,"DELETE FROM `fastfood` WHERE id=$id");
            break;
        case 'persianFoods':
            $result = mysqli_query($link,"DELETE FROM `persainfood` WHERE id=$id");
            break;
        case 'italyFoods':
            $result = mysqli_query($link,"DELETE FROM `italyfood` WHERE id=$id");
            break;
        default:
            echo($foodType);
            break;
    }
    
    mysqli_close($link);

    ?><script>location.replace("../menu_managment.php")</script><?php

    
?>