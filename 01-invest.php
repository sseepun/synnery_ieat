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
            [ 'url' => '#', 'display' => 'ข่าวสารการลงทุน' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/07.jpg"></div>
        <div class="container">
            <h3 class="h2 color-white" data-aos="fade-up" data-aos-delay="0">
                ข่าวสารการลงทุน
            </h3>
            <h4 class="h3 sm color-white fw-300 xs-hide" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ
            </h4>
            <h5 class="color-white xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย  
            </h5>

            <div data-aos="fade-up" data-aos-delay="450">
                <?php include('component/grid-header.php'); ?>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="600">
                        <?php
                            $cateActive = 1;
                            $cateChildren = true;
                            include('component/category-tab.php');
                        ?>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="750">
                        <div class="grids">
                            <div class="grid sm-100">

                                <div class="ss-card ss-card-03">
                                    <a class="ss-img" href="#">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                        <div class="hover-container">
                                            <div class="icon">
                                                <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                            </div>
                                        </div>
                                        <div class="date bg-05">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                        <div class="tag-star">
                                            <img src="public/assets/app/images/icon/star.png" alt="Icon" />
                                        </div>
                                    </a>
                                    <div class="text-container">
                                        <div class="wrapper">
                                            <div class="ss-box-shadow fade-right"></div>
                                            <div class="text-wrapper">
                                                <a class="title h4" href="#">
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
                                                            <img src="public/assets/app/images/icon/07.png" alt="Icon" />
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
                                                        <a class="tag" href="#">5G</a>
                                                        <a class="tag" href="#">สายสื่อสาร</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="grid sm-100 mt-0">
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
                                                        <div class="ss-stat">
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <img src="public/assets/app/images/icon/07.png" alt="Icon" />
                                                                </div> 112
                                                            </div>
                                                            <div class="stat">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-share"></em>
                                                                </div> 20
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?> 

                                </div>
                            </div>
                        </div>
                        <?php include('component/grid-footer.php'); ?>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
