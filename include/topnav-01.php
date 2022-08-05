
<!-- Topnav -->
<nav class="topnav style-01">
  <div class="topnav-wrapper">
    
    <a class="logo" href="#">
      <div class="img-container">
        <img src="public/assets/app/images/logo-01.png" alt="Website Logo" />
      </div>
      <div class="text-wrapper">
        <h5 class="fw-300 lh-2xs">กรมการขนส่งทางบก</h5>
        <p class="xs fw-300">DEPARTMENT OF LAND TRANSPORTATION</p>
      </div>
    </a>

    <div class="menu-container hide-tablet" id="topnav-menu">
      <?php
        foreach([
          'เกี่ยวกับกรม', 'สื่อประชาสัมพันธ์', 'ติดต่อราชการ', 'ข้อเสนอแนะ', 'รับเรื่องร้องเรียน'
        ] as $i=>$d){
      ?>
        <div class="menu has-children <?= $i==0? 'active': '' ?>">
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?>
            <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
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
      <div class="option-detail">
        <p class="xs">ขนาดอักษร</p>
        <div class="sets">
          <a class="set font-size-btn" data-size="14">-</a>
          <a class="set main font-size-btn" data-size="16">ก</a>
          <a class="set font-size-btn" data-size="18">+</a>
        </div>
      </div>
      <div class="option-detail">
        <p class="xs">เลือกภาษา</p>
        <div class="sets">
          <div class="set-option">
            <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
            <div class="text">ไทย</div>
            <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
          </div>
          <div class="set-dropdown">
            <a class="set-option" href="#">
              <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
              <div class="text">อังกฤษ</div>
            </a>
          </div>
        </div>
      </div>
      <a class="option global-search-toggle pb-1" href="#">
        <em class="fa-solid fa-magnifying-glass"></em>
      </a>
      <a class="option sidenav-toggle show-tablet" href="#">
        <div class="hamburger">
          <div></div><div></div><div></div>
        </div>
      </a>
    </div>

  </div>
</nav>
