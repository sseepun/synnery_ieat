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
            [ 'url' => '#', 'display' => 'RSS FEED' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/09.jpg"></div>
        <div class="container">
            <h2 class="d-flex ai-center" data-aos="fade-up" data-aos-delay="0">
                <img class="mr-2" src="public/assets/app/images/icon/rss.jpg" alt="Icon" style="width:2rem; height:2rem;" /> 
                RSS Feed
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆเกี่ยวกับ กนอ.และ <br>
                นิคมอุตสาหกรรมในประเทศไทย 
            </h5>

            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="grids">

                <div class="grid xl-30 lg-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="600">
                    <div class="grids">
                        <?php for($i=0; $i<6; $i++){?>
                            <div class="grid lg-100 sm-50">
                                <div class="ss-card ss-card-01 <?php if($i>=2)echo 'text-only'; ?>">
                                    <?php if($i<2){?>
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
                                    <?php }?>
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
                </div>

                <div class="grid xl-70 lg-2-3 sm-100" data-aos="fade-up" data-aos-delay="750">
                    <div class="ss-box">
                        <div class="grids">
                            <?php for($i=0; $i<10; $i++){?>
                                <div class="grid sm-100 <?php if($i==0)echo 'mt-0'; ?>">
                                    <div class="ss-card ss-card-06">
                                        <div class="card-tag">
                                            <img src="public/assets/app/images/icon/rss-2.jpg" alt="Icon" />
                                        </div>
                                        <div class="text-container">
                                            <a class="title h5 fw-600 h-color-05" href="#">
                                                บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 นิคมฯ
                                            </a>
                                            <p class="fw-500">11.09.2563</p>
                                            <ul class="ss-list my-0">
                                                <li class="p desc py-0 fw-300">
                                                    บอร์ด กนอ.เห็นชอบในหลักการแนวทางจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดินปรับภูมิทัศน์พื้นที่นิคมอุตสาหกรรม 
                                                    สอดรับการเป็นเมืองอัจฉริยะ (Smart City) พร้อมวางระบบ 5G บอร์ด กนอ. 
                                                    เห็นชอบในหลักการแนวทางจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดินปรับภูมิทัศน์พื้นที่นิคมอุตสาหกรรม 
                                                    สอดรับการเป็นเมืองอัจฉริยะ (Smart City) พร้อมวางระบบ 5G 
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <?php include('component/grid-footer.php'); ?>
                </div>

            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
