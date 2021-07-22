<?php if(!empty($breadcrumb)){?>
<style>
.breadcrumb-02{margin-bottom:-9rem;}
.breadcrumb-02 .bg-hero{width:100%;background-size:cover;background-position:center;height:25rem;}
.breadcrumb-02 .wrapper{width:100%; display:flex; align-items:center; flex-wrap:wrap;}
.breadcrumb-02 a{display:block; white-space:nowrap; margin:.125rem 0; font-size:1.25rem; line-height:1;}
.breadcrumb-02 a{margin-right:.6875rem;}
.breadcrumb-02 a:last-child{margin-right:0; font-weight:600!important;}
.color-111{color:#803f97}
.color-112{color:#6e3b89}
.bg-112{background-color:#6e3b89;}
</style>    
    <div class="breadcrumb-02">
        <div class="bg-hero lg" style="background-image:url('<?= $breadcrumb['bg'] ?>')">
            <div class="container pt-4">
                <h6 class="h1 color-111 text-center" data-aos="fade-up" data-aos-delay="0">
                    <?= $breadcrumb['title'] ?>
                </h6>
                <p class="h4 fw-300 color-black xs-hide text-center" data-aos="fade-up" data-aos-delay="150">
                    ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br>
                    เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย
                </p>
                <div class="d-flex jc-center mt-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="structure">
                        <h5 class="d-none">&nbsp;</h5>
                        <div class="wrapper">
                            <a class="icon bg-112" href="#">
                                <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                            </a>
                            <?php foreach($breadcrumb['structure'] as $b){?>
                                <a class="text color-black fw-500" href="<?= $b['url'] ?>">
                                    <em class="zmdi zmdi-chevron-right fw-900 color-112"></em> 
                                    <?= $b['display'] ?>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }?>