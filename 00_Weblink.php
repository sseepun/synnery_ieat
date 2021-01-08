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
            <h3 class="h2" data-aos="fade-up" data-aos-delay="0">
                หน่วยงานที่เกี่ยวข้อง
            </h3>
            <h4 class="h3 sm color-06 fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ 
            </h4>
            <h5 class="xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย 
            </h5>
            <div class="mt-5" data-aos="fade-up" data-aos-delay="450">
                <div class="ss-box-header">
                    <div class="ss-box-bg"></div>
                    <div class="header bg-01 color-white">
                        <h3 class="sm fw-500">หน่วยงานภายใน</h3>
                    </div>
                    <div class="body ">

                        <div class="grids">
                            <?php for($j=0; $j<9; $j++){?>
                                <div class="grid xl-50 lg-100 md-50 sm-100 mt-2 mb-2 pb-4">
                                    <a class="d-flex jc-space-between ai-center color-black" href="#">
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
                                                    <span class="fw-600 color-black h-color-04">
                                                        คลิกที่นี่
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                        
                        <div class="grid-footer mt-3">
                            <div class="block">
                                <div class="text-wrapper">
                                    จำนวนทั้งหมด 
                                    <span class="text-lg fw-600 color-05">1000</span> 
                                    รายการ 
                                </div>
                            </div>
                            <div class="block">
                                <div class="pagination">
                                    <div class="wrapper">
                                        <a href="#" class="page-btn page-first disabled">
                                            หน้าแรก
                                        </a>
                                        <a href="#" class="page-btn page-prev disabled">
                                            <em class="zmdi zmdi-chevron-left"></em>
                                        </a>
                                        <a href="#" class="page-btn active">01</a>
                                        <a href="#" class="page-btn">02</a>
                                        <a href="#" class="page-btn">03</a>
                                        <a href="#" class="page-btn">04</a>
                                        <a href="#" class="page-btn">05</a>
                                        <a href="#" class="page-btn page-next">
                                            <em class="zmdi zmdi-chevron-right"></em>
                                        </a>
                                        <a href="#" class="page-btn page-last">
                                            หน้าสุดท้าย
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="block">
                                <div class="text-wrapper">
                                    แสดงผลต่อหน้า 
                                    <div class="select-wrapper">
                                        <select class="pp" title="Per Page">
                                            <option value="10">10</option>
                                            <option value="25">25</option>
                                            <option value="50">50</option>
                                            <option value="75">75</option>
                                            <option value="100">100</option>
                                        </select>
                                    </div> 
                                    รายการ
                                </div>
                            </div>
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
