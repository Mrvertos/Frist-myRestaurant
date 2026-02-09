<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مارکــــوس</title>
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
    <link rel="stylesheet" href="./styles/menu.css" />
    <link rel="stylesheet" href="./styles/menu_managemnt.css">
    <link rel="icon" href="./assets/images/logo.svg" type="image/png" />
    <!-- icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
      integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

<!-- Header -->
    <?php include 'header.php';?>
<!-- End Header -->

<body>
    
    <form action="./actions/menu_management_edit_action.php?id=<?php echo($_GET["id"]); ?>&type=<?php echo($_GET["type"]); ?>" class="addMenuContainer" method="post">


        <h1>ویرایش منو</h1> 
        <div class="container_input">
        <label for="foodName" >نــــــام :</label>
        <input id="foodName" class="addInput" type="text" name="foodName" value="<?php echo($_GET["foodName"]) ?>">
        </div>
        <div class="container_input">
        <label for="foodPrice">قیمت :</label>
        <input id="foodPrice" class="addInput" type="number" name="foodPrice" value="<?php echo($_GET["price"]) ?>">
        </div>
        <button type="submit">تایید ویرایش</button>
    </form>

<!-- Start Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->