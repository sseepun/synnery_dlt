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
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
            <div class="container">
              <div class="text-wrapper color-white">
                <div class="animate" style="--delay:.4s;">
                  <h2 class="fw-100 lh-3xs xs-no-br">
                    การเดินทางด้วย <br />
                    <span class="text-xl fw-400">รถสาธาณะแบบวิถีใหม่</span>
                  </h2>
                </div>
                <p class="lg fw-200 mt-3 animate" style="--delay:.55s;">
                  ไม่ว่าจะเป็นรถเมล์ รถโดยสารประจำทาง <br> และรถโดยสารไม่ประจำทาง
                  รถยนต์รับจ้าง (แท็กซี่) และรถบริการ รถจักรยานยนต์สาธารณะ <br>
                  และรถรับจ้างอื่นๆ ควรปฏิบัติดังนี้
                </p>
                <div class="btns mt-4 animate" style="--delay:.7s;">
                  <a href="#" class="btn btn-action style-02 btn-02">
                    <span>รายละเอียดเพิ่มเติม</span> 
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

  <section class="section-padding">
    <div class="container">
      <h3 class="text-center">ระบบสำนักงานออนไลน์</h3>  
      <div class="grids">
        <div class="grid lg-1-3">
          <div class="ss-card">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/11.jpg');"></div>
            </div>
          </div>
        </div>  
        <div class="grid lg-1-3">
          <div class="ss-card">
            <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/11.jpg');"></div>
            </div>
          </div> 
        </div>    
        <div class="grid lg-1-3">
          <div class="ss-card">
            <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/11.jpg');"></div>
            </div>
          </div> 
        </div>  
      </div>   
    </div>
  </section>

  <!-- <?php
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
                        <a class="tag fw-600" href="#">ข่าวประชาสัมพันธ์</a>
                      </div>
                      <a href="#" class="h4 title fw-400 h-color-s md-no-br">
                        กรมการขนส่งทางบก มีความห่วงใยและ <br> เข้าใจถึงผลกระทบจากราคาพลังงานขอ 
                        <br> ให้ผู้ประกอบการขนส่งสินค้า
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
                      </div>
                      <p class="mt-4 title fw-400 md-no-br">
                        กรมการขนส่งทางบก มีความห่วงใยและเข้าใจถึงผลกระทบจาก <br> ราคาพลังงาน ขอให้ผู้ประกอบการขนส่งสินค้า 
                        ผู้ขับรถบรรทุก และ <br> ผู้ขับรถแท็กซี่ แสดงออกอย่างเหมาะสมภายใต้ขอบเขตของ
                      </p>
                        <div class="block text-right mt-4">
                          <a class="more" href="#">
                            <em class="fa-solid fa-arrow-right-long"></em>
                          </a>
                        </div>
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

  <section class="section-10 ovf-hidden">
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

  <section class="section-11 section-padding">
    <img class="pattern" src="public/assets/app/images/bg/pattern-04.png" alt="Pattern" />
    <div class="container">
      <div class="grids">
        <div class="grid lg-40">
        <div class="ss-img">
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/16.png');"></div>
        </div>   
        </div>   
        <div class="grid lg-20">
          <div class="ss-img">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/17.png');"></div>
          </div>   
        </div>   
        <div class="grid lg-20">
          <div class="ss-img">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/18.png');"></div>
          </div>   
        </div>
        <div class="grid lg-20">
          <div class="ss-img">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/19.png');"></div>
          </div> 
        </div>
      </div>    
    </div>
  </section> -->
   
  <?php //include_once('include/footer-01.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>