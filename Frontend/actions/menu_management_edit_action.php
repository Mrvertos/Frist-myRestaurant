<?php
$id = $_GET["id"];
$foodName = $_POST["foodName"];
$foodPrice = $_POST["foodPrice"];
$foodType = $_GET["type"];

$link = mysqli_connect("localhost", "root", "", "restaurant");
switch ($foodType) {
    case 'breakFasts':
        $result = mysqli_query($link, "UPDATE `breakfast` SET `foodName`='$foodName',`price`='$foodPrice' WHERE id=$id");
        break;
    case 'fastFoods':
        $result = mysqli_query($link, "UPDATE `fastfood` SET `foodName`='$foodName',`price`='$foodPrice' WHERE id=$id");
        break;
    case 'persianFoods':
        $result = mysqli_query($link, "UPDATE `persainfood` SET `foodName`='$foodName',`price`='$foodPrice' WHERE id=$id");
        break;
    case 'italyFoods':
        $result = mysqli_query($link, "UPDATE `italyfood` SET `foodName`='$foodName',`price`='$foodPrice' WHERE id=$id");
        break;
    default:
        echo ($foodType);
        break;
}

mysqli_close($link);


?><script>location.replace("../menu_managment.php")</script><?php

?>