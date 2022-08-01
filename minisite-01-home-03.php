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
      <h3 class="text-center color-03">ข่าวสารประชาสัมพันธ์</h3>
      <div class="grids">
        <div class="grid lg-30">
          <div class="tab-container">
            <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
                <?php foreach($categories as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                    <h3 class="fw-300 lh-xs">ประเภท</h3>
                </div>
                <?php }?>
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
            <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?php for($j=0; $j<3; $j++){?>
                    <div class="grid lg-1-3 sm-50">
                       <div class="ss-card ss-card-05">
                         <div class="ss-img">
                           <div class="img-bg" style="background-image:url('public/assets/app/images/content/1<?= ($i+$j+1)%4+1 ?>.jpg');"></div>
                        </div>
                          <div class="line-1"></div><div class="line-2"></div>
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
   
  <?php // include_once('include/footer-04.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>