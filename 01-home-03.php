<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading bg-sgray">
  <?php include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-03.php'); ?>
  <?php include_once('include/options.php'); ?>
  
  <section class="banner-02">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<7; $i++){?>
          <div class="swiper-slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/1<?= ($i)%3+0 ?>.jpg');"></div>
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
          <img src="public/assets/app/images/icon/09.png" alt="Arrow" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/assets/app/images/icon/10.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <div class="tab-container">
    <section class="section-06" data-aos="fade-in" data-aos-delay="0">
      <div class="tabs section-tabs">
        <a class="tab ss-card card-left active" href="#" data-tab="0">
          <div class="img-bg op-100" style="background-image:url('public/assets/app/images/bg/pattern-01.jpg');"></div>
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-01-hover.jpg');"></div>
          <div class="hero"><img src="public/assets/app/images/hero/04.png" alt="Hero" /></div>
          <div class="text-wrapper">
            <h5 class="color-04 lh-xs">การให้บริการอินเทอร์เน็ต</h5>
            <h6 class="color-white lh-xs">e-services</h6>
          </div>
          <div class="line-1"></div>
        </a>
        <a class="tab ss-card card-right" href="#" data-tab="1">
          <div class="img-bg op-100" style="background-image:url('public/assets/app/images/bg/pattern-02.jpg');"></div>
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-02-hover.jpg');"></div>
          <div class="hero"><img src="public/assets/app/images/hero/05.png" alt="Hero" /></div>
          <div class="text-wrapper">
            <h5 class="color-04 lh-xs">คลังความรู้สำหรับประชาชน</h5>
            <h6 class="color-white lh-xs">Knowledge Center</h6>
          </div>
          <div class="line-1"></div>
        </a>
      </div>
    </section>
    
    <?php
      $categories = [
        [ 'title' => 'จองทำใบขับขี่' ],
        [ 'title' => 'ระบบรายงาน<br />ความพึงพอใจแท็กซี่' ],
        [ 'title' => 'สอบถามข้อมูลค่าภาษี<br />รถประจำปี' ],
        [ 'title' => 'ชำระภาษีรถผ่าน<br />อินเตอร์เน็ต' ],
        [ 'title' => 'ประมูลเลข<br />ทะเบียนรถสวย' ],
        [ 'title' => 'จองเลขทะเบียนรถ' ],
        [ 'title' => 'บริการข้อมูลกฏหมาย' ],
        [ 'title' => 'ใบรับรองระบบการจ่ายตรงเงิน<br />บำเหน็จบำนาญและเงินอื่น' ],
      ];
    ?>
    <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
      <?php for($i=0; $i<2; $i++){?>
        <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
          <section class="section-07">
            <div class="slide-container">
              <div class="slides">
                <?php foreach($categories as $j=>$k){?>
                  <div class="slide">
                    <a class="wrapper text-center ws-nowrap" href="#">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/bg/15.jpg');"></div>
                      <div class="hero">
                        <img src="public/assets/app/images/hero/<?= sprintf('%02d', ($i+$j)%8+6) ?>.png" alt="Icon" />
                      </div>
                      <div class="text-wrapper">
                        <h6 class="p xs fw-400 lh-sm"><?= $k['title'] ?></h6>
                      </div>
                      <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
                    </a>
                  </div>
                <?php }?>
              </div>
            </div>
          </section>
        </div>
      <?php }?>
    </div>
  </div>

  <?php
    $category = [
      [
        'title' => 'ข่าวสาร<br />ประชาสัมพันธ์', 'alert' => 10,
        'icon_inactive' => 'public/assets/app/images/icon/11.png',
        'icon_active' => 'public/assets/app/images/icon/11-active.png'
      ], [
        'title' => 'ข่าวประกาศ<br />กรมขนส่ง', 'alert' => 0,
        'icon_inactive' => 'public/assets/app/images/icon/12.png',
        'icon_active' => 'public/assets/app/images/icon/12-active.png'
      ], [
        'title' => 'ภาพรวมการ<br />ขนส่งทางบก', 'alert' => 0,
        'icon_inactive' => 'public/assets/app/images/icon/13.png',
        'icon_active' => 'public/assets/app/images/icon/13-active.png'
      ]
    ];
  ?>
  <section class="section-08 section-padding pt-0" style="z-index:2;">
    <div class="pattern">
      <img src="public/assets/app/images/bg/pattern-07.png" alt="Pattern" />
    </div>
    <div class="container">
      <div class="tab-container">
        <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="0">
          <div class="tabs-title">
            <div class="tab-contents">
              <?php foreach($category as $i=>$d){?>
                <div class="tab-content no-fade <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
                  <h3 class="title sm fw-500 lh-2xs no-br"><?= $d['title'] ?></h3>
                  <p class="sm">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="tabs-wrapper">
            <?php foreach($category as $i=>$d){?>
              <div class="tab <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/15.jpg');"></div>
                <div class="icon">
                  <img class="inactive" src="<?= $d['icon_inactive'] ?>" alt="Icon Inactive" />
                  <img class="active" src="<?= $d['icon_active'] ?>" alt="Icon Active" />
                </div>
                <p class="sm fw-400 lh-xs"><?= $d['title'] ?></p>
                <?php if($d['alert'] > 0){?>
                  <div class="alert"><?= $d['alert'] ?></div>
                <?php }?>
              </div>
            <?php }?>
          </div>
        </div>

        <div class="tab-contents mt-6" data-aos="fade-up" data-aos-delay="150">
          <?php foreach($category as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
              <div class="grids">
                <?php for($j=0; $j<4; $j++){?>
                  <div class="grid lg-25 sm-50">
                    <div class="ss-card ss-card-04">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%4+1 ?>.jpg')"></div>
                        <div class="hover-container">
                          <div class="icon sm">
                            <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        
                        <a class="title p lg fw-400 lh-sm" href="#">
                          กรมการขนส่งทางบก ส่งความสุขและความปรารถนาดี ในช่วงเทศกาลตรุษจีน
                          กรมการขนส่งทางบก ส่งความสุขและความปรารถนาดี ในช่วงเทศกาลตรุษจีน
                        </a>
                        <div class="card-footer">
                          <div class="date p sm">7 กุมภาพันธ์ 2565</div>
                          <div class="view p sm">
                            <div class="icon"><em class="fa-solid fa-eye"></em></div>
                            200
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="btns jc-center mt-6">
                <a class="btn-more" href="#">
                  อ่านทั้งหมด
                  <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
                </a>
              </div>
            </div>
          <?php }?>
        </div>

      </div>
    </div>
  </section>

  <?php
    $category = [
      [
        'title' => 'คลังวิดีโอ', 'alert' => 0,
        'icon_inactive' => 'public/assets/app/images/icon/14.png',
        'icon_active' => 'public/assets/app/images/icon/14-active.png'
      ], [
        'title' => 'คลังภาพ', 'alert' => 10,
        'icon_inactive' => 'public/assets/app/images/icon/15.png',
        'icon_active' => 'public/assets/app/images/icon/15-active.png'
      ]
    ];
  ?>
  <section class="section-08 section-padding pt-0 bg-white">
    <div class="pattern style-02">
      <img src="public/assets/app/images/bg/pattern-10.png" alt="Pattern" />
    </div>
    <div class="pattern style-03">
      <img src="public/assets/app/images/bg/pattern-11.png" alt="Pattern" />
    </div>
    <div class="container">
      <div class="tab-container">

        <div class="tabs tabs-02 bg-white" data-aos="fade-up" data-aos-delay="0">
          <div class="tabs-title">
            <div class="tab-contents">
              <?php foreach($category as $i=>$d){?>
                <div class="tab-content no-fade <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
                  <h3 class="title sm fw-500 lh-2xs no-br"><?= $d['title'] ?></h3>
                  <p class="sm">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="tabs-wrapper">
            <?php foreach($category as $i=>$d){?>
              <div class="tab <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/15.jpg');"></div>
                <div class="icon">
                  <img class="inactive" src="<?= $d['icon_inactive'] ?>" alt="Icon Inactive" />
                  <img class="active" src="<?= $d['icon_active'] ?>" alt="Icon Active" />
                </div>
                <p class="sm fw-400 lh-xs"><?= $d['title'] ?></p>
                <?php if($d['alert'] > 0){?>
                  <div class="alert"><?= $d['alert'] ?></div>
                <?php }?>
              </div>
            <?php }?>
          </div>
        </div>

        <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
          <?php foreach($category as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="t02_<?= $i ?>">
              <div class="grids">
                <?php for($j=0; $j<4; $j++){?>
                  <div class="grid lg-25 sm-50">
                    <div class="ss-card ss-card-04">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%4+1 ?>.jpg')"></div>
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
                        <a class="title p lg fw-400 lh-sm" href="#">
                          กรมการขนส่งทางบก ส่งความสุขและความปรารถนาดี ในช่วงเทศกาลตรุษจีน
                          กรมการขนส่งทางบก ส่งความสุขและความปรารถนาดี ในช่วงเทศกาลตรุษจีน
                        </a>
                        <div class="card-footer">
                          <div class="date p sm">7 กุมภาพันธ์ 2565</div>
                          <div class="view p sm">
                            <div class="icon"><em class="fa-solid fa-eye"></em></div>
                            200
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="btns jc-center mt-6">
                <a class="btn-more" href="#">
                  อ่านทั้งหมด
                  <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
                </a>
              </div>
            </div>
          <?php }?>
        </div>

      </div>
    </div>
  </section>

  <section class="info-01 section-padding">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/17.jpg');"></div>
    <div class="container pos-relative">
      <div data-aos="fade-up" data-aos-delay="0">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<6; $i++){?>
              <div class="swiper-slide">
                <div class="ss-card ss-card-04 type-2 transparent">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= $i%4+1 ?>.jpg')"></div>
                    <div class="hover-container">
                      <div class="icon sm">
                        <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                      </div>
                    </div>
                  </div>
                  <div class="text-container">
                    <a class="title p fw-400 lh-sm" href="#">
                      ข้อกำหนดการขนส่ง
                      การส่งสินค้าอันตรายทางถนน
                      ของเประเทศไทย
                    </a>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="dot-wrapper">
            <div class="dot-container"></div>
          </div>
          <div class="btns">
            <a class="btn-more" href="#">
              อ่านทั้งหมด
              <div class="icon"><em class="fa-solid fa-chevron-right"></em></div>
            </a>
          </div>
        </div>
      </div>
      <div class="quote-container" data-aos="fade-up" data-aos-delay="150">
        <div class="wrapper">
          <h5 class="lh-sm">องค์กรแห่งนวัตกรรม</h5>
          <h5 class="fw-400 lh-sm">ในการควบคุม กำกับ ดูแล ระบบการขนส่งทางถนนให้มี</h5>
          <h2 class="fw-400 lh-2xs color-06">คุณภาพและปลอดภัย</h2>
          <img class="quote quote-left" src="public/assets/app/images/icon/26.png" alt="Quote" />
          <img class="quote quote-right" src="public/assets/app/images/icon/27.png" alt="Quote" />
        </div>
      </div>
    </div>
  </section>

  <section class="info-02" data-aos="fade-up" data-aos-delay="0">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-03.jpg')"></div>
    <div class="container">
      <div class="grids">
        <div class="grid lg-25 md-50 mt-0">
          <div class="section-tab main">
            <div class="icon">
              <img src="public/assets/app/images/icon/28.png" alt="Icon" />
            </div>
            <div class="text-wrapper">
              <p class="fw-300">CALL CENTER</p>
              <h3 class="lg fw-400 lh-3xs color-04">1584</h3>
            </div>
          </div>
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
  </section>
  
  <?php include_once('include/footer-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>