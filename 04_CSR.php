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
            [ 'url' => '#', 'display' => 'รายงานความยั่งยืน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/06.jpg"></div>
        <div class="container">
            <h2 data-aos="fade-up" data-aos-delay="0">
                รายงานความยั่งยืน
            </h2>
            <h3 class="fw-400" data-aos="fade-up" data-aos-delay="150">
                <span class="text-sm">เพิ่มขีดความสามารถของคุณและธุรกิจ</span>
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย
            </h5>

            <div class="mt-5" data-aos="fade-up" data-aos-delay="450">
                <div class="grids">
                    <?php for($j=0; $j<9; $j++){?>
                        <div class="grid md-1-3 sm-50">
                            <div class="ss-card ss-card-01">
                                <a class="ss-img" href="#">
                                    <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
                <?php include('component/grid-footer.php'); ?>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
