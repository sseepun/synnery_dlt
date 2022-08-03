<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-06.php'); ?>

  <section class="banner-06">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<7; $i++){?>
          <div class="slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/06.jpg');"></div>
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
          <img src="public/assets/app/images/icon/59.png" alt="Arrow" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/assets/app/images/icon/60.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

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
      <div class="tab-container">
        <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <div class="ss-title-03">
                <div class="wrapper">
                  <h3 class="fw-400 color-03 lh-2xs"><?= $d['title'] ?></h3>
                  <p class="lg">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>

        <div class="grids pt-4">
          <div class="grid xl-20 lg-25 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
            <div class="section-title">
              <div class="icon">
                <img src="public/assets/app/images/icon/57.png" alt="Icon" />
              </div>
              <h5 class="color-06 fw-500 ws-nowrap ml-3">ประเภท</h5>
            </div>
            <div class="tabs tabs-04 mt-4">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <p class="fw-400"><?= $d['title'] ?></p>
                  <?php if($i==0){?><div class="alert">10</div><?php }?>
                </div>
              <?php }?>
            </div>
            <div class="btns jc-center pt-6 mt-1">
              <a class="btn btn-more" href="#">
                อ่านทั้งหมด
                <div class="icon ml-2">
                  <em class="fa-solid fa-angle-right"></em>
                </div>
              </a> 
            </div>
          </div>
          <div class="grid xl-80 lg-75 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
            <div class="tab-contents">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?php for($j=0; $j<1; $j++){?>
                    <div class="ss-card ss-card-22">
                      <div class="img-container">
                        <div class="ss-img vertical-2">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/5<?= ($i+$j)%5+5 ?>.jpg');"></div>
                          <div class="hover-container">
                            <div class="icon">
                              <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <div class="wrapper">
                          <div class="ss-tags">
                            <h3 class="tag lh-xs bg-03">การเดินทาง</h3>
                          </div>
                          <div class="d-flex ai-center mt-3">
                            <p class="sm">17 กุมภาพันธ์ 2565</p>
                            <div class="ml-6 pl-6">
                              <img src="public/assets/app/images/icon/58.png" alt="Icon" height="10" /> 
                              <span class="p sm ml-1">200</span>
                            </div>
                          </div>
                          <div class="mt-1">
                            <a class="title h5 fw-400 lh-sm h-color-06" href="#">
                              กรมการขนส่งทางบก เผย!! มีผู้ให้บริการรถยนต์รับจ้างผ่านระบบแอปพลิเคชันผ่าน
                              กรมการขนส่งทางบก เผย!! มีผู้ให้บริการรถยนต์รับจ้างผ่านระบบแอปพลิเคชันผ่าน
                            </a>
                            <p class="desc mt-3">
                              ตามที่นายศักดิ์สยาม​ ชิดชอบ รัฐมนตรีว่าการกระทรวงคมนาคม ได้มี
                              นโยบายให้กระทรวงคมนาคมออกกฎกระทรวงรถยนต์รับจ้างผ่านระบบอิเล็กทรอนิกส์ พ.ศ. 2564
                              ตามที่นายศักดิ์สยาม​ ชิดชอบ รัฐมนตรีว่าการกระทรวงคมนาคม ได้มี
                              นโยบายให้กระทรวงคมนาคมออกกฎกระทรวงรถยนต์รับจ้างผ่านระบบอิเล็กทรอนิกส์ พ.ศ. 2564
                            </p>
                          </div>
                          <div class="btns pt-6">
                            <a class="btn btn-action btn-sm style-03 btn-08" href="#">
                              <span>อ่านต่อ</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              <?php }?>
          </div>
        </div>

        <div class="tab-contents" data-aos="fade-up" data-aos-delay="450">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <div class="grids no-gap">
                <?php for($j=0; $j<4; $j++){?>
                  <div class="grid lg-25">
                    <div class="ss-card ss-card-21">
                      <div class="ss-img vertical-2">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/5<?= ($i+$j+1)%5+5 ?>.jpg');"></div>
                        <div class="hover-container">
                          <div class="icon">
                            <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <div class="ss-tags">
                          <div class="tag no-br ws-nowrap"><?= $d['title'] ?></div>
                        </div>
                        <div class="d-flex ai-center">
                          <p class="sm">17 กุมภาพันธ์ 2565</p>
                          <div class="ml-6 pl-6">
                            <img src="public/assets/app/images/icon/58.png" alt="Icon" height="10" /> 
                            <span class="p sm ml-1">200</span>
                          </div>
                        </div>
                        <a class="title p lg fw-300 lh-sm mt-1" href="#">
                          กรมการขนส่งทางบก เตือนภัย!!! ระวังมิจฉาชีพหลอกทำใบขับขี่ปลอมบน
                          กรมการขนส่งทางบก เตือนภัย!!! ระวังมิจฉาชีพหลอกทำใบขับขี่ปลอมบน
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
  </section>

  <section class="section-28 section-padding">
    <div class="container">
      <div class="grids">
        <div class="grid lg-40">
          <div class="ss-title-03 jc-start">
            <div class="wrapper">
              <h3 class="fw-400 color-03 lh-2xs">แบบคำขอ</h3>
              <p class="lg">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
          </div>
          <div class="ss-card ss-card-23 mt-6" data-aos="fade-up" data-aos-delay="300">
            <?php for($i=0; $i<4; $i++){?>
              <div class="d-flex mt-1">
                <div class="text-container">
                  <div class="d-flex ai-center">
                    <div class="icon">
                      <img src="public/assets/app/images/icon/55.png" alt="Icon" />
                    </div>   
                    <a class="title p lg ml-3" href="#">
                      คำขอต่ออายุใบอนุญาตประกอบการขนส่ง
                    </a>      
                  </div> 
                </div> 
                <div class="icon d-flex ai-center jc-center">
                   <img src="public/assets/app/images/icon/56.png" alt="Icon" />
                </div>
              </div> 
            <?php }?>
          </div>
          <div class="btns jc-center pt-6 mt-1">
            <a class="btn btn-more" href="#">
              อ่านทั้งหมด
              <div class="icon ml-2">
                <em class="fa-solid fa-angle-right"></em>
              </div>
            </a> 
          </div>
        </div>    
        <div class="grid lg-60 mt-0">
          <div class="blocks">
            <div class="block">
              <div class="text-wrapper">
                <div class="ss-title-03 jc-start">
                  <div class="wrapper">
                    <h3 class="fw-400 color-white lh-2xs">คลังวิดีโอ</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>          
      </div>
    </div>
  </section>

  <div class="section-30 section-padding">
    <div class="container">
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="ss-card ss-card-24 d-flex">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/6<?= ($i+$j+1)%4+0 ?>.jpg');"></div>
                </div>
                <div class="text-container ml-3">
                  <a class="title p fw-400 " href="#">ความรู้เกี่ยวกับการสอบใบขับขี่</a>
                  <div class="btns mt-3">
                    <a class="btn btn-more" href="#">
                      <div class="icon ml-2 bg-03">
                        <em class="fa-solid fa-angle-right"></em>
                      </div>
                    </a> 
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="btns jc-center pt-6 mt-1">
          <a class="btn btn-more" href="#">
            อ่านทั้งหมด
            <div class="icon ml-2 bg-03">
              <em class="fa-solid fa-angle-right"></em>
            </div>
          </a> 
        </div>
      </div>
    </div>
     
  </div>

  <section class="section-29" data-aos="fade-up" data-aos-delay="0">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-03.jpg')"></div>
    <div class="container">
      <div class="grids">
        <div class="grid lg-25 md-50 mt-0">
          <a class="section-tab main" href="#">
            <div class="icon">
              <img src="public/assets/app/images/icon/28.png" alt="Icon" />
            </div>
            <div class="text-wrapper">
              <p class="fw-300">CALL CENTER</p>
              <h3 class="lg fw-400 lh-3xs">1584</h3>
            </div>
          </a>
        </div>
        <div class="grid lg-25 md-50 mt-0">
          <a class="section-tab" href="#">
            <div class="icon">
              <img src="public/assets/app/images/icon/29.png" alt="Icon" />
            </div>
            <div class="text-wrapper">
              <p class="lg fw-300">จัดซื้อจัดจ้าง</p>
              <div class="arrow"><em class="fa-solid fa-chevron-right"></em></div>
            </div>
          </a>
        </div>
        <div class="grid lg-25 md-50 mt-0">
          <a class="section-tab" href="#">
            <div class="icon">
              <img src="public/assets/app/images/icon/30.png" alt="Icon" />
            </div>
            <div class="text-wrapper">
              <p class="lg fw-300">ค้นหาสำนักงาน</p>
              <div class="arrow"><em class="fa-solid fa-chevron-right"></em></div>
            </div>
          </a>
        </div>
        <div class="grid lg-25 md-50 mt-0">
          <a class="section-tab" href="#">
            <div class="icon">
              <img src="public/assets/app/images/icon/31.png" alt="Icon" />
            </div>
            <div class="text-wrapper">
              <p class="lg fw-300">ติดต่อกรม</p>
              <div class="arrow"><em class="fa-solid fa-chevron-right"></em></div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section
   
 <?php include_once('include/footer-06.php'); ?>
 <?php include_once('include/script.php'); ?>  
</body>
</html>