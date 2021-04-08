<div class="tabs tabs-01" style="background-image:url('public/assets/app/images/bg/34.jpg');">
    <div class="ss-box-shadow"></div>
    <?php
        foreach([
            'ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'ประกาศจัดซื้อจัดจ้าง', 'ร่วมงานกับเรา'
        ] as $i=>$d){
    ?>
        <a class="tab tab-main color-white h-color-01 <?php if($i==0)echo 'active'; ?>" 
        data-tab="<?= $i ?>" href="#">
            <div class="icon">
                <img src="public/assets/app/images/icon/demo-0<?= $i+1 ?>.png" alt="Icon">
            </div>
            <h6><?= $d ?></h6>
        </a>
    <?php }?>
</div>
