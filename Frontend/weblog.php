<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>مارکــــوس</title>
    <link rel="stylesheet" href="./styles/header.css" />
    <link rel="stylesheet" href="./styles/footer.css" />
    <link rel="stylesheet" href="./styles/weblog.css" />
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
      <!-- Intro -->
      <section id="blog-intro">
        <h1>وبلاگ مارکــــوس</h1>
        <p>دنیایی از طعم، داستان و الهام از آشپزخانه ما تا میز شما 🍝</p>
      </section>

      <!-- Blog Cards -->
      <section class="blog-list">
        <article class="blog-card">
          <div class="blog-image">
            <img src="./assets/images/blog1.jpg" alt="blog1" />
            <div class="overlay"></div>
            <span class="category">آشپزی حرفه‌ای</span>
          </div>

          <div class="blog-content">
            <h2>راز پخت استیک کامل!</h2>
            <p>اگر عاشق گوشت و طعم ناب استیک هستید، این مقاله مخصوص شماست...</p>
            <a href="#" class="blog-btn">ادامه مطلب</a>
          </div>
        </article>

        <article class="blog-card">
          <div class="blog-image">
            <img src="./assets/images/blog2.jpg" alt="blog2" />
            <div class="overlay"></div>
            <span class="category">پیتزا و ایتالیا</span>
          </div>

          <div class="blog-content">
            <h2>پیتزا ناپولی با طعم اصیل 🇮🇹</h2>
            <p>
              نان نرم، سس گوجه تازه، پنیر کشدار... تجربه‌ای که فراموش نمی‌کنید.
            </p>
            <a href="#" class="blog-btn">ادامه مطلب</a>
          </div>
        </article>
      </section>

      <!-- Newsletter -->
      <section class="newsletter">
        <h2>عضویت در خبرنامه</h2>
        <p>
          اولین نفری باشید که از اخبار، تخفیف‌ها و منوهای جدید مطلع می‌شود 🍷
        </p>

        <a href="./signin.html">
          <button type="submit">عضویت</button>
        </a>
      </section>

      <!-- feedback -->
      <section class="feedback">
        <h2 class="feed-title">نظرات</h2>

        <div class="feed-container">
          <div class="feed-content">
            <i class="fas fa-user-circle feed-logo" style="font-size: 90px"></i>
            <span class="feed-name">Taleb</span>
            <span>⭐⭐⭐⭐⭐</span>
            <p class="feed-dis">رستوران به شدت جذاب و پر از بچه بود</p>
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
