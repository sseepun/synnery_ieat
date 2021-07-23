<?php if(!empty($categoryTab)){?>
    <div class="tabs tabs-minisite box-shadow">
        <img class="img-hero" src="<?= $categoryTab['bg'] ?>" alt="Image Hero" />
        <?php foreach($categoryTab['structure'] as $i=>$d){?>
            <a 
                class="
                    tab tab-main color-white h-color-01 
                    <?php if(!empty($d['active']))echo 'active'; ?>
                " 
                data-tab="<?= $i ?>" href="javascript:" 
            >
                <div class="icon">
                    <?php if(!empty($d['icon'])){?>
                        <img src="public/assets/app/images/icon/<?= $d['icon'] ?>" alt="Icon">
                    <?php }?>
                </div>
                <h6><?= $d['name'] ?></h6>
            </a>
        <?php }?>
    </div>
<?php }?>
