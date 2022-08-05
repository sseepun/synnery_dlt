
<!-- Topnav -->
<nav class="topnav style-02">
  <div class="wrapper">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/pattern-09.jpg');"></div>
    <div class="container">
      <a class="logo" href="#">
        <img src="public/assets/app/images/logo-02.png" alt="Website Logo" />
        <div class="text-wrapper">
          <h5 class="fw-400 lh-sm">กรมการขนส่งทางบก</h5>
          <p class="sm fw-300">Department of Land Transportation</p>
        </div>
      </a>
      <div class="topnav-wrapper">
        <div class="topnav-top">
          <a class="a-text hide-tablet" href="#">
            <div class="icon"><em class="fa-solid fa-phone"></em></div>
            0-2271-8888
          </a>
          <a class="a-text hide-tablet" href="#">
            <div class="icon"><em class="fa-solid fa-envelope"></em></div>
            webmaster@mail.dlt.go.th
          </a>
          <a class="a-icon" href="#">
            <em class="fa-solid fa-sitemap"></em>
          </a>
          <div class="flags hide-tablet">
            <a class="a-flag active" href="#">
              <div class="img-bg" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
            </a>
            <a class="a-flag" href="#">
              <div class="img-bg" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
            </a>
          </div>
          <a class="a-icon" href="#">
            <em class="fa-solid fa-magnifying-glass"></em>
          </a>
          <div class="socials">
            <a class="a-social" href="#">
              <em class="fa-brands fa-facebook-f"></em>
            </a>
            <a class="a-social" href="#">
              <em class="fa-brands fa-instagram"></em>
            </a>
            <a class="a-social" href="#">
              <em class="fa-brands fa-twitter"></em>
            </a>
            <a class="a-social" href="#">
              <em class="fa-brands fa-pinterest-p"></em>
            </a>
          </div>
        </div>
        <div class="topnav-bottom">
          <div class="menu-container hide-tablet" id="topnav-menu">
            <div class="menu active">
              <a href="/">
                <div class="text-hide">หน้าแรก</div>
                <div class="icon icon-hide"><em class="fa-solid fa-house"></em></div>
              </a>
            </div>
            <?php
              foreach([
                'เกี่ยวกับกรม', 'สื่อประชาสัมพันธ์', 'ติดต่อราชการ', 'ข้อเสนอแนะ', 'รับเรื่องร้องเรียน', 'เมนูไฮไลท์'
              ] as $i=>$d){
            ?>
              <div class="menu has-children <?= $i==5? 'main': '' ?>">
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
          <div class="options show-tablet">
            <a class="option sidenav-toggle" href="#">
              <div class="hamburger">
                <div></div><div></div><div></div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="topnav-spacer"></div>
