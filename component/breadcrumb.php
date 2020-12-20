<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01 <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
        <div class="container">
            <div class="wrapper">
                <h6>
                    <a class="icon" href="#">
                        <em class="zmdi zmdi-home"></em>
                    </a>
                </h6>
                <?php foreach($breadcrumb as $b){?>
                    <h6>
                        <a class="text" href="<?= $b['url'] ?>">
                            <em class="zmdi zmdi-chevron-right"></em> 
                            <?= $b['display'] ?>
                        </a>
                    </h6>
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>
