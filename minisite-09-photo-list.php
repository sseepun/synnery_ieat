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
            'title' => 'คลังภาพ',
            'desc' => 'ติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทจต่างๆ <br> เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'คลังภาพ' ]
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
                                    <?php
                                        $cardType = 'Photo';
                                        include('component/minisite-card-preview.php');
                                    ?>
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
                                'bg' => 'public/assets/app/images/bg/minisite-02.jpg',
                                'structure' => [
                                    [ 
                                        'name' => 'ภาพกิจกรรมทั้งหมด', 'icon' => 'videos.svg', 'active' => true,
                                        'children' => [
                                            [ 'name' => 'กิจกรรมประชาสัมพันธ์' ],
                                            [ 'name' => 'ภายในหน่วยงาน' ]
                                        ]
                                    ],
                                    [ 
                                        'name' => 'วิดีทัศน์', 'icon' => 'video.svg',
                                        'children' => [
                                            [ 'name' => 'วิดีทัศน์ประชาสัมพันธ์' ],
                                            [ 'name' => 'การประชุม งานสัมนา' ],
                                        ]
                                    ],
                                ]
                            ];
                            include('component/category-tab-minisite.php');
                        ?>
                        <div class="ss-title full mt-4">
                            <span class="h3 fw-600 color-04">คลังภาพที่น่าสนใจ</span>
                        </div>
                        <div class="grids">
                            <?php for($j=0; $j<2; $j++){?>
                                <div class="grid lg-100 md-1-3 sm-50">
                                    <?php
                                        $cardType = 'Photo';
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
                                                <?php for($j=0; $j<10; $j++){?>
                                                    <div class="grid sm-100">
                                                        <?php
                                                            $cardType = 'Photo';
                                                            include('component/minisite-card-list.php');
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
                        <span class="h3 fw-600 color-04">คลังภาพที่เกี่ยวข้อง</span>
                    </div>
                    <div class="grids">
                        <?php for($j=0; $j<3; $j++){?>
                            <div class="grid md-1-3 sm-50">
                                <?php
                                    $cardType = 'Photo';
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
