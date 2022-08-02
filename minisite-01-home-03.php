<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php // include_once('include/topnav-04.php'); ?>


  <?php
    $categories = [
      [ 
        'title' => 'ข่าวสารประชาสัมพันธ์', 
      ], [
        'title' => 'ข่าวประกาศกรมขนส่ง', 
      ], [
        'title' => 'ภาพรวมการขนส่งทางบก', 
      ], [
        'title' => 'สาระน่าดู', 
      ], 
    ];
  ?>

  <section class="section-29 section-padding">
    <div class="container">
      <h3 class="text-center color-03" data-aos="fade-up" data-aos-delay="150">
        ข่าวสารประชาสัมพันธ์
      </h3>
      <div class="tab-container">
        <div class="grids">
          <div class="grid lg-20 md-100 sm-100">
            <div class="d-flex ai-center" data-aos="fade-up" data-aos-delay="150">
              <div class="icon-bars">
                <img src="public/assets/app/images/icon/54.png" alt="Icon" />
              </div>
              <h5 class="color-06 fw-600 ml-2">ประเภท</h5>
            </div>
            <div class="tabs tabs-04 mt-4" data-aos="fade-up" data-aos-delay="150">
              <div class="wrapper">
                <?php foreach($categories as $i=>$d){?>
                  <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                    <p class="lg fw-400"><?= $d['title'] ?></p>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="d-flex ai-center jc-center btn-more mt-2" data-aos="fade-up" data-aos-delay="150">
              <a class="p d-block text-center" href="#">อ่านทั้งหมด</a> 
              <div class="icon ml-2">
                <em class="fa-solid fa-angle-right"></em>
              </div>
            </div>
         </div>
          <div class="grid lg-80 md-100 sm-100">
            <div class="grids">
              <div class="grid lg-50 md-100 sm-100 mt-0">
                <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
                  <?php foreach($categories as $i=>$d){?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <?php for($j=0; $j<1; $j++){?>
                        <div class="ss-card ss-card-22">
                          <div class="ss-img vertical-2">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/5<?= ($i+$j+1)%5+5 ?>.jpg');"></div>
                          </div>
                        </div>
                    </div>
                   <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
        <div class="grid lg-70">
          <div class="grids">
            <div class="grid lg-50">

            </div>   
            <div class="grid lg-50">

            </div>     
          </div>
        </div>        
      </div>  
    </div>
  </section>

  <section class="section-28 section-padding">
    <div class="container">
      <h3 class="fw-500 lh-xs color-03" data-aos="fade-up" data-aos-delay="0">แบบคำขอ</h3> 
      <p class="color-16">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
      <div class="grids">
        <div class="lg-40">
          <div class="ss-card ss-card-23">
            <div class="text-container">
              <div class="icon">
                <img src="public/assets/app/images/icon/55.png" alt="Icon" />
              </div>   
              <a class="p lg">
                คำขอต่ออายุใบอนุญาตประกอบการขนส่ง
              </a> 
              <div class="icon">
                <img src="public/assets/app/images/icon/56.png" alt="Icon" />    
              </div>  
            </div>        
          </div>
        </div>    
        <div class="lg-60">

        </div>          
      </div>
    </div>
  </section>
   
  <?php // include_once('include/footer-04.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>