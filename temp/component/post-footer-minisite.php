
<?php if(isset($postFooter)){?>
    <div class="post-footer-minisite">
        <?php if(in_array('tags', $postFooter)){?>
            <div class="block">
                <div class="p lg fw-600 color-01">แท็ก</div>
                <div class="sep"></div>
                <a class="tag" href="#">สำนักบริหารกลาง</a>
                <a class="tag" href="#">ข่าวกิจกรรมและประชาสัมพันธ์</a>
                <a class="tag" href="#">โรงไฟฟ้าชุมชน</a>
                <a class="tag" href="#">Energy for All</a>
            </div>
        <?php }?>
    </div>
<?php }?>
