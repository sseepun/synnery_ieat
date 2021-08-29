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
                    <?php if($i != 3){?>
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
                    <?php }else{?>
                        <div class="tab-content" data-tab="<?= $i ?>">
                            <div class="container">
                                <div class="grids jc-center">
                                    <div class="grid lg-90 sm-100 mt-0">
                                        <div class="table-wrapper">
                                            <table class="table table-download-02 stripe">
                                                <?php for($k=0; $k<10; $k++){?>
                                                    <tr class="row-title">
                                                        <td colspan="2" class="no-border">
                                                            <div class="row-header no-hover">
                                                                <?php if($k%2 == 0){?>
                                                                    <div class="ss-date">
                                                                        <div class="date bg-04">
                                                                            <div class="d">04</div>
                                                                            <div class="m-y">09.2563</div>
                                                                        </div>
                                                                    </div>
                                                                <?php }else{?>
                                                                    <div class="ss-date">
                                                                        <div class="date bg-11">
                                                                            <div class="d">04</div>
                                                                            <div class="m-y">09.2563</div>
                                                                        </div>
                                                                    </div>
                                                                <?php }?>
                                                                <div class="text-wrapper">
                                                                    <p class="md">
                                                                        รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ.
                                                                        ปีงบประมาณ 2563 ประจำไตรมาส 2/2563
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td colspan="2" class="no-border val-middle">
                                                            <div class="d-flex jc-end pr-3">
                                                                <a class="btn btn-img" href="#">
                                                                    <span class="mr-2">ดาวน์โหลดทั้ง (3 ไฟล์)</span>
                                                                    <img src="public/assets/app/images/icon/download.png" alt="Image Icon" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php }?>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="intro-02 section-padding" style="background-image:url('public/assets/app/images/bg/38.jpg');">
        <div class="container">
            <div class="text-right">
                <h6 class="h2 sm fw-600 color-04 lh-xs" data-aos="fade-up" data-aos-delay="0">
                    IEAT 4.0 : Smart Eco Industrial Estate
                </h6>
                <p class="md fw-200 color-white xs-no-br mt-1" data-aos="fade-up" data-aos-delay="150">
                    โครงการพัฒนานิคมอุตสาหกรรม/ท่าเรืออุตสาหกรรม/โรงงานอุตสาหกรรม <br>
                    สู่การเป็นนิคมอุตสาหกรรมเชิงนิเวศอัจฉริยะ
                </p>
            </div>
            <div class="icons" data-aos="fade-up" data-aos-delay="300">
                <div class="icon">
                    <img src="public/assets/app/images/icon/minisite-01.png" alt="Image Icon" />
                </div>
                <div class="icon">
                    <img src="public/assets/app/images/icon/minisite-02.png" alt="Image Icon" />
                </div>
                <div class="icon">
                    <img src="public/assets/app/images/icon/minisite-03.png" alt="Image Icon" />
                </div>
                <div class="icon">
                    <img src="public/assets/app/images/icon/minisite-04.png" alt="Image Icon" />
                </div>
                <div class="icon">
                    <img src="public/assets/app/images/icon/minisite-05.png" alt="Image Icon" />
                </div>
            </div>
        </div>
    </section>

    <section class="intro-03">
        <div class="container">
            <div class="grids">
                <div class="grid lg-50 sm-100 mt-0">
                    <div class="section-padding left-container">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/39.jpg');"></div>
                        <div data-aos="fade-up" data-aos-delay="0">
                            <div class="title-container">
                                <img src="public/assets/app/images/icon/09.png" alt="Image Icon" />
                                <h6 class="h3 xs fw-600">ประกาศจัดซื้อจัดจ้าง</h6>
                            </div>
                            <div class="rss-01 position-relative mt-2">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="rss no-icon">
                                        <?php if($i%2==0){?>
                                            <div class="ss-date">
                                                <div class="date bg-04">
                                                    <div class="d">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        <?php }else{?>
                                            <div class="ss-date">
                                                <div class="date bg-11">
                                                    <div class="d">04</div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        <?php }?>
                                        <a class="title p md fw-300 lh-xs color-black h-color-04" href="#">
                                            <div class="line-1">
                                                การใช้งานระบบการให้บริการสอบถามและแจ้งปัญหาการใช้งานระบบ 
                                                e-GP แบบออนไลน์
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="btns mt-2">
                                <a class="btn btn-action" href="#">
                                    <span>ดูทั้งหมด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-50 sm-100">
                    <div class="section-padding right-container" data-aos="fade-up" data-aos-delay="150">
                        <div class="title-container">
                            <img src="public/assets/app/images/icon/11.png" alt="Image Icon" />
                            <h6 class="h3 xs fw-600">ประกาศรับสมัครงาน</h6>
                        </div>
                        <div class="rss-01 mt-2">
                            <?php for($i=0; $i<4; $i++){?>
                                <div class="rss with-info">
                                    <?php if($i%2==0){?>
                                        <div class="ss-date">
                                            <div class="date bg-04">
                                                <div class="d">04</div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                        </div>
                                    <?php }else{?>
                                        <div class="ss-date">
                                            <div class="date bg-11">
                                                <div class="d">04</div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                        </div>
                                    <?php }?>
                                    <a class="title p md fw-300 lh-xs color-black h-color-04" href="#">
                                        <div class="line-2">
                                            การใช้งานระบบการให้บริการสอบถามและแจ้งปัญหาการใช้งานระบบ 
                                            e-GP แบบออนไลน์
                                        </div>
                                    </a>
                                    <div class="info p md fw-300 color-black">
                                        <span class="fw-500 color-04 mr-1">12</span> ตำแหน่ง
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <div class="btns mt-2">
                            <a class="btn btn-action" href="#">
                                <span>ดูทั้งหมด</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
