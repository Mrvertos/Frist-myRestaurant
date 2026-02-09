<?php

    $foodName = $_POST["foodName"];
    $foodPrice = $_POST["foodPrice"];
    $foodType = $_POST["foodType"];

    $link = mysqli_connect("localhost", "root", "", "restaurant");
    switch ($foodType) {
        case 'breckFasts':
            mysqli_query($link,"INSERT INTO `breakfast`(`foodName`, `price`) VALUES ('$foodName','$foodPrice')");
            break;
        case 'fastFoods':
            mysqli_query($link,"INSERT INTO `fastfood`(`foodName`, `price`) VALUES ('$foodName','$foodPrice')");
            break;
        case 'persianFoods':
            mysqli_query($link,"INSERT INTO `persianfood`(`foodName`, `price`) VALUES ('$foodName','$foodPrice')");
            break;
        case 'italyFoods':
            mysqli_query($link,"INSERT INTO `italyfood`(`foodName`, `price`) VALUES ('$foodName','$foodPrice')");
            break;
        default:
            echo"salam";
            break;
    }
    mysqli_close($link);
    ?><script>location.replace("../menu_managment.php")</script><?php

?>