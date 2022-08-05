<!-- Super Topnav -->
<?php if(false){?>
  <nav class="stopnav style-02">
    <div class="container">
      <div class="wrapper">
        <div class="option">
          <div class="a-text">
            <em class="fa-solid fa-phone mr-2"></em> 0-2271-8888
          </div>
          <div class="option-box">
            <div class="a-text">
              <em class="fa-solid fa-envelope mr-2"></em> webmaster@mail.dlt.go.th
            </div>
          </div>
        </div>
        <div class="option">
          <div class="a-text">
            <img src="public/assets/app/images/icon/79.png" alt="Sitemap">
          </div>
          <div class="option-box">
            <div class="a-text">
              <em class="fa-solid fa-envelope mr-2"></em>
            </div>
          </div>
        </div>
        <div class="option">
          <div class="a-text"><em class="fa-solid fa-phone mr-2"></em></div>
          <div class="a-text"><em class="fa-solid fa-phone mr-2"></em></div>
          <div class="option-box">
            <div class="a-text">
              <em class="fa-solid fa-envelope mr-2"></em>
            </div>
          </div>
        </div>
        <div class="option">
          <div class="a-text">
            <em class="fa-solid fa-magnifying-glass"></em>
          </div>
          <div class="option-box .socials">
            <div class="a-text">
              <em class="fa-brands fa-facebook-f mr-2"></em>
              <em class="fa-brands fa-instagram mr-2"></em>
              <em class="fa-brands fa-twitter mr-2"></em>
              <em class="fa-brands fa-pinterest-p mr-2"></em>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
<?php }?>

<!-- Topnav -->
<?php if(false){?>
  <nav class="topnav style-02">
    <div class="container">
      <div>
        <a class="logo" href="#">
          <div class="img-container">
            <!-- <img src="public/assets/app/images/logo-03.png" alt="Website Logo" /> -->
          </div>
        </a>

        <div class="menu-container">
          <?php
            foreach([
              'เกี่ยวกับกรม', 'สื่อประชาสัมพันธ์', 'ติดต่อราชการ', 'ข้อเสนอแนะถึงเรา', 'รับเรื่องร้องเรียน', 'เมนูไฮไลท์'
            ] as $i=>$d){
          ?>
          <?php }?>
        </div>
      </div>
    </div>
  </nav>
<?php }else{?>
  <img class="img" src="public/assets/app/images/topnav-02.jpg" alt="Topnav" />
<?php }?>
