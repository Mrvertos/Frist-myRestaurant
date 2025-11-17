<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مارکــــوس</title>
    <link rel="stylesheet" href="./styles/style.css" />
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

    

    <!-- Main -->
    <main id="main">

      <!-- section main -->
      <section class="main-section">

        <div class="section-main-texts">

          <h1 class="main-title">رستوران مارکوس</h1>
          <span class="main-p">بهترین غذا های ایران</span>
          <a href="./menu.html" class="main-gomenu">منو رستوران</a>

        </div>

      </section>

      <!-- type food -->

       <section class="foods">

        <div class="food-type">

          <div>
            <img src="./assets/images/iranian.jpg" alt="iranian">
          </div>

          <div class="food-text">
            <h2>ایرانی</h2>
            <button><a href="./menu.html">منو</a></button>
          </div>
        </div>

        <div class="food-type">

          <div>
            <img src="./assets/images/breakfast.jpg" alt="Breakfast">
          </div>

          <div class="food-text">
            <h2>صبحانه</h2>
            <button><a href="./menu.html">منو</a></button>
          </div>

        </div>

        <div class="food-type">

          <div>
            <img src="./assets/images/fastfood.jpg" alt="fastfood">
          </div>

          <div class="food-text">
            <h2>فست فود</h2>
            <button><a href="./menu.html">منو</a></button>
          </div>

        </div>

        <div class="food-type">

          <div>
            <img src="./assets/images/italian.jpg" alt="italian">
          </div>

          <div class="food-text">
            <h2>ایتالیایی</h2>
            <button><a href="./menu.html">منو</a></button>
          </div>
          
        </div>
        
      </section>

    </main>
    <!-- End Main -->


    <!-- Start Footer -->
    <?php include 'footer.php' ?>
    <!-- End Footer -->

    <script src="./scripts/main.js"></script>
  </body>
</html>
