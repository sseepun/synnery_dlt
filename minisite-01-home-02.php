<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-05.php'); ?>
  <?php include_once('include/options.php'); ?>

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
                <p class="lg fw-200 mt-3 xs-no-br animate" style="--delay:.55s;">
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
        <h3 class="text-center fw-500 color-10">
          ระบบสำนักงานออนไลน์
        </h3>  
        <div class="ss-sep-01 mt-1"></div>  
      </div> 
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="section-card">
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
        <div class="dot-container"></div>
        <div class="btns">
          <a href="#" class="btn btn-action style-02 btn-05">
            <span>ดูทั้งหมด</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-14 section-padding">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-center fw-500 color-10">
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
                    <p class="sm">
                      <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                      16 กุมภาพันธ์ 2565
                    </p>
                  </div>
                  <div class="block">
                    <p class="sm">
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
          <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="300">
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
                    <p class="sm">
                      <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                      16 กุมภาพันธ์ 2565
                    </p>
                  </div>
                  <div class="block">
                    <p class="sm">
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
          <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="450">
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
                    <p class="sm">
                      <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                      16 กุมภาพันธ์ 2565
                    </p>
                  </div>
                  <div class="block">
                    <p class="sm">
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
      <div class="btns mt-6" data-aos="fade-up" data-aos-delay="450">
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
          <div class="text-wrapper" data-aos="fade-up" data-aos-delay="0">
            <h4 class="color-white">ข่าวประกาศ</h4>
            <div class="ss-sep-01 ml-0 mt-1"></div>
            <div class="mt-4">
              <?php for($i=0; $i<4; $i++){?>
                <div class="item">
                  <div class="image-container">
                    <img src="public/assets/app/images/icon/36.png" alt="Icon" />
                  </div>
                  <div class="text-container">
                    <a class="color-white p md fw-300 h-color-05" href="#">
                      รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานทุนของกองทุนเพื่อความปลอดภัยใน
                      การใช้รถใช้ถนนในตำแหน่งเจ้าพนักงานการเงินและบัญชี
                    </a>
                    <div class="card-footer">
                      <div class="blocks-icon">
                        <div class="block-icon">
                          <p class="sm">
                            <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                            16 กุมภาพันธ์ 2565
                          </p>
                        </div>
                        <div class="block-icon">
                          <p class="sm">
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
            <div class="btns jc-end pt-6 mt-4">
              <a href="#" class="btn btn-action style-02 btn-05">
                <span>อ่านทั้งหมด</span> 
                <div class="icon ml-3"><em class="fa-solid fa-arrow-right"></em></div>
              </a>
            </div>
          </div>
        </div>
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/assets/app/images/content/33.jpg');"></div>
            <div class="text-wrapper" data-aos="fade-up" data-aos-delay="150">
              <h4 class="color-white">งานด้านทะเบียนรถ</h4>
              <div class="ss-sep-01 ml-0 mt-1"></div>
              <p class="lg mt-6">กระบวนงานที่เปิดให้บริการ</p>
              <ol class="pl-5">
                <li>งานรับชำระภาษีประจำปี รถยนต์ รถจักรยานยนต์</li>
                <li>การแจ้งย้ายรถออก</li>
                <li>การแจ้งไม่ใช้รถชั่วคราว แจ้งไม่ใช้รถตลอดไป</li>
                <li>การแก้ไขรายการ ชื่อ - สกุล ที่อยู่</li>
                <li>การขอตรวจสอบข้อมูลทะเบียนรถ</li>
                <li>การออกใบแทน กรณีชำรุด/สูญหาย</li>
              </ol>
              <div class="btns mt-6">
                <a href="#" class="btn btn-action style-02 btn-07">
                  <span>ข้อมูลเพิ่มเติม</span> 
                  <div class="icon ml-3"><em class="fa-solid fa-arrow-right"></em></div>
                </a>
              </div>
            </div>
          </div>
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/assets/app/images/content/34.jpg');"></div>
            <div class="text-wrapper" data-aos="fade-up" data-aos-delay="300">
              <h4 class="color-white">งานด้านทะเบียนรถ</h4>
              <div class="ss-sep-01 ml-0 mt-1"></div>
              <p class="lg mt-6">กระบวนงานที่จองคิวผ่านแอป</p>
              <ol class="pl-5">
                <li>ขอรับใบอนุญาตขับรถ (สอบใหม่หรือขาดเกิน 1 ปีขึ้นไป)</li>
                <li>เปลี่ยนประเภทใบอนุญาตขับรถ (2 ปี เป็น 5 ปี)</li>
                <li>ต่ออายุใบอนุญาตขับรถ (5 ปี เป็น 5ปี)</li>
                <li>ต่ออายุใบอนุญาตขับรถจักรยายนต์ชั่วคราว (2ปี)</li>
              </ol>
              <div class="btns mt-6">
                <a href="#" class="btn btn-action style-02 btn-07">
                  <span>ข้อมูลเพิ่มเติม</span> 
                  <div class="icon ml-3"><em class="fa-solid fa-arrow-right"></em></div>
                </a>
              </div>
            </div>
          </div>
        </div>    
      </div> 
    </div>   
  </section>

  <section class="section-padding">
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <h3 class="text-center fw-500 color-10">
          บุคลากร
        </h3>
      </div> 
      <div class="grids pt-2">
        <?php for($i=0; $i<4; $i++){?>
          <div class="grid lg-25 md-50 sm-50">
            <div class="ss-card ss-card-08" data-aos="fade-up" data-aos-delay="150">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/2<?= $i%4+2?>.jpg');"></div>
              </div>
              <div class="text-container text-center">
                <a class="h6 fw-400 h-color-05" href="#">
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
              <div class="line-1"></div><div class="line-2"></div>
            </div>
          </div> 
        <?php }?> 
        <div class="btns jc-center pt-6 mt-2" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn btn-action style-02 btn-05">
            <span>ข้อมูลเพิ่มเติม</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="section-17">
    <div class="container">
      <div class="grids jc-center">
        <div class="grid xl-80 lg-90 sm-100 mt-0">
          <div class="opinion-poll" data-aos="fade-up" data-aos-delay="0">
            <div class="grids no-gap">
              <div class="grid lg-50 md-40 sm-100 mt-0">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/26.jpg');"></div>
                </div>
              </div>
              <div class="grid lg-50 md-60 sm-100 mt-0">
                <div class="text-container">
                  <h5 class="color-05">แบบสำรวจความคิดเห็น</h5> 
                  <p class="mt-1">
                    ท่านมีความคิดเห็นเกี่ยวกับประโยชน์ของข้อมูลและสารสนเทศที่เผยแพร่ทางเว็บไซต์ของสำนักงานขนส่งจังหวัดสมุทรปราการอย่างไร
                  </p>
                  <fieldset class="d-flex mt-3">
                    <?php foreach(['พอใช้', 'ปานกลาง', 'มาก', 'มากที่สุด'] as $i=>$d){?>
                      <div class="rc-container">
                        <input type="radio" id="poll_<?= $i ?>" name="poll" value="<?= $i ?>" />
                        <label for="poll_<?= $i ?>"><?= $d ?></label>
                      </div>
                    <?php }?>
                  </fieldset>  
                  <div class="btns pt-6">
                    <a href="#" class="btn btn-action style-02 btn-05">
                      <span>ทำแบบสำรวจ</span> 
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-18 section-padding">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-06.jpg');"></div>
    <div class="container">
      <div data-aos="fade-up" data-aos-delay="0">
        <h3 class="title-black text-center fw-500 color-10">
          กระดานถามตอบ
        </h3>
      </div> 
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="ss-card ss-card-09">
                <div class="text-container">
                  <div class="avatar">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%4+1?>.png');"></div>
                  </div>
                  <a href="#" class="title p sm fw-400 h-color-07 mt-4">
                    ต่อภาษีออนไลน์ไป ตั้งแต่ 29 ม.ค. - 11 ก.พ. ยังไม่ได้รับป้ายภาษี
                  </a>
                  <div class="card-footer p-0 mt-3">
                    <p class="sm fw-500 lh-3xs mt-4">ภานุมาศ รักเกียรติเผ่า</p>
                    <div class="blocks">
                      <div class="block">
                        <p class="sm">
                          <div class="icon"><em class="fa-regular fa-pen-to-square"></em></div>
                          16 กุมภาพันธ์ 2565
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm">
                          <div class="icon"><em class="fa-regular fa-comment-dots"></em></div>
                            12
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm">
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
          <?php }?>
        </div>
        <div class="dot-container"></div>
        <div class="btns d-flex mt-6">
          <a href="#" class="btn btn-action style-02 btn-05">
            <span>อ่านทั้งหมด</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <section class="section-19 section-padding">
    <div class="swiper-container" data-aos="fade-up" data-aos-delay="0"> 
      <div class="swiper-wrapper">
        <?php for($i=0; $i<6; $i++){?>
          <div class="swiper-slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/2<?= $i%3 ?>.jpg')"></div>
            <div class="text-container">
              <h6 data-swiper-parallax="-30%" data-swiper-parallax-scale=".7">
                85 สายทาง 145 จุดเสี่ยง ที่ต้องระมัดระวังในการเดินทาง
              </h6>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
    <div class="btn-swiper mt-6" data-aos="fade-up" data-aos-delay="150">
      <a class="btn btn-prev">
        <div class="icon">
          <em class="fa-solid fa-arrow-left color-white btn-prev"></em>
        </div>     
      </a> 
      <a class="btn btn-next">
        <div class="icon">
          <em class="fa-solid fa-arrow-right color-white btn-next"></em>
        </div>     
      </a>        
    </div>
  </section>

  <section class="section-20 section-padding pb-0">
    <div class="container">
      <div class="grids jc-center">
        <div class="grid xl-70 lg-80 sm-100 mt-0">
          <div class="gallery-grids">
            <div class="grid md-1-3 sm-100">
              <a class="section-card type-1" href="#">
                <div class="icon">
                  <em class="fa-solid fa-phone"></em>
                </div>
                <div class="text-container">
                  <h6 class="fw-300 lh-xs">โทรศัพท์ :</h6>
                  <p class="mt-1">0-2323-4060</p>
                </div>
              </a>
            </div>
            <div class="grid md-1-3 sm-100">
              <a class="section-card type-2" href="#">
                <div class="icon">
                  <em class="fa-solid fa-fax"></em>
                </div>
                <div class="text-container">
                  <h6 class="fw-300 lh-xs">โทรสาร :</h6>
                  <p class="mt-1">
                    0-2323-4060, <br /> 
                    0-2323-3619
                  </p>
                </div>
              </a>
            </div>
            <div class="grid md-1-3 sm-100">
              <a class="section-card type-3" href="#">
                <div class="icon">
                  <em class="fa-solid fa-envelope"></em>
                </div>
                <div class="text-container">
                  <h6 class="fw-300 lh-xs">อีเมล :</h6>
                  <p class="mt-1">
                    dltspk@gmail.com, <br />
                    dlt_spk@hotmail.co.th
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
   
  <?php include_once('include/footer-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>