<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    
   <?php // include_once('include/topnav.php'); ?>

    <section class="banner-01">
      <div class="slide-container">
        <div class="slides">
          <?php for($i=0; $i<4; $i++){?>
            <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
              <div class="container">
                <div class="animate" style="--delay:.4s;">
                  <div class="wrapper color-white">
                    <h2 class="fw-400 lh-3xs">ศูนย์รวมข้อมูลการขนส่ง</h2>
                    <h1 class="fw-700 lh-3xs"><span class="h2 fw-400">ด้วย</span>รถบรรทุก</h1>
                    <p class="h3 fw-400">TRUCK DATA SERVICE CENTER</p>
                    <div class="btns mt-4">
                      <a href="#" class="btn btn-action btn-s">เข้าสู่เว็บไซต์ 
                        <em class="fa-solid fa-arrow-right-long ml-2"></em>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
          <div class="bullet">
            <div class="container">
              <div class="bullet-wrapper">
                <div class="dots"></div>
              </div>
          </div>
        </div>
    </div>
    </section>

    <section class="section-01">
      <div class="elementor-container">
        <div class="grids">
          <div class="grid lg-25 md-50 sm-100 mt-0 mr-0 ">
            <div class="elementor-item d-flex">
              <div class="elementor-icon">
                <img src="public/assets/app/images/icon/01.png" width="45" alt="internet-service"/>
              </div>
              <div class="elementor-text">
                <a href="#" class="h4 color-white fw-600 h-color-s">บริการผ่านอินเทอร์เน็ต</a>
              </div>
            </div>
          </div>
          <div class="grid lg-25 md-50 sm-100 mt-0 mr-0">
            <div class="elementor-item">
              <div class="elementor-icon">
                <img src="public/assets/app/images/icon/02.png" width="45" alt="internet-service"/>
              </div>
              <div class="elementor-text">
                <a href="#" class="h4 color-white fw-600 h-color-s">คลังความรู้</a>
              </div>
            </div>    
          </div>
          <div class="grid lg-25 md-50 sm-100 mt-0 mr-0">
            <div class="elementor-item">
              <div class="elementor-icon">
                <img src="public/assets/app/images/icon/03.png" width="45" alt="internet-service"/>
              </div>
              <div class="elementor-text">
                <a href="#" class="h4 color-white fw-600 h-color-s">รับเรื่องร้องเรียน</a>
              </div>
            </div> 
          </div>
          <div class="grid lg-25 md-50 sm-100 mt-0 mr-0">
            <div class="elementor-item">
              <div class="elementor-icon">
                <img src="public/assets/app/images/icon/04.png" width="45" alt="internet-service"/>
              </div>
              <div class="elementor-text">
                <a href="#" class="h4 color-white fw-600 h-color-s">ร้องเรียนการทุจริตเจ้าหน้าที่</a>
              </div>
            </div> 
          </div>
        </div>    
      </div>  
        
      <?php
        $categories = [
          [ 
            'title' => 'ข่าวประชาสัมพันธ์', 
          ], [
            'title' => 'ข่าวประกาศกรมฯ', 
          ], [
            'title' => 'ภาพข่าวกรมการขนส่งทางบก', 
          ], [
            'title' => 'คลังวิดีโอ', 
          ], [
            'title' => 'ประกาศรับสมัครงาน', 
          ],
        ];
      ?> 
     
      <div class="tab-container">
        <div class="container">
          <h3 class="text-center letter-spacing sm fw-600">ข่าวใหม่</h3>
          <div class="tabs tabs-01 mt-4" data-aos="fade-up" data-aos-delay="150">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                 <?= $d['title'] ?>
              </div>
            <?php }?>
          </div>

          <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <div class="card-news">
                  <div class="grids">
                    <div class="background-overlay"></div>
                      <div class="grid lg-50 md-100 sm-100">
                        <div class="card-img pt-3">
                        <div class="ss-card-01">
                          <a class="ss-img" href="#">
                            <div class="img-bg bradius-round" style="background-image:url('public/assets/app/images/bg/09.jpg');"></div>
                          </a>
                        </div>
                        </div>
                      </div>
                      <div class="grid lg-50 md-100 sm-100 ">
                        <div class="ss-text-wrapper pt-3">
                          <div class="ss-tags mb-4">
                            <a class="tag fw-700" href="#">ข่าวประชาสัมพันธ์</a>
                          </div>
                          <a class="h3 mt-6  fw-800">
                            กรมการขนส่งทางบก มีความห่วงใยและ <br> เข้าใจถึงผลกระทบจากราคาพลังงานขอ 
                            <br> ให้ผู้ประกอบการขนส่งสินค้า
                          </a>
                          <div class="d-flex mt-4">
                            <div>
                              <em class="fa-solid fa-calendar-days color-p p xs"></em>
                              <span class="color-gray ml-1">16 กุมภาพันธ์ 2565</span>
                            </div>
                            <div class="ml-4">
                              <em class="fa-regular fa-eye color-p p xs"></em>
                              <span class="color-gray ml-1">285</span>
                            </div>
                          </div>
                            <p class="mt-4 fw-600">
                              กรมการขนส่งทางบก มีความห่วงใยและเข้าใจถึงผลกระทบจาก <br> ราคาพลังงาน ขอให้ผู้ประกอบการขนส่งสินค้า 
                              ผู้ขับรถบรรทุก และ <br> ผู้ขับรถแท็กซี่ แสดงออกอย่างเหมาะสมภายใต้ขอบเขตของ
                            </p>
                        </div>
                      </div>
                    </div>    
                  </div> 
                  
                  <div class="mt-4"></div>
                    <div class="grids"> 
                      <div class="grid lg-1-3 md-50">
                        <div class="ss-card">
                          <a class="ss-img" href="#">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/07.jpg');"></div>
                          </a>
                          <div class="text-container">
                            <a class="h4 title fw-600 h-color-p lh-xs d-block">
                              กรมการขนส่งทางบก แนะ!!! เลือกใช้บริการรถจักรยานยนต์สาธารณะถูกกฎหมายสังเกตแผ่นป้ายทะเบียนสีเหลือง ผู้ขับขี่สวมเสื้อวิน 
                            </a>
                            <div class="card-line"></div>
                              <div class="d-flex jc-space-between ai-center">
                                <div class="d-flex mt-4">
                                  <div class="date">
                                    <em class="fa-solid fa-calendar-days color-p p xs"></em>
                                    <span class="ml-1 color-gray">16 กุมภาพันธ์ 2565</span>
                                  </div>
                                  <div class="ml-1">
                                    <em class="fa-regular fa-eye color-p p xs"></em>
                                    <span class="ml-1 color-gray">285</span>
                                  </div>
                                </div>
                                <div class="pt-5">
                                  <a href="#" class="btn-sm bg-p">
                                    <em class="fa-solid fa-arrow-right-long color-white p-3"></em>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid lg-1-3 md-50">
                        <div class="ss-card">
                          <a class="ss-img" href="#">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/06.jpg');"></div>
                          </a>
                          <div class="text-container">
                            <a class="h4 title fw-600 h-color-p lh-xs d-block">มอบโล่รางวัลและประกาศเกียรติคุณ “คนต้นแบบคมนาคม ประจำปี 2564"</a>
                            <div class="card-line"></div>
                            <div class="d-flex jc-space-between ai-center">
                              <div class="d-flex">
                                <div class="date">
                                  <em class="fa-solid fa-calendar-days color-p p xs"></em>
                                  <span class="p xs ml-1 color-gray">16 กุมภาพันธ์ 2565</span>
                                </div>
                                <div class="ml-1">
                                  <em class="fa-regular fa-eye color-p p xs"></em>
                                  <span class="p xs ml-1 color-gray">285</span>
                                </div>
                              </div>
                              <div class="pt-5">
                                <a href="#" class="btn-sm bg-p">
                                  <em class="fa-solid fa-arrow-right-long color-white p-3"></em>
                                </a>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="grid lg-1-3 md-50">
                      <div class="ss-card">
                        <a class="ss-img" href="#">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/0<?= ($i+3)%3+3 ?>.jpg');"></div>
                        </a>
                        <div class="text-container">
                          <a class="h4 title fw-600 h-color-p lh-xs d-block">แถลงข่าวโครงการ “ฮอนด้าจัดให้ ชาวมอเตอร์ไซค์ต้องมีใบขับขี่"</a>
                          <div class="card-line"></div>
                          <div class="d-flex jc-space-between ai-center">
                            <div class="d-flex mt-4">
                              <div class="date">
                                <em class="fa-solid fa-calendar-days color-p p xs"></em>
                                <span class="p xs ml-1 color-gray">16 กุมภาพันธ์ 2565</span>
                              </div>
                              <div class="ml-1">
                                <em class="fa-regular fa-eye color-p p xs"></em>
                                <span class="p xs ml-1 color-gray">285</span>
                              </div>
                            </div>
                            <div class="pt-5">
                              <a href="#" class="btn-sm bg-p">
                                <em class="fa-solid fa-arrow-right-long color-white p-3"></em>
                              </a>
                            </div>
                          </div>
                        </div>
                        </div>
                    </div>
                    <div class="btns-right mt-4 pr-6 pos-relative">
                      <a href="#" class="btn btn-action btn-s">อ่านทั้งหมด 
                        <em class="fa-solid fa-arrow-right-long ml-2"></em>
                      </a>
                    </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
  </section>

  
  <section class="banner-02" style="background-image:url('public/assets/app/images/bg/01.png');">
  <h3 class="text-center letter-spacing sm fw-600 pos-absolute" style="top:-13rem; left:50%; transform:translate(-50%, 50%)">ป้ายแบรนเนอร์</h3>
      <div class="slide-container">
        <div class="slides">
          <?php for($i=0; $i<4; $i++){?>
            <div class="slide">
              <div class="container">
                <div class="elementor-container">
                  <div class="grids">
                    <div class="grid mt-0 lg-25 md-50">
                      <div class="elementor-item">
                        <div class="elementor-text">
                            <a href="#" class="h4 title d-block fw-600 h-color-s lh-xs">
                                คู่มือการใช้ระบบบริหารจัดการอุปกรณ์และเครื่องมือด้าน ICT สำหรับคนพิการ
                            </a>
                        </div>
                        <div class="d-flex jc-space-between ai-center">
                          <div class="elementor-icon">
                            <img src="public/assets/app/images/icon/05.png" width="45" alt="internet-service"/>
                          </div>
                          <a href="#" class="btn-sm">
                            <em class="fa-solid fa-arrow-right-long color-p p-3"></em>
                          </a>
                        </div>
                      </div> 
                    </div>
                    <div class="grid mt-0 lg-25 md-50">
                    <div class="elementor-item">
                        <div class="elementor-text">
                            <a href="#" class="h4 title d-block fw-600 h-color-s ">
                             โครงการศึกษา M-MAP ระยะที่ 2 
                            </a>
                        </div>
                        <div class="d-flex jc-space-between ai-center">
                          <div class="elementor-icon">
                            <img src="public/assets/app/images/icon/06.png" width="45" alt="internet-service"/>
                          </div>
                          <a href="#" class="btn-sm">
                            <em class="fa-solid fa-arrow-right-long color-p p-3"></em>
                          </a>
                        </div>
                      </div>
                      </div>
                      <div class="grid mt-0 lg-25 md-50">
                      <div class="elementor-item">
                        <div class="elementor-text">
                            <a href="#" class="h4 title d-block fw-600 h-color-s lh-xs">
                            ข้อมูลผลการคำนวณต้นทุนต่อหน่วยผลผลิต ประจำปี
                            </a>
                        </div>
                        <div class="d-flex jc-space-between ai-center">
                          <div class="elementor-icon">
                            <img src="public/assets/app/images/icon/07.png" width="45" alt="internet-service"/>
                          </div>
                          <a href="#" class="btn-sm">
                            <em class="fa-solid fa-arrow-right-long color-p p-3"></em>
                          </a>
                        </div>
                      </div> 
                      </div>
                      <div class="grid mt-0 lg-25 md-50">
                      <div class="elementor-item">
                        <div class="elementor-text">
                            <a href="#" class="h4 title d-block fw-600 h-color-s lh-xs">
                            E-Learning สำนักงานคณะกรรมการข้อมูลข่าวสารของราชการ
                            </a>
                        </div>
                        <div class="d-flex jc-space-between ai-center">
                          <div class="elementor-icon">
                            <img src="public/assets/app/images/icon/08.png" width="45" alt="internet-service"/>
                          </div>
                          <a href="#" class="btn-sm">
                            <em class="fa-solid fa-arrow-right-long color-p p-3"></em>
                          </a>
                        </div>
                      </div> 
                      </div>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
          <div class="bullet">
            <div class="container">
              <div class="bullet-wrapper">
                <div class="dots"></div>
              </div>
              <div class="btns-right">
              <a href="#" class="btn btn-action btn-s">ดูทั้งหมด 
                <em class="fa-solid fa-arrow-right-long ml-2"></em>
              </a>
              </div>
          </div>
        </div>
    </section>

    <div class="client-01 ">
      <div class="slide-container" data-aos="fade-up" data-aos-delay="0">
        <div class="slides">
          <?php for($i=0; $i<4; $i++){?>
            <div class="slide">
              <div class="wrapper">
                <a class="client" href="#">
                  <img src="public/assets/app/images/client/0<?= $i+1 ?>.png" alt="Client" />
                </a>
              </div>
            </div>
          <?php }?>
        </div>
      </div>      
  </div>
    
   
    <?php include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>

</body>
</html>