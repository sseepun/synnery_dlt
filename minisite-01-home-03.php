<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php // include_once('include/topnav-04.php'); ?>

  <section class="banner-05">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
            <div class="container">
              <!-- <div class="text-wrapper color-white">
                <div class="animate" style="--delay:.4s;">
                  <h3 class="lg fw-100 lh-3xs">
                    การเดินทางด้วย <br />
                    <span class="text-xl fw-400">รถสาธาณะแบบวิถีใหม่</span>
                  </h3>
                </div>
                <p class="lg fw-200 mt-3 animate" style="--delay:.55s;">
                  ไม่ว่าจะเป็นรถเมล์ รถโดยสารประจำทาง <br> และรถโดยสารไม่ประจำทาง
                  รถยนต์รับจ้าง (แท็กซี่) และรถบริการ รถจักรยานยนต์สาธารณะ <br>
                  และรถรับจ้างอื่นๆ ควรปฏิบัติดังนี้
                </p>
                <div class="btns mt-4 animate" style="--delay:.7s;">
                  <a href="#" class="btn btn-action style-02 btn-03">
                    <span>รายละเอียดเพิ่มเติม</span> 
                  </a>
                </div>
              </div> -->
            </div>
          </div>
        <?php }?>
      </div>
      <div class="dot-container" data-aos="fade-up" data-aos-delay="0"></div>
    </div>
  </section>

  <section class="section-27 section-padding">
    <div class="container">
      <div class="grids">
        <    
      </div>      
    </div>        
  </section>
   
  <?php // include_once('include/footer-04.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>