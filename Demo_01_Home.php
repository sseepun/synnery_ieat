<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>

        /* 
       
        table.table-download-02 td {background:#fff; border:none; }

        
        .content-01{ height: 45rem;}
        @media screen and (max-width: 991.98px){
            .ss-date{padding: 0 0 0 3rem;}
        }
        @media screen and (max-width: 575.98px){
            .content-01{ height: 37.5rem;}
        } */
    </style>
<style>

</style>
</head>
<body class="loading bg-11">
    <?php include_once('include/topnav-demo.php'); ?>

    <section class="banner-01 style-demo">
        <h5 class="d-none">&nbsp;</h5>
        <div class="slide-container">
            <div class="slides">
                <?php for($i=0; $i<2; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/05.jpg');"></div>
                            <div class="container">
                                <div class="text-container color-01">
                                    <h1 class="fw-600 animate" style="--delay:.75s;">
                                        <span class="text-lg">รอยยิ้มของทุกคนในชุมชน</span>
                                    </h1>
                                    <p class="h4 lg fw-300 animate" style="--delay:.9s;">
                                        คือที่สุดของความภาคภูมิใจของการนิคมอุตสหกรรมแห่งประเทศไทย
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="fit img-fill img-bg" style="background-image:url('public/assets/app/images/banner/02.jpg');"></div>
                            <div class="container">
                            
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
            <div class="dots"></div>
            <div class="arrows"></div>
        </div>
    </section>

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
        <div class="tab-container tab-container-04 style-demo" data-aos="fade-up" data-aos-delay="300">
            <div class="tabs mt-4">
                <?php
                    foreach([
                        'ข่าวประชาสัมพันธ์', 'ข่าวสารการลงทุน', 'สื่อมัลติมีเดีย', 
                        'เอกสารเผยแพร่', 'ปฏิทินกิจกรรม', 'สถานการณ์ปัจจุบัน'
                    ] as $i=>$d){
                ?>
                    <a class="tab color-black h-color-04 <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>" href="#">
                        <p class="fw-500"><?= $d ?></p>
                    </a>
                <?php }?>
            </div>
            <div class="tab-contents mt-4">
                <?php for($i=0; $i<6; $i++){?>
                    <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($j=0; $j<12; $j++){?>
                                    <div class="slide">
                                        <div class="wrapper">
                                            <div class="ss-card ss-card-01">
                                                <a class="ss-img vertical-rect" href="#">
                                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+$j)%6+1 ?>.jpg');"></div>
                                                    <div class="hover-container">
                                                        <div class="icon">
                                                            <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                        </div>
                                                    </div>
                                                    <div class="date">
                                                        <div class="d">04</div>
                                                        <div class="m-y">09.2563</div>
                                                    </div>
                                                </a>
                                                <div class="text-container">
                                                    <div class="ss-box-shadow"></div>
                                                    <div class="text-wrapper">
                                                        <a class="title h6 fw-600" href="#">
                                                            กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                                                            สายสื่อสารลงดิน วางระบบ 5G
                                                        </a>
                                                        <p class="desc mt-1">
                                                            บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                                            รองรับ Smart City เตรียมวางระบบ 5 G ครอบคลุมพื้นที่นิคมอุตสาห
                                                            กรรรม 14 แห่ง และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67  
                                                        </p>
                                                        <div class="ss-stat">
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-eye"></em>
                                                                </div> 112
                                                            </div>
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-share"></em>
                                                                </div> 20
                                                            </div>
                                                        </div>
                                                        <div class="ss-tag">
                                                            <div class="text">TAG :</div> 
                                                            <div class="tags">
                                                                <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                                                <a class="tag" href="#">กนอ.</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="container">
                                <div class="text-center position-relative mt-4">
                                    <a class="btn btn-action" href="#">
                                        <span>ดูทั้งหมด</span>
                                    </a>
                                    <div class="arrows">
                                        <a class="btn-icon btn-icon-01 bg-04 btn-hex-03 prev-arrow mr-2" href="#">
                                            <em class="zmdi zmdi-chevron-left"></em>
                                        </a>
                                        <a class="btn-icon btn-icon-01 bg-04 btn-hex-03 next-arrow" href="#">
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

    <!-- <section class="content-01 section-padding">
        <div class="img-bg lazy-bg" data-src="public/assets/app/images/banner/06.jpg"></div>
        <div class="container">
            <div class="text-right">                   
                <div class="h1 color-04" data-aos="fade-up" data-aos-delay="0">
                    IEAT 4.0 : Smart Eco Industrial Estate
                </div>
                <h5 class="color-white fw-200" data-aos="fade-up" data-aos-delay="150">
                    โครงการพัฒนานิคมอุตสาหกรรมโรงงานอุตสาหกรรม <br>
                    สู่การเป็นนิคมอุตสาหกรรมเชิงนิเวศอัจฉริยะ
                </h5>
            </div>
        </div>
    </section> -->
    <img class="img" src="public/assets/app/images/bg/demo-01.jpg" alt="Image Banner" data-aos="fade-up" data-aos-delay="0" />
    
    <section class="call-04">
        <div class="container">
            <div class="grids no-gap">
                <div class="grid lg-60 sm-100 mt-0">
                    <div class="content-left">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/36.jpg');"></div>
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="0">
                            <div class="title-container">
                                <img src="public/assets/app/images/icon/09.png" alt="Image Icon" />
                                <h6 class="h3 xs fw-600">ประกาศจัดซื้อจัดจ้าง</h6>
                            </div>
                            <div class="items mt-4">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="item">
                                        <div class="ss-date">
                                            <div class="date bg-0<?= ($i%2) == 0 ? '4': '8'; ?>">
                                                <div class="d">04</div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <p class="text fw-300">
                                                ประกาศการนิคมอุตสาหกรรมแห่งประเทศไทย ที่ 26/2564 เรื่อง 
                                                ประกวดราคาจ้างโครงการจัด
                                            </p>
                                        </div>
                                        <div class="img-container">
                                            <img src="public/assets/app/images/file/pdf-02.png" alt="Image Icon" />
                                        </div>
                                        <div class="option-container">
                                            <a class="option" href="#">
                                                ดาวน์โหลด
                                                <span class="icon-container">
                                                    <img src="public/assets/app/images/icon/arrow-down.png" alt="Image Icon" />
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="btns text-right mt-3">
                                <a class="btn btn-action" href="#">
                                    <span>ดูทั้งหมด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid lg-40 sm-100 mt-0">
                    <div class="content-right">
                        <div class="position-relative" data-aos="fade-up" data-aos-delay="150">
                            <div class="title-container">
                                <img src="public/assets/app/images/icon/11.png" alt="Image Icon" />
                                <h6 class="h3 xs fw-600">ประกาศรับสมัครงาน</h6>
                            </div>
                            <div class="items mt-4">
                                <?php for($i=0; $i<4; $i++){?>
                                    <div class="item simple">
                                        <div class="ss-date">
                                            <div class="date bg-0<?= ($i%2) == 0 ? '4': '8'; ?>">
                                                <div class="d">04</div>
                                                <div class="m-y">09.2563</div>
                                            </div>
                                        </div>
                                        <div class="text-container">
                                            <p class="text fw-300">
                                                ช่างเทคนิค-สัญญาจ้าง (ประจำโครงการในกรุงเทพ)
                                            </p>
                                        </div>
                                        <div class="option-container">
                                            <a class="option" href="#">
                                                <img src="public/assets/app/images/icon/10.png" alt="Image Icon" />
                                            </a>
                                        </div>
                                    </div>
                                <?php }?>
                            </div>
                            <div class="btns text-right mt-2">
                                <a class="btn btn-action" href="#">
                                    <span>ดูทั้งหมด</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-demo.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
