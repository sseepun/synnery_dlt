
<!-- Super Topnav -->
<nav class="stopnav style-06">
  <div class="stopnav-wrapper">
    <div class="container">
      <div class="wrapper">
        <div class="options">
          <a class="option-icon hide-tablet" href="#">
            <div class="icon mr-2"><em class="fa-solid fa-message"></em></div>
            รับเรื่องร้องเรียน
            <div class="chev ml-2"><em class="fa-solid fa-chevron-right"></em></div>
          </a>
          <a class="option-icon hide-tablet" href="#">
            <div class="icon mr-2"><em class="fa-solid fa-message"></em></div>
            อีเมล์: complaint@dlt.mail.go.th
          </a>
        </div>
        <div class="options">
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
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="stopnav-spacer"></div>

<!-- Topnav -->
<nav class="topnav style-06">
  <div class="container">
    <div class="topnav-wrapper">

      <a class="logo" href="#">
        <div class="img-container">
          <img src="public/assets/app/images/logo-03.png" alt="Website Logo" />
        </div>
        <div class="text-wrapper">
          <h6 class="color-03">สำนักงานขนส่ง</h6>
          <p>จังหวัดสุราษฎร์ธานี</p>
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
          <div class="icon font-size-btn fw-500" data-size="14">
            <span class="text-xl">-</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="16">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="18">
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
<div class="global-search-container use-gsap">
  <div class="wrapper">
    <div class="hamburger active global-search-toggle">
      <div></div><div></div><div></div>
    </div>
    <div class="container">
      <form action="./" method="GET">
        <h2 class="h4 fw-500 text-center color-03 mb-4">
          คุณกำลังมองหาอะไร?
        </h2>
        <div class="input-container">
          <input type="text" name="keywords" placeholder="ค้นหา" required>
          <button type="submit" class="h-color-03 pt-2">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Accessibility -->
<nav class="side-panel access-panel">
  <div class="wrapper">
    <div class="panel">
      <div class="panel-row">
        <div class="icon">
          <img src="https://www.dpt.go.th/assets/app/images/icon/access.png" alt="Theme">
        </div>
        <div class="p fw-400">การช่วยการเข้าถึง</div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">ขนาดตัวอักษร</p>
        </div>
        <div class="options">
          <a class="option btn font-size-btn" data-size="14">
            <span class="fw-500" style="font-size:16px;">ก</span>
          </a>
          <a class="option btn font-size-btn active" data-size="16">
            <span class="fw-500" style="font-size:20px;">ก</span>
          </a>
          <a class="option btn font-size-btn" data-size="18">
            <span class="fw-500" style="font-size:24px;">ก</span>
          </a>
        </div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">การเว้นระยะห่าง</p>
        </div>
        <div class="options">
          <span class="option btn-lsp active cursor-pointer" data-lsp="0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="16px" style="transform:scale(.8)">
              <path fill-rule="evenodd" d="M48.697,8.710 L48.121,9.269 L41.498,15.696 L41.199,15.987 L40.906,15.691 L40.341,15.120 L40.048,14.824 L40.347,14.534 L45.857,9.187 L35.768,8.924 L35.356,8.913 L35.360,8.505 L35.368,7.706 L35.372,7.285 L35.798,7.296 L45.841,7.557 L40.474,2.133 L40.181,1.836 L40.480,1.546 L41.056,0.987 L41.355,0.697 L41.649,0.993 L48.138,7.553 L48.703,8.123 L48.996,8.419 L48.697,8.710 ZM30.405,7.104 L32.289,7.104 L32.289,8.970 L30.405,8.970 L30.405,7.104 ZM25.682,7.104 L27.566,7.104 L27.566,8.970 L25.682,8.970 L25.682,7.104 ZM20.959,7.104 L22.844,7.104 L22.844,8.970 L20.959,8.970 L20.959,7.104 ZM16.236,7.104 L18.121,7.104 L18.121,8.970 L16.236,8.970 L16.236,7.104 ZM13.636,8.271 L13.632,8.693 L13.206,8.682 L3.163,8.421 L8.530,13.845 L8.823,14.142 L8.524,14.432 L7.948,14.991 L7.649,15.281 L7.356,14.985 L0.866,8.425 L0.302,7.855 L0.009,7.558 L0.308,7.268 L0.884,6.709 L7.506,0.281 L7.805,-0.009 L8.099,0.287 L8.663,0.857 L8.956,1.154 L8.657,1.444 L3.147,6.791 L13.237,7.054 L13.649,7.065 L13.644,7.473 L13.636,8.271 Z"></path>
            </svg>
          </span>
          <span class="option btn-lsp cursor-pointer" data-lsp="1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="18px" style="transform:scale(.8)">
              <path fill-rule="evenodd" d="M56.013,9.163 L55.440,9.722 L48.846,16.149 L48.548,16.440 L48.256,16.143 L47.694,15.574 L47.403,15.277 L47.700,14.987 L53.186,9.639 L43.140,9.377 L42.730,9.366 L42.734,8.958 L42.743,8.160 L42.747,7.738 L43.171,7.749 L53.170,8.010 L47.827,2.586 L47.535,2.289 L47.833,1.999 L48.406,1.441 L48.704,1.150 L48.996,1.447 L55.457,8.006 L56.019,8.576 L56.311,8.873 L56.013,9.163 ZM34.801,7.556 L36.677,7.556 L36.677,9.423 L34.801,9.423 L34.801,7.556 ZM27.748,7.556 L29.624,7.556 L29.624,9.423 L27.748,9.423 L27.748,7.556 ZM20.694,7.556 L22.570,7.556 L22.570,9.423 L20.694,9.423 L20.694,7.556 ZM14.105,8.724 L14.101,9.146 L13.677,9.135 L3.678,8.873 L9.021,14.298 L9.313,14.594 L9.015,14.884 L8.442,15.443 L8.144,15.734 L7.852,15.438 L1.391,8.878 L0.829,8.308 L0.537,8.011 L0.835,7.721 L1.408,7.162 L8.002,0.734 L8.300,0.444 L8.592,0.740 L9.154,1.311 L9.445,1.607 L9.148,1.897 L3.662,7.245 L13.707,7.507 L14.118,7.517 L14.113,7.926 L14.105,8.724 Z"></path>
            </svg>
          </span>
        </div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">ความตัดกันของสี</p>
        </div>
        <div class="options">
          <div class="option-row theme-btn cursor-pointer theme-btn-0 active" data-theme="0">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-0.png" alt="Theme">
            </div>
            <p><span class="fw-400">สีปกติ</span></p>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-1" data-theme="1">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-1.png" alt="Theme">
            </div>
            <p><span class="fw-400">ขาว-ดำ</span></p>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-2" data-theme="2">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-2.png" alt="Theme">
            </div>
            <p><span class="fw-400">ดำ-เหลือง</span></p>
          </div>
        </div>
      </div>
    </div>
    <span class="icon cursor-pointer">
      <img src="https://www.dpt.go.th/assets/app/images/icon/access.png" alt="Access">
    </span>
  </div>
</nav>
