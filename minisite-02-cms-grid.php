<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-minisite.css" />
</head>
<body class="loading">
    <?php include_once('include/topnav-minisite.php'); ?>
    <?php
        $breadcrumb = [
            'bg' => 'public/assets/app/images/bg/breadcrumb-minisite-01.png',
            'title' => 'ข่าวประชาสัมพันธ์',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="section-padding">
        <div class="container">

            <div class="grids" data-aos="fade-up" data-aos-delay="0">
                <div class="grid xl-80 lg-75 sm-100 mt-0">
                    <div class="slide-container slide-container-01">
                        <div class="slides">
                            <?php for($j=0; $j<4; $j++){?>
                                <div class="slide">
                                <div class="ss-card ss-card-03">
                                        <a class="ss-img" href="#">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/35.jpg"></div>
                                            <div class="hover-container">
                                                <div class="icon">
                                                    <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                </div>
                                            </div>
                                            <div class="date bg-04">
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
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                        <div class="arrows">
                            <div class="wrapper">
                                <a class="arrow bg-04 color-white btn-hex-03" href="#">
                                    <em class="zmdi zmdi-chevron-right"></em>
                                </a>
                                <a class="arrow bg-04 color-white btn-hex-03" href="#">
                                    <em class="zmdi zmdi-chevron-left"></em>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-container">
                <div class="grids">
                    <div class="grid lg-25 sm-100" data-aos="fade-up" data-aos-delay="0">
                        <?php 
                            $categoryTab = [
                                'bg' => 'public/assets/app/images/bg/minisite-01.jpg',
                                'structure' => [
                                    [ 'name' => 'ข่าวสารประชาสัมพันธ์', 'icon' => 'globe.svg', 'active' => true ],
                                    [ 'name' => 'ข่าวสารการลงทุน', 'icon' => 'money.svg' ],
                                    [ 'name' => 'ประกาศจัดซื้อจัดจ้าง', 'icon' => 'paper.svg' ],
                                    [ 'name' => 'ร่วมงานกับเรา', 'icon' => 'case.svg' ],
                                ]
                            ];
                            include('component/category-tab-minisite.php');
                        ?>
                        <div class="ss-title full mt-4">
                            <span class="h3 fw-600 color-04">ข่าวที่น่าสนใจ</span>
                        </div>
                        <div class="grids">
                            <?php for($j=0; $j<2; $j++){?>
                                <div class="grid lg-100 md-1-3 sm-50">
                                    <?php
                                        $cardType = 'CMS';
                                        include('component/minisite-card-grid.php');
                                    ?>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                    <div class="grid lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                        <div class="tab-contents">
                            <?php for($i=0; $i<4; $i++){?>
                                <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">
                                    <div class="grids">
                                        <?php include('component/grid-header-minisite.php'); ?>
                                        <div class="grid sm-100 mt-0">
                                            <div class="grids">
                                                <?php for($j=0; $j<12; $j++){?>
                                                    <div class="grid md-1-3 sm-50">
                                                        <?php
                                                            $cardType = 'CMS';
                                                            include('component/minisite-card-grid.php');
                                                        ?>
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

    <section class="section-padding bg-fgray">
        <div class="container">
            <div class="grids">
                <div class="grid lg-25 sm-100 mt-0"></div>
                <div class="grid lg-75 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
                    <div class="ss-title">
                        <span class="h3 fw-600 color-04">ข่าวที่เกี่ยวข้อง</span>
                    </div>
                    <div class="grids">
                        <?php for($j=0; $j<3; $j++){?>
                            <div class="grid md-1-3 sm-50">
                                <?php
                                    $cardType = 'CMS';
                                    include('component/minisite-card-grid.php');
                                ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
