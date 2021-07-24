<?php if(!empty($categoryTab)){?>
    <div class="tabs tabs-minisite box-shadow">
        <img class="img-hero" src="<?= $categoryTab['bg'] ?>" alt="Image Hero" />
        <?php foreach($categoryTab['structure'] as $d){?>
            <a 
                class="
                    tab tab-main
                    <?php if(!empty($d['active']))echo 'active'; ?> 
                    <?php if(!empty($d['children']))echo 'has-children'; ?> 
                    <?php if(!empty($d['active']) && !empty($d['children']))echo 'toggled'; ?> 
                " 
                href="#" 
            >
                <div class="icon">
                    <?php if(!empty($d['icon'])){?>
                        <img src="public/assets/app/images/icon/<?= $d['icon'] ?>" alt="Icon">
                    <?php }?>
                </div>
                <h6><?= $d['name'] ?></h6>
                <?php if(!empty($d['children'])){?>
                    <div class="chev">
                        <em class="zmdi zmdi-chevron-down"></em>
                    </div>
                <?php }?>
            </a>
            <?php if(!empty($d['children'])){?>
                <div class="tab-children" <?php if(!empty($d['active']))echo 'style="display:block;"'; ?>>
                    <?php foreach($d['children'] as $c){?>
                        <a class="tab" href="#">
                            <div class="icon"></div>
                            <h6><?= $c['name'] ?></h6>
                        </a>
                    <?php }?>
                </div>
            <?php }?>
        <?php }?>
    </div>
<?php }?>
