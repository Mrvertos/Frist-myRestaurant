<?php

$username = $_POST["username"];
$password = $_POST["password"];
$repassword = $_POST["repassword"];
$phonenumber = $_POST["phonenumber"];

    $link = mysqli_connect("localhost", "root", "", "restaurant");

    if ($password == $repassword) {
    $result = mysqli_query($link,"INSERT INTO `users`(`username`, `password`, `phonenumber`) VALUES ('$username','$password','$phonenumber')");    
    }

    mysqli_close($link);

    ?><script>location.replace("../index.php")</script><?php
?>