<div class="tabs">
    <div class="ss-box-shadow"></div>
    <?php
        if(!isset($cateActive)) $cateActive = 0;
        foreach([
            'ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'เอกสารเผยแพร่', 'ปฏิทินกิจกรรม', 
            'สถานการณ์ปัจจุบัน', 'ประกาศจัดซื้อจัดจ้าง', 'ร่วมงานกับเรา'
        ] as $i=>$d){
    ?>
        <a class="tab tab-main color-black h-color-04 <?php if($i==$cateActive)echo 'active'; ?>" 
        data-tab="<?= $i ?>" href="#">
            <div class="icon">
                <img src="public/assets/app/images/icon/tab-<?= $i+1 ?>.png" alt="Icon">
            </div>
            <h6><?= $d ?></h6>
        </a>
        <?php if(!empty($cateChildren) && $cateChildren && $i==0){?>
            <div class="tab-children">
                <a class="tab tab-list color-black h-color-04 active" href="#">
                    <p>ประกาศจาก กนอ.</p>
                </a>
                <a class="tab tab-list color-black h-color-04" href="#">
                    <p>ข่าวสารจาก กนอ.</p>
                </a>
                <a class="tab tab-list color-black h-color-04" href="#">
                    <p>ข่าวสารจากหน่วยงานที่เกี่ยวข้อง</p>
                </a>
                <a class="tab tab-list color-black h-color-04" href="#">
                    <p>ข่าวอื่นๆ</p>
                </a>
            </div>
        <?php }?>
    <?php }?>
</div>
