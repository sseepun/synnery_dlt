<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-04.php'); ?>

  <section class="banner-04">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
            <div class="container">
              <div class="text-wrapper color-white">
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
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="dot-container" data-aos="fade-up" data-aos-delay="0"></div>
    </div>
  </section>

  <section class="section-13 section-padding">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-center fw-600 color-10">
          ระบบสำนักงานออนไลน์
        </h3>  
        <div class="ss-sep-01 mt-1"></div>  
      </div> 
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/1<?= $i%4+5 ?>.jpg');"></div>
                </div>
                <div class="card-footer d-flex">
                  <div class="text-container">
                    <p class="title">การอบรมต่ออายุใบอนุญาตขับรถ ( E-learning )</p>
                  </div>
                  <div class="icon">
                    <img src="public/assets/app/images/icon/3<?= $i%4+2 ?>.png" alt="Icon" />
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="dot-container" data-aos="fade-up" data-aos-delay="300"></div>
        <div class="btns" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn btn-action style-02 btn-05">
            <span>ดูทั้งหมด</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
  </section>

  <section class="section-14 section-padding">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-center fw-600 color-10">
          ข่าวประชาสัมพันธ์
        </h3>  
        <div class="ss-sep-01 mt-1"></div>  
      </div> 
      <div class="grids jc-center pt-4">
        <div class="grid lg-1-3">
          <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/19.jpg');"></div>
            </div>
            <div class="text-container">
              <a class="btn-more" href="#">
                <em class="fa-solid fa-arrow-right"></em> 
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
              <a class="title p lg fw-400 h-color-09 lh-sm mt-4" href="#">
                ยกเลิกการเรียกภาพภ่ายบัตรประชาชนหรือภาพถ่ายสำเนาทะเบียนบ้าน
              </a>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
        </div>    
        <div class="grid lg-1-3">
          <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/20.jpg');"></div>
            </div>
            <div class="text-container">
              <a class="btn-more" href="#">
                <em class="fa-solid fa-arrow-right"></em> 
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
              <a class="title p lg fw-400 h-color-09 lh-sm mt-4" href="#">
                ประกาศเจตนารมณ์ เรื่อง "สุจริต โปร่งใส สำนักงานขนส่งจังหวัดสมุทรปราการใสสะอาด 2565" 
                และ "งดรับ งดให้" ของขวัญ ของกำนัลทุกชนิดจากการปฏิบัติหน้าที่ (์No  Gift Policy) 
              </a>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
        </div>
        <div class="grid lg-1-3">
          <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/21.jpg');"></div>
            </div>
            <div class="text-container">
              <a class="btn-more" href="#">
                <em class="fa-solid fa-arrow-right"></em> 
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
              <a class="title p lg fw-400 h-color-09 lh-sm mt-4" href="#">
                นวัตกรรมใหม่: ตรวจสอบเอกสารล่วงหน้าผ่านระบบ Internet
              </a>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
        </div>
      </div>  
      <div class="btns mt-6" data-aos="fade-up" data-aos-delay="300">
        <a href="#" class="btn btn-action style-02 btn-05">
          <span>อ่านทั้งหมด</span> 
          <div class="icon ml-3">
            <em class="fa-solid fa-arrow-right"></em>
          </div>
        </a>
      </div>
    </div>
  </section>

  <section class="section-15">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/assets/app/images/content/32.jpg');"></div>
            <div class="text-wrapper">
              <h5 class="color-white">ข่าวประกาศ</h5>
              <div class="ss-sep-01 ml-0"></div>
              <?php for($i=0; $i<4; $i++){?>
                <div class="d-flex mt-6 ss-sep-01-style-02">
                  <div class="icon-main">
                    <img src="public/assets/app/images/icon/36.png" alt="Icon" />
                  </div>
                  <div class="text-container d-flex flex-column jc-center ml-3">
                    <p class="color-white">
                      รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานทุนของกองทุนเพื่อความปลอดภัยใน <br>
                      การใช้รถใช้ถนนในตำแหน่งเจ้าพนักงานการเงินและบัญชี
                    </p>
                    <div class="card-footer">
                      <div class="blocks-icon">
                        <div class="block-icon">
                          <p clas="sm">
                            <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                            16 กุมภาพันธ์ 2565
                          </p>
                        </div>
                        <div class="block-icon">
                          <p clas="sm">
                            <div class="icon"><em class="fa-regular fa-eye"></em></div>
                            248
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
            <div class="btns d-flex jc-end pt-6" data-aos="fade-up" data-aos-delay="300">
              <a href="#" class="btn btn-action style-02 btn-05">
                <span>อ่านทั้งหมด</span> 
                <div class="icon ml-3">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>
              </a>
            </div>
          </div>
          <div class="subblocks">
            <div class="subblock">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/33.jpg');"></div>
              <div class="text-wrapper">
                <h5 class="color-white">งานด้านทะเบียนรถ</h5>
                <div class="ss-sep-01 ml-0"></div>
                <p class="lg mt-6">กระบวนงานที่เปิดให้บริการ</p>
                <ol class="pl-5">
                  <li>งานรับชำระภาษีประจำปี รถยนต์ รถจักรยานยนต์</li>
                  <li>การแจ้งย้ายรถออก</li>
                  <li>การแจ้งไม่ใช้รถชั่วคราว แจ้งไม่ใช้รถตลอดไป</li>
                  <li>การแก้ไขรายการ ชื่อ - สกุล ที่อยู่</li>
                  <li>การขอตรวจสอบข้อมูลทะเบียนรถ</li>
                  <li>การออกใบแทน กรณีชำรุด/สูญหาย</li>
                </ol>
                <div class="btns mt-4 animate" style="--delay:.7s;">
                  <a href="#" class="btn btn-action style-02 btn-03">
                    <span>ข้อมูลเพิ่มเติม</span> 
                    <div class="icon ml-3">
                      <em class="fa-solid fa-arrow-right"></em>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="subblock">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/34.jpg');"></div>
              <div class="text-wrapper">
                <h5 class="color-white">งานด้านทะเบียนรถ</h5>
                <div class="ss-sep-01 ml-0"></div>
                <p class="lg mt-6">กระบวนงานที่จองคิวผ่านแอป</p>
                <ol class="pl-5">
                  <li>ขอรับใบอนุญาตขับรถ (สอบใหม่หรือขาดเกิน 1 ปีขึ้นไป)</li>
                  <li>เปลี่ยนประเภทใบอนุญาตขับรถ (2 ปี เป็น 5 ปี)</li>
                </ol>
                <div class="btns mt-4 animate" style="--delay:.7s;">
                  <a href="#" class="btn btn-action style-02 btn-03">
                    <span>ข้อมูลเพิ่มเติม</span> 
                    <div class="icon ml-3">
                      <em class="fa-solid fa-arrow-right"></em>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>    
        </div> 
      </div>       
    </div>
  </section>

  <section class="section-16 section-padding">
    <div class="container">
      <h3 class="text-center">บุคลากร</h3> 
        <div class="grids">
          <?php for($i=0; $i<4; $i++){?>
            <div class="grid lg-25">
              <div class="ss-card ss-card-08" data-aos="fade-up" data-aos-delay="150">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/2<?= $i%4+2?>.jpg');"></div>
                </div>
                <div class="text-container text-center">
                  <a class="p lg fw-400 h-color-05" href="#">
                    นางสุนิสา อนันตกูล
                  </a>
                  <p class="sm desc fw-200">ขนส่งจังหวัดสมุทรปราการผู้บริหาร</p>
                  <div class="card-footer">
                    <div class="socials d-flex ai-center jc-end">
                      <a class="social" href="#">
                        <em class="fa-brands fa-facebook-f"></em>
                      </a>
                      <a class="social" href="#">
                        <em class="fa-solid fa-envelope"></em>
                      </a>
                      <a class="social" href="#">
                        <em class="fa-solid fa-phone"></em>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div> 
          <?php }?> 
         <div class="btns d-flex jc-center mt-6" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn btn-action style-02 btn-05">
            <span>ข้อมูลเพิ่มเติม</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
    </div>      
  </section>

  <section class="section-17 section-padding">
    <div class="container">
      <div class="opinion-poll">
        <div class="grids no-gap">
          <div class="grid lg-50 mt-0" style="background-image:url('public/assets/app/images/content/26.jpg');
          background-size:cover; background-repeat:no-repeat; background-position:center;"> 
          </div> 
            <div class="grid lg-50 mt-0">
              <div class="text-container">
                <h6 class="color-05">แบบสำรวจความคิดเห็น</h6> 
                <p class="mt-2">ท่านมีความคิดเห็นเกี่ยวกับประโยชน์ของข้อมูลและสารสนเทศที่เผยแพร่ทาง <br>
                    เว็บไซต์ของสำนักงานขนส่งจังหวัดสมุทรปราการอย่างไร</p>
                    <fieldset class="d-flex mt-3">
                      <?php foreach(['พอใช้', 'ปานกลาง', 'มาก', 'มากที่สุด'] as $i=>$d){?>
                        <div class="rc-container">
                          <input type="radio" id="poll_<?= $i ?>" name="poll" value="<?= $i ?>" />
                          <label for="poll_<?= $i ?>"><?= $d ?></label>
                        </div>
                      <?php }?>
                  </fieldset>  
                  <div class="btns d-flex mt-5" data-aos="fade-up" data-aos-delay="300">
                    <a href="#" class="btn btn-action style-02 btn-05">
                      <span>ทำแบบสำรวจ</span> 
                    </a>
                </div>
              </div>   
          </div>     
        </div>    
      </div>    
    </div>
  </section>

  <section class="section-18 section-padding">
    <div class="container">
      <h3 class="text-center fw-600 animate">กระดานถามตอบ</h3>     
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-card ss-card-09">
                  <div class="text-container">
                    <div class="image-container">
                      <img src="public/assets/app/images/content/0<?= $i%4+1?>.png" class="img"/>
                    </div>
                    <a href="#" class="title p sm fw-400 mt-4">ต่อภาษีออนไลน์ไป ตั้งแต่ 29 ม.ค. - 11 ก.พ. ยังไม่ได้รับป้ายภาษี</a>
                    <div class="card-footer">
                      <p class="xs fw-500 lh-3xs mt-4">ภานุมาศ รักเกียรติเผ่า</p>
                      <div class="blocks">
                        <div class="block">
                          <p clas="sm">
                            <div class="icon"><em class="fa-regular fa-pen-to-square"></em></div>
                            16 กุมภาพันธ์ 2565
                          </p>
                        </div>
                        <div class="block">
                          <p clas="sm">
                            <div class="icon"><em class="fa-regular fa-comment-dots"></em></div>
                             12
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
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </div>
              </div>
            </div>
          <?php }?>
      </div>
      <div class="dot-container"></div>
      <div class="btns d-flex jc-end mt-6" data-aos="fade-up" data-aos-delay="300">
        <a href="#" class="btn btn-action style-02 btn-05">
          <span>อ่านทั้งหมด</span> 
          <div class="icon ml-3">
            <em class="fa-solid fa-arrow-right"></em>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <!-- Swiper Style -->
  <style>
    .swiper-container {
      width: 100%;height: 28vw; transition: opacity .6s ease;
    }
    .swiper-slide {
      background-position: center; background-size: cover; background-repeat:no-repeat;
    }
    .swiper-slide .text-container {
      position: absolute; bottom:2rem; left: 0; width: 100%; 
      text-align:center;
    }
    .btn-swiper .btn{cursor:pointer;}
  </style>
  <section class="section-19">
    <div class="swiper-container"> 
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image:url(https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2070&q=80)">
          <div class="text-container">
            <p class="color-white" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">85 สายทาง 145 จุดเสี่ยง ที่ต้องระมัดระวังในการเดินทาง</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image:url(https://images.unsplash.com/photo-1477948879622-5f16e220fa42?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
          <div class="text-container">
            <p class="color-white" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">85 สายทาง 145 จุดเสี่ยง ที่ต้องระมัดระวังในการเดินทาง</p>
          </div>
        </div>
        <div class="swiper-slide" style="background-image:url(https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80)">
          <div class="text-container">
            <p class="color-white" data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">85 สายทาง 145 จุดเสี่ยง ที่ต้องระมัดระวังในการเดินทาง</p>
          </div>
        </div>
      </div>
    </div>
    <div class="btn-swiper mt-6 pt-6">
      <div class="d-flex jc-center ai-center mt-4">
        <a class="btn style-06 btn-04 bg-08 btn-prev">
          <div class="icon">
            <em class="fa-solid fa-arrow-left color-white btn-prev"></em>
          </div>     
        </a> 
        <a class="btn style-06 btn-04 bg-08 btn-next">
          <div class="icon">
            <em class="fa-solid fa-arrow-right color-white btn-next"></em>
          </div>     
        </a>      
      </div>  
    </div>
  </section>

  <!-- <section class="section-20 section-padding">
    <div class="container">
      <div class="card-contact">
        <div class="grids jc-center">
          <div class="grid lg-90 ">
            <div class="grids no-gap">
              <div class="grid lg-1-3 mt-0 p-1">
                <div class="d-flex ai-center jc-center ss-card ss-card-10 ss-card-10-01">
                  <div class="icon d-flex ai-center">
                    <div class="socials d-flex ai-center jc-end">
                      <a class="social" href="#">
                        <em class="fa-solid fa-phone"></em>
                      </a>
                    </div>
                  </div>
                  <div class="text-container d-flex flex-column  jc-center">
                    <p>โทรศัพท์</p>
                    <p>0-2323-4060</p>
                  </div>
                </div>
              </div>
              <div class="grid lg-1-3 mt-0 p-1">
              <div class="d-flex ai-center jc-center ss-card ss-card-10 ss-card-10-02">
                <div class="icon d-flex ai-center">
                <div class="socials d-flex ai-center jc-end">
                  <a class="social" href="#">
                    <em class="fa-solid fa-fax"></em>
                  </a>
                </div>
                </div>
                <div class="text-container">
                  <p>โทรศัพท์</p>
                  <p>0-2323-4060</p>
                  <p>0-2323-3619</p>
                </div>
              </div>
            </div>
            <div class="grid lg-1-3 mt-0 p-1">
              <div class="d-flex ai-center jc-center ss-card ss-card-10 ss-card-10-03">
                <div class="icon">
                <div class="socials d-flex ai-center jc-end">
                  <a class="social" href="#">
                    <em class="fa-solid fa-envelope"></em>
                  </a>
                </div>
                </div>
                <div class="text-container">
                  <p>อีเมล</p>
                  <p>dltspk@gmail.com</p>
                  <p>dlt_spk@hotmail.co.th</p>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div> 
      </div>       
    </div>
  </section> -->

   
  <?php include_once('include/footer-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  <!-- Swiper -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.4.1/js/swiper.min.js"></script>
  <script>
    // Params
    var sliderSelector = '.swiper-container',
    options = {
      init: false,
      loop: true,
      speed:800,
      slidesPerView: 2, // or 'auto'
      // spaceBetween: 10,
      centeredSlides : true,
      effect: 'coverflow', // 'cube', 'fade', 'coverflow',
      coverflowEffect: {
        rotate: 0, // Slide rotate in degrees
        stretch: 0, // Stretch space between slides (in px)
        depth: 100, // Depth offset in px (slides translate in Z axis)
        modifier: 1, // Effect multipler
        slideShadows : true, // Enables slides shadows
      },
      grabCursor: true,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.btn-prev',
        prevEl: '.btn-next',
      },
      breakpoints: {
        1023: {
          slidesPerView: 1,
          spaceBetween: 0
        }
      },
      // Events
      on: {
        imagesReady: function(){
          this.el.classList.remove('loading');
        }
      }
    };
    var mySwiper = new Swiper(sliderSelector, options);

    // Initialize slider
    mySwiper.init();
  </script>
</body>
</html>