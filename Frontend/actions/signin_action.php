<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

    $link = mysqli_connect("localhost", "root", "", "restaurant");

    $result = mysqli_query($link,"SELECT * FROM `users` WHERE username='$username' AND password='$password'");    

    mysqli_close($link);

    $row = mysqli_fetch_array($result);

    if ($row) {
        $_SESSION["login"]=true;
        $_SESSION["username"]=$row["username"];    
        ?><script>location.replace("../index.php")</script><?php
    } 
    else
        echo"موفقیت امیز نبود"

?>