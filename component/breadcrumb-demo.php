<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01 <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
        <div class="container">
            <h5 class="d-none">&nbsp;</h5>
            <div class="wrapper">
                <a class="icon" href="#">
                    <img src="public/assets/app/images/icon/home.svg" alt="Image Icon" />
                </a>
                <?php foreach($breadcrumb as $b){?>
                    <a class="text" href="<?= $b['url'] ?>">
                        <em class="zmdi zmdi-chevron-right"></em> 
                        <?= $b['display'] ?>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>
