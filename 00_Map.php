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
            [ 'url' => '#', 'display' => 'ข้อมูลนิคมฯ/ท่าเรือฯ/โรงงานฯ' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรม' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรมในประเทศไทย (แผนที่)' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="content-05 section-bpadding">
        <div class="img-bg adaptive bg-gradient-gray-02"></div>
        <div class="container">
            <div class="tab-container tab-container-03">
                <div class="tab-wrapper">
                    <div class="tabs bcolor-sgray" data-aos="fade-up" data-aos-delay="0">
                        <div class="ss-box-shadow"></div>
                        <a class="tab color-black h-color-04 active" data-tab="0" href="#">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/tab-13.png" alt="Icon">
                            </div>
                            <h6>นิคมอุตสาหกรรม</h6>
                        </a>
                        <a class="tab color-black h-color-04" data-tab="1" href="#">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/tab-13.png" alt="Icon">
                            </div>
                            <h6>โรงงานอุตสาหกรรม</h6>
                        </a>
                    </div>
                </div>
                <div class="tab-contents" data-aos="fade-up" data-aos-delay="150">
                    <?php foreach(['นิคมอุตสาหกรรม', 'โรงงานอุตสาหกรรม'] as $i=>$d){?>
                        <div class="tab-content <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>">

                            <h2 class="color-black">
                                <?= $d ?>ในประเทศไทย (แผนที่)
                            </h2>
                            <h3 class="sm color-06 fw-400">
                                เพิ่มขีดความสามารถของคุณและธุรกิจ
                            </h3>
                            <h5 class="xs-no-br">
                                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย 
                            </h5>
                            
                            <div class="py-2 my-4">
                                <?php include('component/search-panel.php'); ?>
                            </div>

                            <div class="grids">

                                <div class="grid xl-50 lg-60 sm-100">
                                    <h3 class="color-02 fw-300">
                                        ตอบโจทย์ที่ใช่...
                                    </h3>
                                    <h5 class="fw-300">
                                        ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ
                                    </h5>
                                    <div class="grid-footer jc-start mt-1">
                                        <div class="block width-auto">
                                            <div class="text-wrapper">
                                                จำนวนทั้งหมด 
                                                <span class="text-lg fw-600 color-05">1000</span> 
                                                รายการ 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grids">
                                        <?php for($j=0; $j<6; $j++){?>
                                            <div class="grid sm-50">
                                                <div class="ss-card ss-card-01">
                                                    <a class="ss-img" href="#">
                                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                                        <div class="hover-container">
                                                            <div class="icon">
                                                                <img src="public/assets/app/images/icon/06.png" alt="Icon" />
                                                            </div>
                                                        </div>
                                                    </a>
                                                    <div class="text-container">
                                                        <div class="ss-box-shadow"></div>
                                                        <div class="text-wrapper">
                                                            <a class="title h5 fw-400" href="#">
                                                                นิคมอุตสาหกรรมที เอฟ ดี
                                                            </a>
                                                            <table class="table table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>เนื้อที่ทั้งหมด</td>
                                                                        <td class="text-right">
                                                                            302-1-20.70 ไร่
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>ที่ตั้ง</td>
                                                                        <td class="text-right">
                                                                            ต.ท่าสะอ้าน อ.บางปะกง จ.ฉะเชิงเทรา
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <table class="table table-sm">
                                                                <tbody>
                                                                    <tr>
                                                                        <td>โทรศัพท์</td>
                                                                        <td><span class="mx-1">:</span></td>
                                                                        <td>0 2676 4031-6</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>โทรสาร</td>
                                                                        <td><span class="mx-1">:</span></td>
                                                                        <td>0 2676 4038</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>E-mail</td>
                                                                        <td><span class="mx-1">:</span></td>
                                                                        <td>industrial@tfd-factory.com</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Website</td>
                                                                        <td><span class="mx-1">:</span></td>
                                                                        <td>www.tfd-factory.com</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php }?> 
                                    </div>
                                    <div class="grid-footer jc-center mt-4">
                                        <div class="block">
                                            <div class="pagination">
                                                <div class="wrapper">
                                                    <!-- <a href="#" class="page-btn page-first disabled">
                                                        หน้าแรก
                                                    </a> -->
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
                                                    <!-- <a href="#" class="page-btn page-last">
                                                        หน้าสุดท้าย
                                                    </a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid xl-50 lg-40 sm-100">
                                    <div class="map-container">
                                        <div class="map-wrapper">
                                            <div class="img-fill fit lazy-bg" data-src="public/assets/app/images/bg/map-3.jpg"></div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>
    
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
