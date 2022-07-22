
<?php if(isset($listFooter)){?>
    <div class="list-footer ss-border">
        <?php if(in_array('total', $listFooter)){?>
            <div class="block">
                <div class="text-wrapper color-gray text-sm">
                    จำนวนทั้งหมด <span class="fw-600 color-01">400 รายการ</span> 
                </div>
            </div>
        <?php }else{?>
            <div class="block"></div>
        <?php }?>
        <?php if(in_array('pagination', $listFooter)){?>
            <div class="block">
                <div class="pagination-02">
                    <div class="wrapper">
                        <a href="#" class="page-btn page-first disabled mr-1">
                            <em class="zmdi zmdi-chevron-left"></em>
                            <em class="zmdi zmdi-chevron-left mr-2"></em>
                            หน้าแรก
                        </a>
                        <a href="#" class="page-btn page-prev disabled mr-3">
                            <em class="zmdi zmdi-chevron-left mr-2"></em>
                            ก่อนหน้า
                        </a>
                        <a href="#" class="page-btn active">1</a>
                        <a href="#" class="page-btn">2</a>
                        <a href="#" class="page-btn">3</a>
                        <a href="#" class="page-btn">4</a>
                        <a href="#" class="page-btn">5</a>
                        <a href="#" class="page-btn page-next ml-3">
                            ถัดไป 
                            <em class="zmdi zmdi-chevron-right"></em>
                        </a>
                        <a href="#" class="page-btn page-last ml-2">
                            สุดท้าย 
                            <em class="zmdi zmdi-chevron-right"></em>
                            <em class="zmdi zmdi-chevron-right"></em>
                        </a>
                    </div>
                </div>
            </div>
        <?php }?>
        <?php if(in_array('pp', $listFooter)){?>
            <div class="block">
                <div class="text-wrapper color-gray text-sm">
                    <div class="select-wrapper">
                        <select class="pp color-black fw-500 no-bradius">
                            <option value="10">10 รายการต่อหน้า</option>
                            <option value="25">25 รายการต่อหน้า</option>
                            <option value="50">50 รายการต่อหน้า</option>
                            <option value="75">75 รายการต่อหน้า</option>
                            <option value="100">100 รายการต่อหน้า</option>
                        </select>
                    </div>
                </div>
            </div>
        <?php }?>
    </div>
<?php }?>
