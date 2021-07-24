<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading bg-ffgray">
    <?php include_once('include/topnav-minisite.php'); ?>

    <section class="banner-02">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<3; $i++){?>
                    <div class="slide" data-desc="Smart Eco Industrial Estate">
                        <div class="wrapper">
                            <img src="public/assets/app/images/banner/minisite-0<?= $i+1 ?>.jpg" alt="Image Banner" />
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
        </div>
    </section>

    <?php 
        $categories = [
            'ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'สื่อมัลติมีเดีย', 
            'เอกสารเผยแพร่', 'ปฏิทินกิจกรรม', 'สถานการณ์ปัจจุบัน'
        ];
    ?>
    <section class="section-padding">
        <div class="container">
            <h6 class="h1 text-center color-04" data-aos="fade-up" data-aos-delay="0">
                กนอ.อัพเดท
            </h6>
            <p class="h5 text-center fw-200 color-gray sm-no-br" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดคสามสามารถของคุรและธุรกิจด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดท ต่างๆ <br> 
                เกี่ยวกับ กนอ. และนิคมอุตสาหกรรมในประเทศไทย 
                <a class="fw-600 color-04 h-color-01" href="#">ได้ที่นี่</a>
            </p>
        </div>
        <div class="tab-container tab-container-04 minisite" data-aos="fade-up" data-aos-delay="300">
            <div class="tabs mt-4">
                <?php foreach($categories as $i=>$d){?>
                    <a class="tab color-black h-color-04 <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>" href="#">
                        <p class="fw-500"><?= $d ?></p>
                    </a>
                <?php }?>
            </div>
            <div class="tab-contents mt-4">
                <?php foreach($categories as $i=>$d){?>
                    <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($j=0; $j<12; $j++){?>
                                    <div class="slide">
                                        <div class="wrapper">
                                            <?php
                                                $cardType = 'CMS';
                                                include('component/minisite-card-grid.php');
                                            ?>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="container mt-4">
                                <div class="bottom-container">
                                    <a class="btn btn-action" href="#">
                                        <span>ดูทั้งหมด</span>
                                    </a>
                                    <div class="arrows">
                                        <a class="arrow bg-04 color-white btn-hex-03" href="#">
                                            <em class="zmdi zmdi-chevron-left"></em>
                                        </a>
                                        <a class="arrow bg-04 color-white btn-hex-03" href="#">
                                            <em class="zmdi zmdi-chevron-right"></em>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
