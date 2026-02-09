

<!-- Header -->
    <?php include 'header.php';?>
    <link rel="stylesheet" href="./styles/user_management.css">
<!-- End Header -->



<?php 

if (isset($_SESSION["login"])) {
    ?>
    <a href="./actions/logout_action.php        ">logOut</a>
    <?php
}
else{
    ?><script>location.replace("./signin.php")</script><?php
}

?>
<div id="dashboard">
    <h1>داشبورد</h1>
    <span id="username"><?php echo($_SESSION["username"]) ?></span>
    <label for="username">: نام</label>
    <div ></div>
    <a href="./menu_managment.php" class="dashboard_btn_edit">تغییرات</a>
    <a href="./actions/logout_action.php" class="dashboard_btn_exit">خروج</a>

</div>

<!-- Start Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->