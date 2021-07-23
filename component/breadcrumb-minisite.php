<?php if(!empty($breadcrumb)){?>
    <div class="breadcrumb-02">
        <div class="img-bg" style="background-image:url('<?= $breadcrumb['bg'] ?>');"></div>
        <div class="container">
            <h6 class="h2 lh-xs color-10 text-center sm-no-br" data-aos="fade-up" data-aos-delay="0">
                <?= $breadcrumb['title'] ?>
            </h6>
            <?php if(!empty($breadcrumb['desc'])){?>
                <p class="h4 sm fw-300 color-black xs-hide text-center" data-aos="fade-up" data-aos-delay="0">
                    <?= $breadcrumb['desc'] ?>
                </p>
            <?php }?>
            <div class="structure" data-aos="fade-up" data-aos-delay="150">
                <a class="icon" href="#">
                    <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                </a>
                <?php foreach($breadcrumb['structure'] as $b){?>
                    <a class="text fw-400 color-black h-color-10" href="<?= $b['url'] ?>">
                        <em class="zmdi zmdi-chevron-right fw-900"></em> 
                        <?= $b['display'] ?>
                    </a>
                <?php }?>
            </div>
        </div>
    </div>
<?php }?>
