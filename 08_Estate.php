<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>

    <style>
        .web-link {color:#4b326e; transition: color .2s;}
        .web-link > span {color: #000;}

        .ss-card.ss-card-01:hover .web-link {color:#fff;}
        .ss-card.ss-card-01:hover .web-link > span {color:#fff;}
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    <?php
        $breadcrumb = [
            [ 'url' => '#', 'display' => 'ข้อมูลนิคมฯ/ท่าเรือฯ/โรงงานฯ' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรม' ],
            [ 'url' => '#', 'display' => 'นิคมอุตสาหกรรมในประเทศไทย' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding bg-white">
        <div class="container">
            <h2 class="color-black" data-aos="fade-up" data-aos-delay="0">
                นิคมอุตสาหกรรมในประเทศไทย
            </h2>
            <h3 class="sm color-06 fw-400" data-aos="fade-up" data-aos-delay="150">
                เพิ่มขีดความสามารถของคุณและธุรกิจ 
            </h3>
            <h5 class="xs-no-br" data-aos="fade-up" data-aos-delay="300">
                ด้วยการติดตามกิจกรรมข่าวสาร และข้อมูลอัพเดทต่างๆ <br>
                เกี่ยวกับ กนอ.และนิคมอุตสาหกรรมในประเทศไทย 
            </h5>


            
        </div>
    </section>

    <section class="section-bpadding" style="background: linear-gradient(to bottom, #c5c5c5, #f9f9f9, #f9f9f9, #f9f9f9, #f9f9f9, #f9f9f9, transparent, transparent, transparent, transparent);">
        <div class="container">
            <h3 class="mt-5 color-02 fw-200">ตอบโจทย์ที่ใช่</h3>
            <h5 class="fw-100">ตอบสนองทุกความต้องการทางด้านธุรกิจของคุณ</h5>
            <div class="grids">
                <?php for($j=0; $j<9; $j++){?>
                    <div class="grid lg-25 md-50 sm-50">
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
                                    <a class="title h6 fw-600" href="#">
                                        นิคมอุตสาหกรรมที เอฟ ดี
                                    </a>

                                    <div class="d-flex fw-wrap jc-space-between mt-1">
                                        <h6 class="text-md fw-600">เนื้อที่ทั้งหมด</h6>
                                        <p class="text-md fw-200">302-1-20.70 ไร่</p>
                                    </div>

                                    <div class="d-flex fw-wrap jc-space-between mt-1">
                                        <h6 class="text-md fw-600">ที่ตั้ง</h6>
                                        <p class="text-md fw-200">ต.ท่าสะอ้าน อ.บางปะกง จ.ฉะเชิงเทรา</p>
                                    </div>

                                    <div class="grids mt-2">
                                        <div class="grid sm-25 mt-0">
                                            <h6 class="text-md fw-600">โทรศัพท์</h6>
                                        </div>
                                        <div class="grid sm-70 mt-0">
                                            <p class="text-md fw-200">: 0 2676 4031-6</p>
                                        </div>
                                    </div>

                                    <div class="grids">
                                        <div class="grid sm-25 mt-0">
                                            <h6 class="text-md fw-600">โทรสาร</h6>
                                        </div>
                                        <div class="grid sm-75 mt-0">
                                            <p class="text-md fw-200">: 0 2676 4038</p>
                                        </div>
                                    </div>

                                    <div class="grids">
                                        <div class="grid sm-25 mt-0">
                                            <h6 class="text-md fw-600">E-mail</h6>
                                        </div>
                                        <div class="grid sm-75 mt-0">
                                            <p class="text-md fw-200">: industrial@tfd-factory.com</p>
                                        </div>
                                    </div>

                                    <div class="grids">
                                        <div class="grid sm-25 mt-0">
                                            <h6 class="text-md fw-600 mt-0">Website</h6>
                                        </div>
                                        <div class="grid sm-75 mt-0">
                                            <a class="text-md fw-200 web-link"><span>:</span> www.tfd-factory.com</a>
                                        </div>
                                    </div>

                                    <div class="ss-tag fw-wrap">
                                        <div class="text fw-400">TAG :</div> 
                                        <div class="tags">
                                            <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                                            <a class="tag" href="#">กนอ.</a>
                                            <a class="tag" href="#">ชลบุรี</a>
                                            <a class="tag" href="#">ระบบสาธารณูปโภค</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?> 
            </div>
            <?php include('component/grid-footer.php'); ?>


        </div>
    </section>
    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
