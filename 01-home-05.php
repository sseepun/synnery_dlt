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

  <section class="section-21" style="background-image:url('public/assets/app/images/bg/pattern-04.jpg');"></section>

  <section class="section-22 section-padding">
   <div class="container">
      <h3 class="text-center color-white fw-100">ระบบสำนักงานออนไลน์</h3>    
      <div class="slide-container" data-aos="fade-up" data-aos-delay="150">
        <div class="slides">
          <?php for($i=0; $i<8; $i++){?>
            <div class="slide">
              <div class="section-card" href="#">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/4<?= $i%6+0 ?>.jpg');"></div>
                </div>
                <div class="card-footer ">
                  <div class="text-container d-flex ai-center jc-center">
                    <p class="xs text-center title">ศูนย์ข้อมูลข่าวสารราชการ กรมการขนส่งทางบก</p>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="dot-container"></div>
        <div class="btns" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="btn btn-action style-02 btn-02">
            <span>ดูทั้งหมด</span> 
            <div class="icon ml-3">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </a>
        </div>
      </div>
   </div>
  </section>

  <section class="section-23 section-padding">
    <div class="container">
      <h3 class="text-center color-10 fw-300" data-aos="fade-up" data-aos-delay="0">
        ข่าวประชาสัมพันธ์
      </h3>     
      <div class="grids jc-center">
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid lg-1-3">
            <div class="ss-card ss-card-12" data-aos="fade-up" data-aos-delay="150">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/4<?= $i%3+6 ?>.jpg');"></div>
              </div>
              <div class="text-container">
                <a class="title p lg fw-400 h-color-05 lh-sm" href="#">
                  นวัตกรรมใหม่: ตรวจสอบเอกสารล่วงหน้าผ่านระบบ Internet
                </a>
                <div class="card-footer">
                  <div class="blocks">
                    <div class="block">
                      <p class="sm color-11">
                        <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                        16 กุมภาพันธ์ 2565
                      </p>
                    </div>
                    <div class="block">
                      <p class="sm color-11">
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
      <div class="btns" data-aos="fade-up" data-aos-delay="300">
        <a href="#" class="btn btn-action style-02 btn-02">
          <span>อ่านทั้งหมด</span> 
          <div class="icon ml-3">
            <em class="fa-solid fa-arrow-right-long"></em>
          </div>
        </a>
      </div>
    </div>       
  </section> 

  <section class="section-24 section-padding">
    <div class="container">
      <h3 class="text-center color-10 fw-300" data-aos="fade-up" data-aos-delay="0">
        ข่าวประกาศ
      </h3> 
      <div class="grids">
        <div class="grid lg-50 md-100 sm-100">
          <div class="grids">
            <div class="grid lg-50 md-50 sm-50">
              <div class="ss-card ss-card-13 bg-12" data-aos="fade-up" data-aos-delay="150">
                <div class="text-container">
                  <a class="title p lg fw-400">
                    รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานราชการทั่วไป ในตำแหน่งเจ้าหน้าที่บันทึกข้อมูล
                  </a>
                  <div class="card-footer">
                    <div class="blocks">
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                          16 กุมภาพันธ์ 2565
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-regular fa-eye"></em></div>
                          285
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="ss-card ss-card-13 bg-12" data-aos="fade-up" data-aos-delay="150">
                <div class="text-container">
                  <a class="title p lg fw-400">
                    รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานราชการทั่วไป ในตำแหน่งเจ้าหน้าที่บันทึกข้อมูล
                  </a>
                  <div class="card-footer">
                    <div class="blocks">
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                          16 กุมภาพันธ์ 2565
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-regular fa-eye"></em></div>
                          285
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="ss-card ss-card-13 bg-12" data-aos="fade-up" data-aos-delay="300">
                <div class="text-container">
                  <a class="title p lg fw-400">
                    รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานราชการทั่วไป ในตำแหน่งเจ้าหน้าที่บันทึกข้อมูล
                  </a>
                  <div class="card-footer">
                    <div class="blocks">
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                          16 กุมภาพันธ์ 2565
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-regular fa-eye"></em></div>
                          285
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="ss-card ss-card-13 bg-12" data-aos="fade-up" data-aos-delay="300">
                <div class="text-container">
                  <a class="title p lg fw-400">
                    รับสมัครบุคคลเพื่อเลือกสรรเป็นพนักงานราชการทั่วไป ในตำแหน่งเจ้าหน้าที่บันทึกข้อมูล
                  </a>
                  <div class="card-footer">
                    <div class="blocks">
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-solid fa-calendar-days"></em></div>
                          16 กุมภาพันธ์ 2565
                        </p>
                      </div>
                      <div class="block">
                        <p class="sm color-11">
                          <div class="icon"><em class="fa-regular fa-eye"></em></div>
                          285
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="grid lg-50 md-100 sm-100">
          <div class="grids">
            <div class="grid lg-50 md-50 sm-100">
              <div class="ss-card ss-card-14" data-aos="fade-up" data-aos-delay="150">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/49.jpg');"></div>
                  <div class="text-wrapper">
                    <p class="color-white lg fw-100">งานด้าน<span class="fw-300">ทะเบียนรถ</span></p>
                  </div>
                </div>
                <a class="more" href="#">
                  <em class="fa-solid fa-arrow-right-long"></em>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-100">
              <div class="ss-card ss-card-14" data-aos="fade-up" data-aos-delay="150">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/50.jpg');"></div>
                  <div class="text-wrapper">
                    <p class="color-white lg fw-100">งานด้าน<span class="fw-300">ใบอนุญาตขับรถ</span></p>
                  </div>
                </div>
                <a class="more" href="#">
                  <em class="fa-solid fa-arrow-right-long"></em>
                </a>
              </div>
            </div>
            <div class="grid lg-100 md-100 sm-100">
              <div class="ss-card ss-card-15 bg-08" data-aos="fade-up" data-aos-delay="300">
                <div class="text-container">
                  <form action="">
                    <p class="lg color-05">แบบสำรวจความคิดเห็น</p>
                    <p class="color-white fw-100 mt-2">
                      ท่านมีความคิดเห็นเกี่ยวกับประโยชน์ของข้อมูลและสารสนเทศที่เผยแพร่
                      ทางเว็บไซต์ของสำนักงานขนส่งจังหวัดสมุทรปราการอย่างไร
                    </p>
                    <fieldset class="d-flex mt-2">
                      <?php foreach(['พอใช้', 'ปานกลาง', 'มาก', 'มากที่สุด'] as $i=>$d){?>
                        <div class="rc-container color-white d-flex flex-wrap">
                          <input type="radio" id="poll_<?= $i ?>" name="poll" value="<?= $i ?>" />
                          <label for="poll_<?= $i ?>"><?= $d ?></label>
                        </div>
                      <?php }?>
                    </fieldset>
                    <div class="btns mt-5" data-aos="fade-up" data-aos-delay="300">
                      <a href="#" class="btn btn-action style-02 btn-05">
                        <span>ทำแบบสำรวจ</span> 
                      </a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="btns jc-center mt-6" data-aos="fade-up" data-aos-delay="300">
        <a href="#" class="btn btn-action style-02 btn-02">
          <span>อ่านทั้งหมด</span> 
          <div class="icon ml-3">
            <em class="fa-solid fa-arrow-right-long"></em>
          </div>
        </a>
      </div>
    </div>      
  </section>

  <section class="section-25 section-padding" style="background-image:url('public/assets/app/images/bg/pattern-05.jpg');">

  </section>


   
  <?php //include_once(' include/footer-05.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>