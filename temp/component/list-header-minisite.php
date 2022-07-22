
<?php if(isset($listHeader)){?>
    <div class="list-header color-gray">
        <?php if(in_array('total', $listHeader)){?>
            <div class="block">
                <p class="sm text">แสดงข้อมูล 1-100 จาก 180</p>
            </div>
        <?php }?>
        <div class="block">
            <?php if(in_array('view', $listHeader)){?>
                <div class="choice-wrapper">
                    <p class="sm text">มุมมอง</p>
                    <a class="option active" href="#">
                        <em class="fas fa-th"></em>
                    </a>
                    <a class="option" href="#">
                        <em class="fas fa-th-list"></em>
                    </a>
                </div>
            <?php }?>
            <?php if(in_array('order', $listHeader)){?>
                <div class="choice-wrapper">
                    <p class="sm text">การเรียงลำดับ</p>
                    <div class="select-wrapper">
                        <select class="no-bradius">
                            <option value="">ใหม่ล่าสุด</option>
                        </select>
                    </div>
                </div>
            <?php }?>
            <?php if(in_array('icon-rss', $listHeader)){?>
                <div class="choice-wrapper">
                    <a class="option" href="#">
                        <em class="fas fa-rss"></em>
                    </a>
                </div>
            <?php }?>
        </div>
    </div>
<?php }?>
