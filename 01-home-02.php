<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-02.php'); ?>
  <?php include_once('include/options.php'); ?>

  <section class="banner-01">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<7; $i++){?>
          <div class="slide" id="banner-01-<?= $i ?>">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/0<?= ($i+1)%2+7?>.jpg');"></div>
              <div class="container">
                <h2 class="op-0 pe-none pos-absolute">Banner</h2>
              </div>
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
          <img src="public/assets/app/images/icon/05.png" alt="Arrow" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/assets/app/images/icon/06.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <section class="section-05" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <div class="slide-container">
        <div class="slides">
          <div class="slide">
            <a class="section-card type-01" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <h6 class="p sm lh-2xs">จองทำใบขับขี่</h6>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-02" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">ระบบรายงาน</p>
                <p class="sm lh-2xs">ความพึงพอใจแท็กซี่</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-03" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">สอบถามข้อมูลค่าภาษี</p>
                <p class="sm lh-2xs">รถประจำปี</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-04" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">ชำระภาษีรถ</p>
                <p class="sm lh-2xs">ผ่านอินเตอร์เน็ต</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-05" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">ประมูลเลข</p>
                <p class="sm lh-2xs">ทะเบียนรถสวย</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-06" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="sm lh-2xs">จองเลขทะเบียนรถ</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-07" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">บริการ</p>
                <p class="sm lh-2xs">ข้อมูลกฏหมาย</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
          <div class="slide">
            <a class="section-card type-08" href="#">
              <div class="filter"></div>
              <img class="hero" src="public/assets/app/images/hero/03.png" alt="Hero" />
              <div class="text-wrapper">
                <p class="xs">ใบรับรองระบบการจ่ายตรงเงิน</p>
                <p class="xs lh-2xs">บำเหน็จบำนาญและเงินอื่นๆ</p>
              </div>
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
        </div>
        <div class="arrow-container">
          <div class="arrow arrow-prev"><em class="fa-solid fa-chevron-left"></em></div>
          <div class="arrow arrow-next"><em class="fa-solid fa-chevron-right"></em></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding ovf-hidden">
    <div class="container">
      <h3 class="ss-title-01 fw-500 lh-xs" data-aos="fade-up" data-aos-delay="0">
        ข่าวสารประชาสัมพันธ์
      </h3>
      <p data-aos="fade-up" data-aos-delay="150">
        กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์ <span class="fw-500">สำหรับคุณ</span>
      </p>
      <div class="tab-container">
        <div class="tabs tabs-01 mt-6" data-aos="fade-up" data-aos-delay="300">
          <div class="tab active" data-tab="0">
            <div class="icon"><img src="public/assets/app/images/icon/01.png" alt="Icon" /></div>
            <div class="text-wrapper">
              <h6 class="tab-title">ข่าวประชาสัมพันธ์</h6>
              <p class="xs">
                กรมการขนส่งทางบก พร้อมให้ข้อมูล ข่าวสารที่เป็นประโยชน์ <span class="tab-span">สำหรับคุณ</span>
              </p>
            </div>
          </div>
          <div class="tab" data-tab="1">
            <div class="icon"><img src="public/assets/app/images/icon/01.png" alt="Icon" /></div>
            <div class="text-wrapper">
              <h6 class="tab-title">ข่าวประกาศกรมขนส่งฯ</h6>
              <p class="xs">
                ศูนย์รวมข้อมูลข่าวสาร ฉับไว <span class="tab-span">ขับเคลื่อนไปด้วยกัน</span>
              </p>
            </div>
          </div>
          <div class="tab" data-tab="2">
            <div class="icon"><img src="public/assets/app/images/icon/01.png" alt="Icon" /></div>
            <div class="text-wrapper">
              <h6 class="tab-title">ภาพข่าวกรมการขนส่งฯ</h6>
              <p class="xs">
                ภาพความประทับใจ มุ่งพัฒนา <span class="tab-span">เพื่อคุณค่าทางสังคม</span>
              </p>
            </div>
          </div>
          <div class="tab" data-tab="3">
            <div class="icon"><img src="public/assets/app/images/icon/01.png" alt="Icon" /></div>
            <div class="text-wrapper">
              <h6 class="tab-title">คลังวิดีโอ</h6>
              <p class="xs">
                ความทรงจำดีดี เปรียบเสมือน <span class="tab-span">การเดินทางที่มีเรื่องราว</span>
              </p>
            </div>
            <div class="num">12</div>
          </div>
          <div class="tab" data-tab="4">
            <div class="icon"><img src="public/assets/app/images/icon/01.png" alt="Icon" /></div>
            <div class="text-wrapper">
              <h6 class="tab-title">ประกาศรับสมัครงาน</h6>
              <p class="xs">
                มาร่วมเดินทางไปกับเรา <span class="tab-span">กรมการขนส่งทางบก</span>
              </p>
            </div>
            <div class="num">9</div>
          </div>
        </div>
        <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="450">
          <?php for($i=0; $i<5; $i++){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="<?= $i ?>">
              <div class="grids">
                <?php for($j=0; $j<3; $j++){?>
                  <div class="grid md-1-3 sm-100">
                    <a class="ss-card ss-card-01" href="#">
                      <div class="ss-img horizontal">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%3+1 ?>.jpg');"></div>
                      </div>
                      <div class="text-container">
                        <div class="title p lg fw-400 lh-sm h-color-p">
                          กรมการขนส่งทางบก มีความห่วงใยและเข้าใจถึง
                          ผลกระทบจากราคาพลังงาน ขอให้ผู้ประกอบการ
                        </div>
                        <p class="desc sm mt-2">
                          ผู้ขับรถบรรทุก และผู้ขับรถแท็กซี่ แสดงออกอย่างเหมาะสม
                          ภายใต้ขอบเขตของกฎหมาย และหลีกเลี่ยง
                          ผู้ขับรถบรรทุก และผู้ขับรถแท็กซี่ แสดงออกอย่างเหมาะสม
                          ภายใต้ขอบเขตของกฎหมาย และหลีกเลี่ยงการกระทำ
                        </p>
                        <div class="card-footer">
                          <div class="date p sm">8 กุมภาพันธ์ 2565</div>
                          <div class="more p sm h-color-p">
                            อ่านรายละเอียด
                            <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
                          </div>
                        </div>
                      </div>
                      <div class="line-1"></div><div class="line-2"></div>
                    </a>
                  </div>
                <?php }?>
              </div>
              <div class="d-flex jc-center mt-4 pt-4">
                <div class="paginate">
                  <div class="pages">
                    <a class="page page-prev disabled" href="#">
                      <em class="fa-solid fa-chevron-left"></em>
                    </a>
                    <a class="page active" href="#">01</a>
                    <a class="page" href="#">02</a>
                    <a class="page" href="#">03</a>
                    <a class="page" href="#">04</a>
                    <a class="page" href="#">05</a>
                    <a class="page page-next" href="#">
                      <em class="fa-solid fa-chevron-right"></em>
                    </a>
                  </div>
                  <a class="btn btn-action btn-xs btn-01" href="#">
                    <span>อ่านข่าวทั้งหมด</span>
                  </a>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section class="section-01 section-padding pb-0">
    <div class="container">
      <div class="ss-title-02" data-aos="fade-up" data-aos-delay="0">
        <h1 class="title fw-500 lh-3xs color-p">ONE DLT</h1>
        <div class="desc">
          <h4 class="fw-400 lh-xs">เป้าหมายชัดเจน มีบูรณาการ งานโดดเด่น</h4>
          <h6 class="lh-sm">เน้นโทคโนโลยีดิจิทัล กำกับตามกฎหมาย โปร่งใส เป็นธรรม</h6>
        </div>
      </div>
      <h3 class="ss-title-01 fw-500 lh-xs" data-aos="fade-up" data-aos-delay="150">
        <span class="op-0">ข่าวสารประชาสัมพันธ์</span>
      </h3>
    </div>
    <div class="info-cards">
      <div class="info-card" data-aos="fade-up" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container color-white">
              <div class="hero">
                <img src="public/assets/app/images/hero/01.png" alt="Hero" />
              </div>
              <h4 class="fw-300 lh-3xs">Objective</h4>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">การทำงานอย่างมีเป้าหมายชัดเจน</p>
            <p class="sm mt-1">
              มีมาตรฐาน อย่างมืออาชีพ รู้จริง ประชาชนเป็นศูนย์กลาง และผลงาน เกินความคาดหมาย
            </p>
          </div>
        </div>
      </div>
      <div class="info-card" data-aos="fade-down" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/02.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container color-white">
              <h4 class="fw-300 lh-3xs">Network</h4>
              <div class="icon">
                <img src="public/assets/app/images/icon/02.png" alt="Icon" />
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">มีบูรณาการ</p>
            <p class="sm mt-1">
              โดยบูรณาการเป็นเครือข่ายทั้งหน่วยงานภายใน และภายนอก
            </p>
          </div>
        </div>
      </div>
      <div class="info-card" data-aos="fade-up" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/03.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container color-white">
              <h4 class="fw-300 lh-3xs">Eminence</h4>
              <div class="icon">
                <img src="public/assets/app/images/icon/03.png" alt="Icon" />
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">งานโดดเด่น</p>
            <p class="sm mt-1">
              เพื่อความมีชื่อเสียง ผลงานโดดเด่น และตรงกับความต้องการของประชาชน
            </p>
          </div>
        </div>
      </div>
      <div class="info-card" data-aos="fade-down" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container">
              <h4 class="fw-300 lh-3xs">Digital</h4>
              <h4 class="fw-200 lh-3xs">Technology</h4>
              <div class="icon">
                <img src="public/assets/app/images/icon/02.png" alt="Icon" />
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">ด้วยการใช้เทคโนโลยีดิจิทัล</p>
            <p class="sm mt-1">
              ด้านการขนส่งอย่างเหมาะสม และทันสมัย
            </p>
          </div>
        </div>
      </div>
      <div class="info-card" data-aos="fade-up" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/05.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container">
              <h4 class="fw-300 lh-3xs">Legitimacy</h4>
              <div class="icon">
                <img src="public/assets/app/images/icon/02.png" alt="Icon" />
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">กำกับตามกฎหมาย</p>
            <p class="sm mt-1">
              เพื่อให้เกิดการควบคุม กำกับดูแล ตามกฎหมายที่เข้มเข็ง
            </p>
          </div>
        </div>
      </div>
      <div class="info-card" data-aos="fade-down" data-aos-delay="450">
        <div class="wrapper">
          <div class="ss-card ss-card-02">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/06.jpg');"></div>
            </div>
            <div class="bg-filter"></div>
            <div class="text-container">
              <h4 class="fw-300 lh-3xs">Transparency</h4>
              <div class="icon">
                <img src="public/assets/app/images/icon/02.png" alt="Icon" />
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </div>
          <div class="text-wrapper">
            <p class="lg fw-400 lh-sm">โปร่งใส เป็นธรรม</p>
            <p class="sm mt-1">
              รวมถึงการปฏิบัติงานอย่างโปร่งใส และเป็นธรรม
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-02" data-aos="fade-up" data-aos-delay="0">
    <div class="slide-container">
      <h2 class="op-0 pe-none pos-absolute">slide</h2>
      <div class="slides">
        <?php for($i=0; $i<10; $i++){?>
          <div class="slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/01.jpg');"></div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="dot-container"></div>
    </div>
  </section>

  <section class="section-03 section-padding">
    <div class="hero" data-aos="fade-up" data-aos-delay="150">
      <img src="public/assets/app/images/hero/02.jpg" alt="Hero" />
    </div>
    <div class="container">
      <div class="container">
        <div class="grids">
          <div class="grid sm-50">
            <div class="info-container" data-aos="fade-up" data-aos-delay="0">
              <h3 class="fw-600 lh-xs">E-Newsletter</h3>
              <p class="lg fw-500">
                ติดตามอัพเดททุกความเคลื่อนไหวของ <br />
                กรมการขนส่งทางบกได้ง่ายๆ
              </p>
              <form action="/">
                <div class="input-icon mt-2">
                  <input 
                    type="text" class="fgray" placeholder="Your e-mail Address" 
                    style="border-color:transparent!important;" required 
                  />
                  <button type="submit" class="icon">
                    <em class="fa-solid fa-chevron-right"></em>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-04" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <div class="section-tabs">
        <div class="section-tab main">
          <div class="icon">
            <img src="public/assets/app/images/icon/04.png" alt="Icon" />
          </div>
          <div class="text-wrapper">
            <p class="sm">Call Center</p>
            <h2 class="fw-400 lh-3xs color-01">1584</h2>
          </div>
        </div>
        <a class="section-tab" href="#">
          <div class="icon"><em class="fa-solid fa-book"></em></div>
          <div class="text-wrapper">
            <p class="lg fw-400">จัดซื้อจัดจ้าง</p>
          </div>
        </a>
        <a class="section-tab" href="#">
          <div class="icon"><em class="fa-solid fa-location-dot"></em></div>
          <div class="text-wrapper">
            <p class="lg fw-400">ค้นหาสำนักงาน</p>
          </div>
        </a>
        <a class="section-tab" href="#">
          <div class="icon"><em class="fa-solid fa-envelope"></em></div>
          <div class="text-wrapper">
            <p class="lg fw-400">ติดต่อกรม</p>
          </div>
        </a>
      </div>
    </div>
  </section>
  
  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>