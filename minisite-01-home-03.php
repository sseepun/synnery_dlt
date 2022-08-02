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

  <section class="section-27 section-padding">
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
                    <div class="ss-sep-03 bg-15"></div>
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
                      <?php }?>
                    </div>
                  <?php }?>
                </div>  
              </div> 
              <div class="grid lg-50 md-100 sm-100">
                <div class="tab-contents pl-5" data-aos="fade-up" data-aos-delay="0">
                  <?php foreach($categories as $i=>$d){?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <div class="ss-card ss-card-22">
                        <div class="ss-tags">
                          <h3 class="tag lh-xs bg-03"><?= $d['title'] ?></h3>
                        </div>
                        <div class="d-flex ai-center mt-2">
                          <div class="date">
                            <p>17 กุมภาพันธ์ 2565</p>
                          </div>
                          <div class="icon ml-6 pl-6">
                            <img src="public/assets/app/images/icon/53.png" alt="Icon" /> 
                            <span class="color-16 ml-1">200</span>
                          </div>
                        </div>
                        <div class="text-container">
                          <h5 class="fw-400">
                            กรมการขนส่งทางบก เผย!! มีผู้ให้บริการรถยนต์รับจ้างผ่านระบบแอปพลิเคชันผ่าน...
                          </h5>
                          <p class="desc lg color-16 mt-2">
                            ตามที่นายศักดิ์สยาม​ ชิดชอบ รัฐมนตรีว่าการกระทรวงคมนาคม ได้มี
                            นโยบายให้กระทรวงคมนาคมออกกฎกระทรวงรถยนต์รับจ้างผ่านระบบอิเล็กทรอนิกส์ พ.ศ. 2564
                          </p>
                      </div>
                      </div>
                    </div>
                  <?php }?>
                  <div class="btns d-flex mt-6">
                    <a href="#" class="btn btn-action style-03 btn-08">
                      อ่านต่อ
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grid lg-100">
          <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <div class="grids no-gap">
                  <?php for($j=0; $j<4; $j++){?>
                    <div class="grid lg-25">
                      <div class="ss-card ss-card-21">
                        <div class="ss-img vertical-2">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/5<?= ($i+$j+1)%5+5 ?>.jpg');"></div>
                          <div class="hover-container">
                          <div class="icon sm">
                            <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                          </div>
                        </div>
                        </div>
                        <div class="text-container">
                        <div class="ss-tags">
                          <div class="tag no-br ws-nowrap"><?= $d['title'] ?></div>
                        </div>
                        <div class="d-flex ai-center mt-2">
                          <div class="date">
                            <p>17 กุมภาพันธ์ 2565</p>
                          </div>
                          <div class="icon ml-6 pl-6">
                            <img src="public/assets/app/images/icon/53.png" alt="Icon" /> 
                            <span class="color-16 ml-1">200</span>
                          </div>
                      </div>
                        <a class="title p lg fw-300 lh-sm mt-2" href="#">
                           กรมการขนส่งทางบก เตือนภัย!!! ระวังมิจฉาชีพหลอกทำใบขับขี่ปลอมบน
                        </a>
                      </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php }?>
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