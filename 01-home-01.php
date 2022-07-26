<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading bg-sgray">
  <?php // include_once('include/page-loader.php'); ?>
  <?php // include_once('include/topnav.php'); ?>

  <section class="banner-03">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/04.jpg');"></div>
            <div class="container">
              <div class="text-wrapper color-white">
                <div class="animate" style="--delay:.4s;">
                  <h2 class="fw-100 lh-3xs xs-no-br">
                    ศูนย์รวมข้อมูลการขนส่ง <br />
                    ด้วย<span class="text-xl fw-400">รถบรรทุก</span>
                  </h2>
                </div>
                <p class="h4 fw-200 mt-3 animate" style="--delay:.55s;">
                  TRUCK DATA SERVICE CENTER
                </p>
                <div class="btns mt-4 animate" style="--delay:.7s;">
                  <a href="#" class="btn btn-action style-02 btn-02">
                    <span>เข้าสู่เว็บไซต์</span> 
                    <div class="icon ml-3">
                      <em class="fa-solid fa-arrow-right-long"></em>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="dot-container"></div>
    </div>
  </section>

  <section class="section-09">
    <div class="container">
      <div class="section-cards" data-aos="fade-up" data-aos-delay="0">
        <a class="section-card" href="#">
          <div class="icon">
            <img src="public/assets/app/images/icon/18.png" alt="Icon" />
          </div>
          <div class="text-wrapper">
            <h6 class="fw-300 lh-xs">บริการผ่านอินเทอร์เน็ต</h6>
          </div>
        </a>
        <a class="section-card" href="#">
          <div class="icon">
            <img src="public/assets/app/images/icon/19.png" alt="Icon" />
          </div>
          <div class="text-wrapper">
            <h6 class="fw-300 lh-xs">คลังความรู้</h6>
          </div>
        </a>
        <a class="section-card" href="#">
          <div class="icon">
            <img src="public/assets/app/images/icon/20.png" alt="Icon" />
          </div>
          <div class="text-wrapper">
            <h6 class="fw-300 lh-xs">รับเรื่องร้องเรียน</h6>
          </div>
        </a>
        <a class="section-card" href="#">
          <div class="icon">
            <img src="public/assets/app/images/icon/21.png" alt="Icon" />
          </div>
          <div class="text-wrapper">
            <h6 class="fw-300 lh-xs">ร้องเรียนการทุจริตเจ้าหน้าที่</h6>
          </div>
        </a>
      </div>    
    </div>
  </section>

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
  <section class="section-padding ovf-hidden">
    <div class="container">
      <div class="tab-container">
        <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <h3 class="fw-300 lh-xs text-center"><?= $d['title'] ?></h3>
            </div>
          <?php }?>
        </div>

        <div class="tabs tabs-03 mt-4" data-aos="fade-up" data-aos-delay="150">
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
              
              <div class="grids jc-center ai-center">
                <div class="grid lg-80 sm-100">
                  <div class="ss-card ss-card-06">
                    <div class="img-container">
                      <div class="wrapper">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/11.jpg');"></div>
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <div class="wrapper">
                      <div class="ss-tags mb-4">
                        <a class="tag fw-700" href="#">ข่าวประชาสัมพันธ์</a>
                      </div>
                      <a href="#" class="h4 h-color-p ">
                        กรมการขนส่งทางบก มีความห่วงใยและ <br> เข้าใจถึงผลกระทบจากราคาพลังงานขอ 
                        <br> ให้ผู้ประกอบการขนส่งสินค้า
                      </a>
                      <div class="d-flex mt-4">
                        <div class="date">
                          <em class="fa-solid fa-calendar-days color-p p xs"></em>
                          <span class="ml-1 color-gray">16 กุมภาพันธ์ 2565</span>
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
              </div>

              <div class="grids jc-center pt-2">
                <?php for($j=0; $j<3; $j++){?>
                  <div class="grid lg-1-3 sm-50">
                    <div class="ss-card ss-card-05">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/1<?= ($i+$j+1)%4+1 ?>.jpg');"></div>
                      </div>
                      <div class="text-container">
                        <a class="title p lg fw-400 h-color-05 lh-sm" href="#">
                          กรมการขนส่งทางบก แนะ!!! เลือกใช้บริการรถจักรยานยนต์สาธารณะถูกกฎหมายสังเกตแผ่นป้ายทะเบียนสีเหลือง ผู้ขับขี่สวมเสื้อวิน 
                        </a>
                        <div class="card-footer">
                          <div class="blocks">
                            <div class="block">
                              <p clas="sm">
                                <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                                16 กุมภาพันธ์ 2565
                              </p>
                            </div>
                            <div class="block">
                              <p clas="sm">
                                <div class="icon"><em class="fa-regular fa-eye"></em></div>
                                285
                              </p>
                            </div>
                          </div>
                          <div class="block">
                            <a class="more" href="#">
                              <em class="fa-solid fa-arrow-right-long"></em>
                            </a>
                          </div>
                        </div>
                      </div>
                      <div class="line-1"></div><div class="line-2"></div>
                    </div>
                  </div>
                <?php }?>
              </div>
              
              <div class="btns jc-end pt-6">
                <a href="#" class="btn btn-action style-02 btn-02">
                  <span>อ่านทั้งหมด</span> 
                  <div class="icon ml-3">
                    <em class="fa-solid fa-arrow-right-long"></em>
                  </div>
                </a>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section class="section-10  ovf-hidden">
    <div class="container">
      <h3 class="fw-300 lh-xs text-center" data-aos="fade-up" data-aos-delay="0">
        ป้ายแบรนเนอร์
      </h3>
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<2; $i++){?>
            <div class="slide">
              <div class="section-card" href="#">
                <a class="p title lg fw-400 h-color-05 lh-sm" href="#">
                  คู่มือการใช้ระบบบริหารจัดการอุปกรณ์และเครื่องมือด้าน ICT สำหรับคนพิการ
                </a>
                <div class="card-footer d-flex jc-space-between ai-center">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/22.png" alt="Icon" />
                  </div>
                  <a class="more" href="#">
                    <em class="fa-solid fa-arrow-right-long color-p p-3"></em>
                  </a>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <a class="p title lg fw-400 h-color-05 lh-sm" href="#">
                  โครงการศึกษา M-MAP ระยะที่ 2
                </a>
                <div class="card-footer d-flex jc-space-between ai-center">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/23.png" alt="Icon" />
                  </div>
                  <a class="more" href="#">
                    <em class="fa-solid fa-arrow-right-long"></em>
                  </a>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <a class="p title lg fw-400 h-color-05 lh-sm" href="#">
                  ข้อมูลผลการคำนวณต้นทุนต่อหน่วยผลผลิต ประจำปี
                </a>
                <div class="card-footer d-flex jc-space-between ai-center">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/24.png" alt="Icon" />
                  </div>
                  <a class="more" href="#">
                    <em class="fa-solid fa-arrow-right-long"></em>
                  </a>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <a class="p title lg fw-400 h-color-05 lh-sm" href="#">
                  E-Learning สำนักงานคณะกรรมการข้อมูลข่าวสารของราชการ
                </a>
                <div class="card-footer d-flex jc-space-between ai-center">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/25.png" alt="Icon" />
                  </div>
                  <a class="more" href="#">
                    <em class="fa-solid fa-arrow-right-long"></em>
                  </a>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="dot-container"></div>
      </div>
      <div class="btns jc-end">
        <a href="#" class="btn btn-action style-02 btn-02">
          <span>อ่านทั้งหมด</span> 
          <div class="icon ml-3">
            <em class="fa-solid fa-arrow-right-long"></em>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="section-11">
   <img class="pattern" src="public/assets/app/images/bg/01.png" alt="Pattern" />

  </section>
   
  <?php  include_once('include/footer-01.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>