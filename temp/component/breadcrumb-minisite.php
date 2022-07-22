
<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-03 <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
        <div class="top-container img-fill" <?php if(!empty($breadcrumbBg))echo 'style="background-image:url(\''.$breadcrumbBg.'\');"'; ?>>
            <div class="container">
                <div class="text-wrapper" data-aos="fade-up" data-aos-delay="0">
                    <div class="wrapper">
                        <h6 class="h5 fw-500 lh-xs">
                            เสริมสร้างความมั่นคงทางพลังงาน
                        </h6>
                        <p class="md fw-400 lh-sm">
                            เพื่อรองรับการเติบโตทางเศรษฐกิจ
                        </p>
                    </div>
                </div>
            </div>
            <div class="text-container" data-aos="fade-up" data-aos-delay="150">
                <div class="wrapper">
                    <h6 class="h5 fw-500 lh-xs">
                        <?= $breadcrumbTitle ?>
                    </h6>
                    <p class="md fw-100 lh-sm">
                        <?= $breadcrumbDesc ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="bottom-container">
            <div class="container">
                <div class="blocks">
                    <div class="block" data-aos="fade-up" data-aos-delay="300">
                        <a class="p sm" href="#">
                            <em class="zmdi zmdi-home p lg"></em>
                        </a>
                        <?php foreach($breadcrumb as $b){?>
                            <em class="zmdi zmdi-chevron-right p sm"></em>
                            <a class="p sm" href="<?= $b['url'] ?>">
                                <?= $b['display'] ?>
                            </a>
                        <?php }?>
                    </div>
                    <div class="block">
                        <div class="search-wrapper" data-aos="fade-up" data-aos-delay="450">
                            <input type="text" placeholder="พิมพ์คำค้นหา" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php }?>
