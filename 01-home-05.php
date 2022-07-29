<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php // include_once('include/topnav.php'); ?>

  <section class="banner-05">
    <!-- <img class="pattern" src="public/assets/app/images/bg/pattern-03.png" alt="Pattern" /> -->
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
                  <a href="#" class="btn btn-action style-05 btn-03">
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

  <section class="section-21">
    <img class="pattern" src="public/assets/app/images/bg/pattern-06.png" alt="Pattern" /> 
  </section>

  <section class="section-22 section-padding">
    <div class="container">
      <h3 class="text-center fw-600 color-p animate">ระบบสำนักงานออนไลน์</h3>  
      <div class="bottom-line"></div>   
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<2; $i++){?>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/15.jpg');"></div>
                </div>
                <div class="card-footer ">
                  <div class="text-container">
                    <p class="xs text-center title">การอบรมต่ออายุใบอนุญาตขับรถ ( E-learning )</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/16.jpg');"></div>
                </div>
                <div class="card-footer">
                  <div class="text-container">
                    <p class="xs text-center title">การจองคิวผ่านแอปพลิเคชัน DLT Smart Queue</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/17.jpg');"></div>
                </div>
                <div class="card-footer">
                  <div class="text-container">
                    <p class="xs text-center title">การจองคิวผ่านแอปพลิเคชัน DLT Smart Queue</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/18.jpg');"></div>
                </div>
                <div class="card-footer">
                  <div class="text-container">
                    <p class="xs text-center title">การจองคิวผ่านแอปพลิเคชัน DLT Smart Queue</p>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="dot-container"></div>
        <div class="btns" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn btn-action style-05 btn-05">
            <span>ดูทั้งหมด</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
  </section>

  <!-- <div class="section-23 section-padding">
    <div class="container">
      <h3 class="text-center">ข่าวประชาสัมพันธ์</h3>     
       <div class="grids">
         <div class="grid lg-1-3">
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
       </div>    
    </div>       
  </div> -->


   
  <?php //include_once(' include/footer-05.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>