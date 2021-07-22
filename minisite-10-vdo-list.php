<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading minisite">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-01.png',
            'title' => 'ข่าวประชาสัมพันธ์',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-bpadding section-bg-hero">
        <div class="bg-hero lg lazy-bg" data-src="public/assets/app/images/hero/16.png"></div>
        <div class="container">
            <h6 class="h1 color-white text-center" data-aos="fade-up" data-aos-delay="0">
                ข่าวประชาสัมพันธ์
            </h6>
            <p class="h4 fw-200 color-white xs-hide text-center" data-aos="fade-up" data-aos-delay="150">
                ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย
            </p>
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="300">
                <?php
                    $breadcrumbClass = 'style-demo';
                    $breadcrumb = [
                        [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                        [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
                    ];
                    include('component/breadcrumb-demo.php');
                ?>
            </div>

            <div class="grids" data-aos="fade-up" data-aos-delay="0">
                <div class="grid xl-80 lg-75 sm-100">
                    <div class="ss-card ss-card-03">
                        <a class="ss-img" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/35.jpg"></div>
                            <div class="hover-container">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                </div>
                            </div>
                            <div class="date bg-05">
                                <div class="d">04</div>
                                <div class="m-y">09.2563</div>
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
                                            <a class="tag" href="#">5G</a>
                                            <a class="tag" href="#">สายสื่อสาร</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-cards" style="transform:translateX(3.25rem);">
                                    <a class="btn-icon btn-icon-01 bg-04 btn-hex-03" href="#">
                                        <em class="zmdi zmdi-chevron-right"></em>
                                    </a>
                                    <a class="btn-icon btn-icon-01 bg-04 btn-hex-03" href="#">
                                        <em class="zmdi zmdi-chevron-left"></em>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">
                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="0">
                        <?php include('component/category-tab-demo.php'); ?>
                    </div>
                    <div class="grid xl-80 lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="tab-contents">
                            <?php for($i=0; $i<4; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="grids">
                                        <?php include('component/grid-header-demo.php'); ?>
                                        <div class="grid sm-100 mt-0">
                                            <div class="grids">

                                                <?php for($j=0; $j<9; $j++){?>
                                                    <div class="grid md-1-3 sm-50">
                                                        <div class="ss-card ss-card-01">
                                                            <a class="ss-img" href="#">
                                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/0<?= ($i+$j)%6+1 ?>.jpg"></div>
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
                                                                                <img class="img-inner" src="public/assets/app/images/icon/read.svg" alt="Image Icon" />
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
                                                <?php }?> 

                                            </div>
                                        </div>
                                    </div>
                                    <?php include('component/grid-footer.php'); ?>
                                </div>
                            <?php }?>
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
