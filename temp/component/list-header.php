
<?php if(isset($listHeader)){?>
    <div class="list-header">
        <div class="block">
            <?php if(in_array('search', $listHeader)){?>
                <div class="search-wrapper">
                    <input type="text" class="round" placeholder="ค้นหา" />
                </div>
            <?php }?>
            <?php if(in_array('category', $listHeader)){?>
                <div class="select-wrapper">
                    <select class="round">
                        <option value="">แบ่งตามหมวดหมู่</option>
                    </select>
                </div>
            <?php }?>
            <?php if(in_array('order', $listHeader)){?>
                <div class="select-wrapper">
                    <select class="round">
                        <option value="" disabled selected>เรียงลำดับข้อมูล</option>
                        <?php 
                            if(!empty($listHeader['order_options'])){
                                foreach($listHeader['order_options'] as $p){
                        ?>
                            <option value="<?= $p ?>"><?= $p ?></option>
                        <?php }}?>
                    </select>
                </div>
            <?php }?>
        </div>
        <div class="block">
            <?php if(in_array('icon-grid', $listHeader)){?>
                <a class="option active" href="#">
                    <em class="fas fa-th"></em>
                </a>
                <a class="option" href="#">
                    <em class="fas fa-th-list"></em>
                </a>
            <?php }?>
            <?php if(in_array('icon-rss', $listHeader)){?>
                <a class="option" href="#">
                    <em class="fas fa-rss"></em>
                </a>
            <?php }?>
        </div>
        <?php if(in_array('crud', $listHeader)){?>
            <div class="block">
                <a class="btn-icon color-black h-color-01" href="#">
                    <em class="zmdi zmdi-plus-circle-o"></em> ตั้งกระทู้ใหม่
                </a>
                <a class="btn-icon color-black h-color-01" href="#">
                    <em class="zmdi zmdi-lock-outline"></em> เข้าสู่ระบบ
                </a>
                <a class="btn-icon color-black h-color-01" href="#">
                    <em class="zmdi zmdi-account-o"></em> สมัครสมาชิก
                </a>
            </div>
        <?php }?>
    </div>
<?php }?>
