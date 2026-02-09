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
    <style>
        #btn-remove-icon{
            color: whitesmoke;
            transition: all ease 0.3s;
            &:hover{
                color: #bbbbbb;
            }
        }
    </style>
  </head>

<!-- Header -->
    <?php include 'header.php';?>
<!-- End Header -->

<body>
    
    <form action="./actions/menu_managment_add_action.php" class="addMenuContainer" method="post">
        <h1>افزودن منو</h1>
        <div class="container_input">
        <label for="foodName" >نــــــام :</label>
        <input id="foodName" class="addInput" type="text" name="foodName">
        </div>
        <div class="container_input">
        <label for="foodPrice">قیمت :</label>
        <input id="foodPrice" class="addInput" type="number" name="foodPrice">
        </div>

        <label for="foodType" id="foodTypeLabel">نوع غذا :</label>
        <select name="foodType" id="foodType">
            <option value="breckFasts">صبحانه</option>
            <option value="fastFoods">فست فود</option>
            <option value="persianFoods">غذا ایرانـی</option>
            <option value="italyFoods">غذا ایتالیایی</option>
        </select>
        <button type="submit">افزودن</button>
    </form>


        <!-- ----------- MENU START ------------ -->

        <main>


            <!-- Breakfast menu style start -->
            
            <div class="menu-container menu-breakfast">
                
                <div class="menu-title">
                    <img src="./assets/images/breakfast.jpg" alt="fastfood">
                    <h2>صبحــــــانه</h2>
                </div>
                
                <?php 
                
                $link = mysqli_connect("localhost", "root", "", "restaurant");
                $result = mysqli_query($link,"SELECT * FROM `breakfast` WHERE 1");
                mysqli_close($link);

                $row = mysqli_fetch_array($result);

                while($row){
                    ?>
                    <div class="menu-item">
                        <h3><?php echo($row["foodName"]) ?></h3>
                        
                        <div>
                            <span><?php echo($row["price"]) ?> تومان</span>
                            <button style="background-color: #104a97;">
                                <a href="menu_managment_edit.php?id=<?php echo($row["id"]); ?>
                                &type=breakFasts
                                &foodName=<?php echo($row["foodName"]); ?>
                                &price=<?php echo($row["price"]); ?>">
                                    <i class='fa fa-edit' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                            <button style="background-color: #971010;">
                                <a href="actions/menu_management_del_action.php?id=<?php echo($row["id"]); ?>&type=breakFasts">
                                    <i class='fa fa-remove' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                    <?php

                    $row = mysqli_fetch_array($result);
                }

                ?>
                
            </div>
            
            <!-- Breakfast menu style end -->


            <!-- fastfood menu style start -->
            

            <div class="menu-container menu-fastfood">
                
                <div class="menu-title">
                    <h2>فست فود</h2>
                    <img src="./assets/images/fastfood.jpg" alt="fastfood">
                </div>

                <?php 
                
                $link = mysqli_connect("localhost", "root", "", "restaurant");
                $result = mysqli_query($link,"SELECT * FROM `fastfood` WHERE 1");
                mysqli_close($link);

                $row = mysqli_fetch_array($result);

                while($row){
                    ?>
                    <div class="menu-item">
                        <h3><?php echo($row["foodName"]) ?></h3>
                        
                        <div>
                            <span><?php echo($row["price"]) ?> تومان</span>
                            <button style="background-color: #104a97;">
                                <a href="menu_managment_edit.php?id=<?php echo($row["id"]); ?>
                                &type=fastFoods
                                &foodName=<?php echo($row["foodName"]); ?>
                                &price=<?php echo($row["price"]); ?>">
                                    <i class='fa fa-edit' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                            <button style="background-color: #971010;">
                                <a href="actions/menu_management_del_action.php?id=<?php echo($row["id"]); ?>&type=fastFoods">
                                    <i class='fa fa-remove' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                    <?php

                    $row = mysqli_fetch_array($result);
                }

                ?>
            
                
            </div>
            
            <!-- fastfood menu style end -->

            <!-- iranian menu style start -->
            
            <div class="menu-container menu-iranian">
                
                <div class="menu-title">
                    <h2>غذا ایرانـی</h2>
                    <img src="./assets/images/iranian.jpg" alt="fastfood">
                </div>
                
                <?php 
                
                $link = mysqli_connect("localhost", "root", "", "restaurant");
                $result = mysqli_query($link,"SELECT * FROM `persianfood` WHERE 1");
                mysqli_close($link);

                $row = mysqli_fetch_array($result);

                while($row){
                    ?>
                    <div class="menu-item">
                        <h3><?php echo($row["foodName"]) ?></h3>
                        
                        <div>
                            <span><?php echo($row["price"]) ?> تومان</span>
                            <button style="background-color: #104a97;">
                                <a href="menu_managment_edit.php?id=<?php echo($row["id"]); ?>
                                &type=persianFoods
                                &foodName=<?php echo($row["foodName"]); ?>
                                &price=<?php echo($row["price"]); ?>">
                                    <i class='fa fa-edit' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                            <button style="background-color: #971010;">
                                <a href="actions/menu_management_del_action.php?id=<?php echo($row["id"]); ?>&type=persianFoods">
                                    <i class='fa fa-remove' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                    <?php

                    $row = mysqli_fetch_array($result);
                }

                ?>
                
            </div>
            
            <!-- iranian menu style end -->

            <!-- italian menu style start -->
            
            <div class="menu-container menu-italian">
                
                <div class="menu-title">
                    <h2>غذا ایتالیایی</h2>
                    <img src="./assets/images/italian.jpg" alt="fastfood">
                </div>
                
                <?php 
                
                $link = mysqli_connect("localhost", "root", "", "restaurant");
                $result = mysqli_query($link,"SELECT * FROM `italyfood` WHERE 1");
                mysqli_close($link);

                $row = mysqli_fetch_array($result);

                while($row){
                    ?>
                    <div class="menu-item">
                        <h3><?php echo($row["foodName"]) ?></h3>
                        
                        <div>
                            <span><?php echo($row["price"]) ?> تومان</span>
                            <button style="background-color: #104a97;">
                                <a href="menu_managment_edit.php?id=<?php echo($row["id"]); ?>
                                &type=italyFoods
                                &foodName=<?php echo($row["foodName"]); ?>
                                &price=<?php echo($row["price"]); ?>">
                                    <i class='fa fa-edit' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                            <button style="background-color: #971010;">
                                <a href="actions/menu_management_del_action.php?id=<?php echo($row["id"]); ?>&type=italyFoods">
                                    <i class='fa fa-remove' style='font-size:14px;'id="btn-remove-icon"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                    <?php

                    $row = mysqli_fetch_array($result);
                }

                ?>
                
            </div>
            
            <!-- italian menu style end -->

        </main>
    
</body>

<!-- Start Footer -->
<?php include 'footer.php' ?>
<!-- End Footer -->