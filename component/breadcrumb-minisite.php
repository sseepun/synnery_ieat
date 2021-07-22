<?php if(!empty($breadcrumb)){?>
<style>
/* Breadcrumb 02 */
</style>    
    <div class="breadcrumb-02">
        <div class="bg-hero lg" style="background-image:url('<?= $breadcrumb['bg'] ?>')"></div>
        <div class="container">
            <h6 class="h1 color-white text-center" data-aos="fade-up" data-aos-delay="0">
                <?= $breadcrumb['title'] ?>
            </h6>
            <p class="h4 fw-200 color-white xs-hide text-center" data-aos="fade-up" data-aos-delay="150">
                ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย
            </p>
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="300">
                <div class="structure">
                <h5 class="d-none">&nbsp;</h5>
                    <div class="wrapper">
                        <a class="icon" href="#">
                            <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                        </a>
                        <?php foreach($breadcrumb['structure'] as $b){?>
                            <a class="text" href="<?= $b['url'] ?>">
                                <em class="zmdi zmdi-chevron-right"></em> 
                                <?= $b['display'] ?>
                            </a>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>