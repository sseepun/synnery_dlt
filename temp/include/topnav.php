<!-- Topnav -->
<nav class="topnav">
  <div class="wrapper">

    <a class="logo" href="#">
      <div class="img-container">
        <img src="public/assets/app/images/bg/logo.png" alt="Website Logo" />
      </div>
      <div class="text-wrapper">
        <h3 class="color-white lh-xs">กรมการขนส่งทางบก</h3>
        <h6 class="color-white lh-xs fw-400">DEPARTMENT OF LAND TRANSPORT</h6>
      </div>
    </a>

    <div class="menu-container hide-tablet" id="topnav-menu">
      <?php
        foreach([
          'หน้าหลัก', 'เกี่ยวกับกรม', 'สื่อประชาสัมพันธ์', 'ระบบจัดซื้อจัดจ้าง', 'บริการผ่านอินเทอร์เน็ต', 'ติดต่อราชการ',
          'ติดต่อเรา/เสนอแนะ', 'สถิติต่างๆ'
        ] as $i=>$d){
      ?>
        <div class="menu has-children">
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?> <em class="fas fa-chevron-down"></em>
          </a>
          <div class="submenu-dropdown <?php if($i>5)echo 'anchor-right'; ?>">
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

    <div class="blocks">
      <a class="option global-search-toggle pb-1" href="#">
        <div class="option-item">
          <p class="color-white fw-400">ขนาดตัวอักษร</p>
          <div class="d-flex jc-center ai-center">
          <div class="icon font-size-btn fw-500" data-size="-1">
            <span class="text-xl mr-2 color-white">-</span>
          </div>
          <div class="icon color-white font-size-btn fw-500 bg-s" 
           style="width:18px; height:18px; border-radius:50%; line-height:1;" data-size="0">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500 ml-2" data-size="1">
            <span class="text-xl color-white">+</span>
          </div>
        </div>
        </div>
        <div class="option-item">
          <p class="color-white fw-400">เลือกภาษา</p>
        </div>
        <div class="option-item">
          <img src="public/assets/app/images/icon/09.png" alt="Icon" />  
        </div>
      </a>
      <a class="option sidenav-toggle show-tablet" href="#">
        <div class="hamburger">
          <div></div><div></div><div></div>
        </div>
      </a>
    </div>
        
  </div>
</nav>
<!-- <div class="topnav-spacer"></div> -->

<!-- Sidenav -->
<nav class="sidenav">
  <div class="wrapper">
    <div class="sidenav-toggle">
      <div class="hamburger">
        <div></div><div></div><div></div>
      </div>
    </div>
    <div class="options">
      <div class="option">
        <div class="icon"><span class="text-lg">ก</span></div>
        <div class="dropdown">
          <div class="icon font-size-btn fw-500" data-size="-1">
            <span class="text-xl">-</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="0">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="1">
            <span class="text-xl">+</span>
          </div>
        </div>
      </div>
      <div class="option">
        <div class="icon">C</div>
        <div class="dropdown">
          <div class="icon theme-btn" data-theme="0">C</div>
          <div class="icon theme-btn" data-theme="1">C</div>
          <div class="icon theme-btn" data-theme="2">C</div>
        </div>
      </div>
      <div class="option">
        <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
        <div class="dropdown">
          <a href="#">
            <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
          </a>
        </div>
      </div>
    </div>
    <div class="scroll-wrapper" data-simplebar>
      <div class="menu-container"></div>
    </div>
  </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Global Search Container -->
<div class="global-search-container">
  <div class="wrapper">
    <div class="close-filter global-search-toggle"></div>
    <div class="container">
      
    </div>
  </div>
</div>
