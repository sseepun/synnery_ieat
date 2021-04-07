<style>
    .tab.active {
        background:#5d4189;
    }
    .tab-container-01 .tab.active::before{
        opacity:0;
    }
</style>

<div class="tabs" style="background-image: url('public/assets/app/images/bg/34.jpg'); padding-bottom: 27.5rem;">
    <div class="ss-box-shadow"></div>
    <?php
        if(!isset($cateActive)) $cateActive = 0;
        foreach([
            'ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'ประกาศจัดซื้อจัดจ้าง', 'ร่วมงานกับเรา'
        ] as $i=>$d){
    ?>
        <a class="tab tab-main color-white h-color-01 <?php if($i==$cateActive)echo 'active'; ?>" 
        data-tab="<?= $i ?>" href="#">
            <div class="icon">
                <img src="public/assets/app/images/icon/tab-<?= $i+1 ?>.png" alt="Icon">
            </div>
            <h6><?= $d ?></h6>
        </a>
    <?php }?>
</div>
