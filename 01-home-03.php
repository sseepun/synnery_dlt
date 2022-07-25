<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-03.php'); ?>
  
  <section class="banner-02">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<7; $i++){?>
          <div class="slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/03.jpg');"></div>
              <div class="container"></div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="dot-wrapper">
        <div class="container">
          <div class="dot-container"></div>
        </div>
      </div>
      <div class="arrow-container">
        <div class="arrow arrow-prev">
          <img src="public/assets/app/images/icon/09.png" alt="Arrow" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/assets/app/images/icon/10.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <section class="section-06">
    <div class="section-tabs">
      <a class="section-tab" href="#" style="background-image:url('public/assets/app/images/bg/pattern-01.jpg');">
        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-01-hover.jpg');"></div>
        <div class="hero"><img src="public/assets/app/images/hero/04.png" alt="Hero" /></div>
        <div class="text-wrapper">
          <h6 class="color-06">การให้บริการอินเทอร์เน็ต</h6>
          <p class="color-white">e-SERVICES</p>
        </div>
      </a>
    </div>
  </section>
  
  <?php include_once('include/footer-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>