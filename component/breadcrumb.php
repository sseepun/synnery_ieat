<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01">
        <div class="container">
            <div class="wrapper">
                <a class="icon" href="#">
                    <i class="zmdi zmdi-home"></i>
                </a>
                <?php foreach($breadcrumb as $b){?>
                    <a class="text" href="<?= $b['url'] ?>">
                        <i class="zmdi zmdi-chevron-right"></i> 
                        <?= $b['display'] ?>
                    </a>
                <?php }?>
            </div>
        </div>
    </section>
<?php }?>
