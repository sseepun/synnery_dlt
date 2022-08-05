<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/page-loader.php'); ?>
  <?php include_once('include/topnav-06.php'); ?>
  <?php include_once('include/options.php'); ?>

  <section class="banner-06">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<7; $i++){?>
          <div class="slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/assets/app/images/banner/06.jpg');"></div>
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
        'title' => 'จองทำใบขับขี่',
        'icon' => 'public/assets/app/images/icon/71.png',
        'icon_active' => 'public/assets/app/images/icon/71-active.png'
      ], [
        'title' => 'ระบบรายงาน<br />ความพึงพอใจแท็กซี่',
        'icon' => 'public/assets/app/images/icon/72.png',
        'icon_active' => 'public/assets/app/images/icon/72-active.png'
      ], [
        'title' => 'สอบถามข้อมูลค่า<br />ภาษีรถประจำปี',
        'icon' => 'public/assets/app/images/icon/73.png',
        'icon_active' => 'public/assets/app/images/icon/73-active.png'
      ], [
        'title' => 'ชำระภาษีรถผ่าน<br />อินเตอร์เน็ต',
        'icon' => 'public/assets/app/images/icon/74.png',
        'icon_active' => 'public/assets/app/images/icon/74-active.png'
      ], [
        'title' => 'ประมูลเลข<br />ทะเบียนรถสวย',
        'icon' => 'public/assets/app/images/icon/75.png',
        'icon_active' => 'public/assets/app/images/icon/75-active.png'
      ], [
        'title' => 'จองเลขทะเบียนรถ',
        'icon' => 'public/assets/app/images/icon/76.png',
        'icon_active' => 'public/assets/app/images/icon/76-active.png'
      ], [
        'title' => 'บริการข้อมูลกฏหมาย',
        'icon' => 'public/assets/app/images/icon/77.png',
        'icon_active' => 'public/assets/app/images/icon/77-active.png'
      ], [
        'title' => 'เข้าสู่ระบบ',
        'icon' => 'public/assets/app/images/icon/78.png',
        'icon_active' => 'public/assets/app/images/icon/78-active.png'
      ]
    ];
  ?>
  <section class="info-03 section-padding" data-aos="fade-up" data-aos-delay="0">
    <div class="container">
      <div class="info-cards">
        <?php foreach($categories as $d){?>
          <a class="info-card" href="#">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-08.jpg');"></div>
            <div class="chev"><em class="fa-solid fa-chevron-right"></em></div>
            <div class="wrapper">
              <div class="text-container">
                <h6 class="p lg lh-sm"><?= $d['title'] ?></h6>
              </div>
              <div class="icon">
                <img class="inactive" src="<?= $d['icon'] ?>" alt="Icon" />
                <img class="active" src="<?= $d['icon_active'] ?>" alt="Icon Active" />
              </div>
            </div>
          </a>
        <?php }?>
      </div>
    </div>
  </section>

  <section class="info-04">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/23.jpg');"></div>
    <div class="container">
      
      <div class="grids jc-center">
        <div class="grid xl-75 lg-90 md-100 sm-75 mt-0">
          <div class="ss-card ss-card-06 img-right" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img bradius-0">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/24.jpg');"></div>
            </div>
            <div class="text-container bradius-0">
              <div class="ss-title-03 style-02 jc-start">
                <div class="wrapper">
                  <h6 class="fw-400 color-06 lh-2xs">เกี่ยวกับ</h6>
                  <h3 class="lh-3xs">สำนักงานขนส่ง</h3>
                </div>
              </div>
              <div class="space-l">
                <p class="lg fw-400">จังหวัดสุราษฎร์ธานี</p>
                <p class="fw-300 mt-2">
                  เป็นกรมที่ทำหน้าที่ควบคุมและจัดระเบียบการขนส่งทางถนนภายในประเทศและระหว่างประเทศ 
                  จดทะเบียนและเก็บภาษีรถ และออกใบอนุญาตขับรถ พัฒนาระบบการขนส่งทางถนนและการใช้รถ 
                  ดำเนินการตามกฎหมายว่าด้วยการขนส่งทางบก
                </p>
                <div class="btns pt-6">
                  <a class="btn btn-action btn-sm style-03 btn-08" href="#">
                    <span>อ่านต่อ</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
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

  <section class="section-28">
    <div class="container">
      <div class="section-cards">

        <div class="section-card" data-aos="fade-up" data-aos-delay="0">
          <div class="ss-title-03 jc-start">
            <div class="wrapper">
              <h3 class="fw-400 color-03 lh-2xs">แบบคำขอ</h3>
              <p class="lg">กรมการขนส่งทางบกพร้อมให้ข้อมูลข่าวสารที่เป็นประโยชน์สำหรับคุณ</p>
            </div>
          </div>
          <div class="mt-6">
            <?php for($i=0; $i<5; $i++){?>
              <div class="ss-item-01">
                <div class="text-container">
                  <div class="icon-text">
                    <img src="public/assets/app/images/icon/55.png" alt="Icon" />
                  </div>
                  <div class="text-wrapper">
                    <a class="title p lg lh-sm h-color-06" href="#">
                      คำขอต่ออายุใบอนุญาตประกอบการขนส่ง
                    </a>
                  </div>
                </div> 
                <div class="icon">
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

        <div class="blocks">
          <div class="img-bg" style="background-image:url('public/assets/app/images/bg/25.jpg');"></div>
          <div class="block bg-color">
            <div class="tab-container" data-aos="fade-up" data-aos-delay="150">
              <div class="ss-title-03 style-02 jc-start">
                <div class="wrapper">
                  <h3 class="fw-400 color-white lh-2xs">คลังวิดีโอ</h3>
                </div>
              </div>
              <div class="tabs tabs-05 mt-2">
                <?php for($i=1; $i<4; $i++){?>
                  <a class="tab <?= $i==1? 'active': '' ?>" href="#" data-tab="tab1_<?= $i ?>">
                    <?= $i ?>
                  </a>
                <?php }?>
              </div>
              <div class="tab-contents mt-4">
                <?php for($i=1; $i<4; $i++){?>
                  <div class="tab-content <?= $i==1? 'active': '' ?>" data-tab="tab1_<?= $i ?>">
                    <div class="ss-card ss-card-25">
                      <div class="ss-img vertical-2">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/6<?= $i%3+1 ?>.jpg');"></div>
                        <div class="hover-container">
                          <div class="icon">
                            <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                          </div>
                        </div>
                       <div class="line-1"></div><div class="line-2"></div>
                      </div>
                      <div class="text-container">
                        <div class="ss-tags">
                          <div class="tag no-br ws-nowrap fw-300">ปัญหาฝุ่น PM</div>
                        </div>
                        <div class="d-flex ai-center mt-2">
                          <p class="sm">17 กุมภาพันธ์ 2565</p>
                          <div class="ml-6 pl-6">
                            <img src="public/assets/app/images/icon/61.png" alt="Icon" height="10" /> 
                            <span class="p sm ml-1">200</span>
                          </div>
                        </div>
                        <a class="title p lg fw-300 mt-1" href="#">
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                        </a>
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
                  </div>
                <?php }?>
              </div>
            </div>
          </div>

          <div class="block">
            <div class="tab-container" data-aos="fade-up" data-aos-delay="300">
              <div class="ss-title-03 style-02 jc-start">
                <div class="wrapper">
                  <h3 class="fw-400 color-white lh-2xs">คลังภาพ</h3>
                </div>
              </div>
              <div class="tabs tabs-05 mt-2">
                <?php for($i=1; $i<4; $i++){?>
                  <a class="tab <?= $i==1? 'active': '' ?>" href="#" data-tab="tab1_<?= $i ?>">
                    <?= $i ?>
                  </a>
                <?php }?>
              </div>
              <div class="tab-contents mt-4">
                <?php for($i=1; $i<4; $i++){?>
                  <div class="tab-content <?= $i==1? 'active': '' ?>" data-tab="tab1_<?= $i ?>">
                    <div class="ss-card ss-card-25">
                      <div class="ss-img vertical-2">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/6<?= $i%3+2 ?>.jpg');"></div>
                        <div class="hover-container">
                          <div class="icon">
                            <img src="public/assets/app/images/icon/16.png" alt="Icon" />
                          </div>
                        </div>
                        <div class="line-1"></div><div class="line-2"></div>
                      </div>
                      <div class="text-container">
                        <div class="ss-tags">
                          <div class="tag no-br ws-nowrap fw-300">ปัญหาฝุ่น PM</div>
                        </div>
                        <div class="d-flex ai-center mt-2">
                          <p class="sm">17 กุมภาพันธ์ 2565</p>
                          <div class="ml-6 pl-6">
                            <img src="public/assets/app/images/icon/61.png" alt="Icon" height="10" /> 
                            <span class="p sm ml-1">200</span>
                          </div>
                        </div>
                        <a class="title p lg fw-300 mt-1" href="#">
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                          รอบรู้เรื่องขนส่ง EP3 - คุมเข้มตรวจควันดำรถบรรทุกและรถโดยสาร แก้ปัญหาฝุ่น
                        </a>
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
                  </div>
                <?php }?>
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
              <div class="ss-card ss-card-24">
                <div class="img-container">
                  <div class="ss-img vertical-2">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/6<?= ($i+$j+1)%4+0 ?>.jpg');"></div>
                  </div>
                </div>
                <div class="text-container">
                  <a class="title p fw-400" href="#">
                    ความรู้เกี่ยวกับการสอบใบขับขี่
                  </a>
                  <div class="mt-2">
                    <a class="icon" href="#">
                      <em class="fa-solid fa-angle-right"></em>
                    </a> 
                  </div>
                </div>
               <div class="line-1"></div><div class="line-2"></div>
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
  </section>
   
 <?php include_once('include/footer-06.php'); ?>
 <?php include_once('include/script.php'); ?>
</body>
</html>