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
            [ 'url' => '#', 'display' => 'เกี่ยวกับกนอ' ],
            [ 'url' => '#', 'display' => 'วิสัยทัศน์ และพันธกิจ' ],
            [ 'url' => '#', 'display' => 'ปรัชญา กนอ.' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="about-01">
        <div class="section-bpadding">
            <div class="container">
                <div class="grids ai-end">
                    <div class="grid xl-60 sm-100 mt-0">
                        <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                            ปรัชญา กนอ.
                        </h3>
                        <h4 class="h3 sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                            ตลอดระยะเวลากว่า 47 ปีที่ผ่านมา มุ่งมั่นสร้างฐานการผลิต
                        </h4>
                        <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                            เพื่อรองรับการลงทุนด้านอุตสาหกรรม ผลักดันการลงทุน เพื่อพัฒนาเศรษฐกิจของประเทศ <br>
                            ให้เกิดความมั่นคงและเป็นศูนย์กลางที่สำคัญของเอเชีย
                        </h5>
                    </div>
                    <div class="grid xl-40 sm-100 mt-0">
                        <div class="tab-icons" data-aos="fade-up" data-aos-delay="450">
                            <?php
                                foreach([
                                    'ปรัชญา กนอ.', 'วิสัยทัศน์', 'วัฒนธรรมองค์กร', 'พันธกิจ', 'ระบบคุณค่า'
                                ] as $i=>$d){
                            ?>
                                <a class="tab-icon <?php if($i==0)echo 'active'; ?>" data-slide="<?= $i ?>" href="#">
                                    <div class="icon">
                                        <img src="public/assets/app/images/icon/philosophy-<?= $i+1 ?>.png" alt="Icon" />
                                        <img class="icon-active" src="public/assets/app/images/icon/philosophy-<?= $i+1 ?>-active.png" alt="Icon" />
                                    </div>
                                    <?= $d ?>
                                </a>
                            <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-container" data-aos="fade-up" data-aos-delay="600">
            <div class="slides">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="slide">
                        <img src="public/assets/app/images/bg/philosophy-<?= $i+1 ?>.jpg" alt="Slide" />
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
