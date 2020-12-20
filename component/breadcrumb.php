<?php if(!empty($breadcrumb)){?>
    <section class="breadcrumb-01 <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
        <div class="container">
            <h1 class="d-none">Breadcrumb 01</h1>
            <div class="wrapper">
                <a class="icon" href="#">
                    <em class="zmdi zmdi-home"></em>
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
