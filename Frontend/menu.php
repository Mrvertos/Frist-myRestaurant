<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مارکــــوس</title>
    <link rel="stylesheet" href="./styles/menu.css" />
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
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

    <body>
        <!-- Header -->
         <?php include 'header.php';?>
        <!-- End Header -->


        <main>


            <!-- Breakfast menu style start -->
            
            <div class="menu-container menu-breakfast">
                
                <div class="menu-title">
                    <img src="./assets/images/breakfast.jpg" alt="fastfood">
                    <h2>صبحــــــانه</h2>
                </div>
                
                <div class="menu-item">
                    <h3>املت</h3>
                    
                    <div>
                        <span>150,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
                <div class="menu-item">
                    <h3>ساندویچ</h3>
                    
                    <div>
                        <span>70,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
            </div>
            
            <!-- Breakfast menu style end -->


            <!-- fastfood menu style start -->
            
            <div class="menu-container menu-fastfood">
                
                <div class="menu-title">
                    <h2>فست فود</h2>
                    <img src="./assets/images/fastfood.jpg" alt="fastfood">
                </div>
                
                <div class="menu-item">
                    <h3>فلافل</h3>
                    
                    <div>
                        <span>50,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
                <div class="menu-item">
                    <h3>بندری</h3>
                    
                    <div>
                        <span>70,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
            </div>
            
            <!-- fastfood menu style end -->

            <!-- iranian menu style start -->
            
            <div class="menu-container menu-iranian">
                
                <div class="menu-title">
                    <h2>غذا ایرانـی</h2>
                    <img src="./assets/images/iranian.jpg" alt="fastfood">
                </div>
                
                <div class="menu-item">
                    <h3>چلو کباب</h3>
                    
                    <div>
                        <span>1,200,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
                <div class="menu-item">
                    <h3>قیمه</h3>
                    
                    <div>
                        <span>250,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
            </div>
            
            <!-- iranian menu style end -->

            <!-- italian menu style start -->
            
            <div class="menu-container menu-italian">
                
                <div class="menu-title">
                    <h2>غذا ایتالیایی</h2>
                    <img src="./assets/images/italian.jpg" alt="fastfood">
                </div>
                
                <div class="menu-item">
                    <h3>پاستا</h3>
                    
                    <div>
                        <span>500,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
                <div class="menu-item">
                    <h3>پیتزا مارگاریتا</h3>
                    
                    <div>
                        <span>700,000 تومان</span>
                        <button>
                            <i class='fas fa-plus' style='font-size:14px'></i>
                        </button>
                    </div>
                </div>
                
            </div>
            
            <!-- italian menu style end -->

        </main>
        
        <!-- Start Footer -->
        <?php include 'footer.php' ?>
        <!-- End Footer -->

        <script src="./scripts/main.js"></script>
    </body>

</html>