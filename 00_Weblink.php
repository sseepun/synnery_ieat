<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
            [ 'url' => '#', 'display' => 'หน่วยงานที่เกี่ยวข้อง' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="content-03 section-bpadding section-bg-hero" style="background-image:url('public/assets/app/images/bg/19.jpg');">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/10.png"></div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">
                หน่วยงานที่เกี่ยวข้อง
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ 
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย 
            </h5>

            <div class="tab-container tab-container-02">
                <div class="grids">

                    <div class="grid xl-25 lg-30 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <div class="tabs">
                            <?php
                                foreach([
                                    'หน่วยงานภายใน', 'กระทรวงอุตสาหกรรม', 'สถาบันเครือข่าย', 
                                    'หน่วยงานที่เกี่ยวข้อง', 'บริษัทร่วมทุน'
                                ] as $i=>$d){
                            ?>
                                <a class="tab <?php if($i==0)echo 'active'; ?>"  data-tab="<?= $i ?>" href="#">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/<?= 20+$i ?>.jpg');"></div>
                                    <div class="text-wrapper">
                                        <h6><?= $d ?></h6>
                                    </div>
                                </a>
                            <?php }?>
                        </div>
                    </div>

                    <div class="grid xl-75 lg-70 sm-100" data-aos="fade-up" data-aos-delay="750">
                        <div class="tab-contents">
                            <?php
                                foreach([
                                    'หน่วยงานภายใน', 'กระทรวงอุตสาหกรรม', 'สถาบันเครือข่าย', 
                                    'หน่วยงานที่เกี่ยวข้อง', 'บริษัทร่วมทุน'
                                ] as $i=>$d){
                            ?>
                                <div class="tab-content <?php if($i==$cateActive)echo 'active'; ?>"  data-tab="<?= $i ?>">
                                    <div class="ss-box-header">
                                        <div class="ss-box-bg"></div>
                                        <div class="header bg-06 color-white">
                                            <h3 class="sm fw-500"><?= $d ?></h3>
                                        </div>
                                        <div class="body">
                                            <div class="grids">
                                                <?php for($j=0; $j<9; $j++){?>
                                                    <div class="grid xl-50 lg-100 md-50 sm-100 mt-2 mb-2 pb-4">
                                                        <div class="d-flex jc-space-between ai-center">
                                                            <div class="icon" style="width:5.5rem;">
                                                                <img class="img" src="public/assets/app/images/icon/weblink-<?= $j+1 ?>.png" alt="Icon" />
                                                            </div>
                                                            <div class="text-wrapper" style="width:calc(100% - 6.5rem);">
                                                                <h4>ช่องทางร้องเรียน</h4>
                                                                <div class="p">
                                                                    <div class="text-sm">
                                                                        สะดวกทุกช่องทาง ง่ายต่อการเข้าถึง <br>
                                                                        <span class="fw-600 text-lg">7</span> 
                                                                        ช่องทางการติดต่อและขั้นตอนการร้องเรียน 
                                                                        <a class="fw-600 color-black h-color-04" href="#">
                                                                            คลิกที่นี่
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
