
<!-- Super Topnav -->
<nav class="stopnav style-03">
  <div class="container">
    <div class="wrapper">
      <div class="option">
        <div class="title">ความตัดกันของสี</div>
        <div class="option-box">
          <div class="a-text theme-btn theme-0 active" data-theme="0">
            ปกติ
          </div>
          <div class="a-img theme-btn theme-1" data-theme="1">
            <img src="https://www.dpt.go.th/assets/app/images/misc/color-1.png" alt="Theme">
          </div>
          <div class="a-img theme-btn theme-2" data-theme="2">
            <img src="https://www.dpt.go.th/assets/app/images/misc/color-2.png" alt="Theme">
          </div>
        </div>
      </div>
      <div class="option hide-mobile">
        <div class="title">ขนาดอักษร</div>
        <div class="option-box p-0 border-right-0">
          <div class="a-full font-size-btn" data-size="-1">
            <div class="lg">-</div>
          </div>
          <div class="a-full font-size-btn" data-size="1">
            <div class="lg">+</div>
          </div>
        </div>
      </div>
      <div class="option hide-mobile">
        <div class="a-full lang active">
          TH
        </div>
        <div class="a-full lang">
          EN
        </div>
      </div>
      <div class="option">
        <div class="a-btn">
          <div class="icon"><em class="fa-solid fa-chevron-down"></em></div>
          เมนูไฮไลท์
        </div>
        <div class="submenu-dropdown">
          <div class="submenu-container">
            <div class="submenu-wrapper">
              <div class="submenu">
                <a href="#">กองทุนเพื่อความปลอดภัยในการใช้รถใช้ถนน</a>
              </div>
              <div class="submenu">
                <a href="#">การนำรถต่างประเทศมาใช้เพื่อการท่องเที่ยว</a>
              </div>
              <div class="submenu">
                <a href="#">ชำระภาษีรถผ่านอินเตอร์เน็ต</a>
              </div>
              <div class="submenu">
                <a href="#">จองเลขทะเบียนรถ</a>
              </div>
              <div class="submenu">
                <a href="#">จองคิวทำใบขับขี่กับ DLT Smart Queue</a>
              </div>
              <div class="submenu">
                <a href="#">ตรวจสอบค่าโดยสารรถประจำทาง</a>
              </div>
              <div class="submenu">
                <a href="#">LTP Center การขนส่งทางถนนระหว่างประเทศ</a>
              </div>
              <div class="submenu">
                <a href="#">ดาวน์โหลดแบบฟอร์ม</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="stopnav-spacer"></div>

<!-- Topnav -->
<nav class="topnav style-03">
  <div class="container">
    <div class="topnav-wrapper">

      <a class="logo" href="#">
        <div class="img-container">
          <img src="public/assets/app/images/logo-03.png" alt="Website Logo" />
        </div>
        <div class="text-wrapper">
          <h6>กรมการขนส่งทางบก</h6>
          <p>Department of Land Transportation</p>
        </div>
      </a>

      <div class="menu-container hide-tablet" id="topnav-menu">
        <?php
          foreach([
            'เกี่ยวกับกรม', 'สื่อประชาสัมพันธ์', 'ติดต่อราชการ', 'ข้อเสนอแนะ', 'รับเรื่องร้องเรียน'
          ] as $i=>$d){
        ?>
          <div class="menu has-children">
            <a href="#" data-dropdown="<?= $i ?>">
              <?= $d ?>
            </a>
            <div class="submenu-dropdown <?php if($i>2)echo 'anchor-right'; ?>">
              <div class="submenu-container">
                <div class="submenu-wrapper">
                  <div class="submenu">
                    <a href="#">ทิศทางองค์กร</a>
                  </div>
                  <div class="submenu">
                    <a href="#">ภารกิจ 4 ด้าน</a>
                  </div>
                  <div class="submenu">
                      <a href="#">การแบ่งส่วนราชการกรมโยธาธิการและผังเมือง</a>
                  </div>
                  <div class="submenu">
                    <a href="#">อำนาจหน้าที่ของกรมและส่วนราชการ</a>
                  </div>
                  <div class="submenu">
                    <a href="#">ประวัติความเป็นมาและตราสัญลักษณ์</a>
                  </div>
                  <div class="submenu">
                    <a href="#">โครงสร้างองค์กร</a>
                  </div>
                  <div class="submenu">
                    <a href="#">ทำเนียบผู้บริหารกรมฯ</a>
                  </div>
                  <div class="submenu">
                    <a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a>
                  </div>
                  <div class="submenu">
                    <a href="#">รายงานผล</a>
                  </div>
                  <div class="submenu">
                    <a href="#">แผนงาน</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>

      <div class="options">
        <a class="option global-search-toggle pb-1" href="#">
          <img src="public/assets/app/images/icon/08.png" alt="Search" />
        </a>
        <a class="option pb-1" href="#">
          <img src="public/assets/app/images/icon/07.png" alt="Sitemap" />
        </a>
        <a class="option sidenav-toggle show-tablet" href="#">
          <div class="hamburger">
            <div></div><div></div><div></div>
          </div>
        </a>
      </div>
          
    </div>
  </div>
</nav>
<div class="topnav-spacer"></div>
