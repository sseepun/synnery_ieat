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
            'title' => 'ลงนามในสัญญาจองเช่าที่ดินในนิคม
                <br> อุตสาหกรรมสงขลา (ระยะที่1)',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'คลังภาพ' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="content-04" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <div class="tab-container tab-container-01">
                <div class="content-header">
                    <div class="img-preview box-shadow">
                        <div class="wrapper">
                            <div class="slide-container p-0">
                                <div class="slides">
                                    <?php for($i=0; $i<10; $i++){?>
                                        <div class="slide">
                                            <div class="ss-img no-hover">
                                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/<?= sprintf('%02d', $i%7+1) ?>.jpg"></div>
                                                <div class="date">
                                                    <div class="d">0<?= $i+1 ?></div>
                                                    <div class="m-y">09.2563</div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="arrows"></div>
                            </div>
                        </div>
                    </div>
                    <div class="float-btns">
                        <a class="btn-back" href="#">
                            <div class="icon mr-2">
                                <em class="zmdi zmdi-chevron-left"></em>
                            </div>
                            ย้อนกลับ
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide-nav" data-aos="fade-up" data-aos-delay="0">
            <div class="slides">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <div class="img-fill fit" style="background-image:url('public/assets/app/images/content/<?= sprintf('%02d', $i%7+1) ?>.jpg');"></div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="content-08 section-bpadding pt-0">
        <div class="container">

            <div class="grids mt-4">
                <div class="grid lg-10 hide-tablet" data-aos="fade-up" data-aos-delay="0">
                    <div class="content-stats">
                        <div class="content-stat bcolor-sgray">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/read.svg" alt="Image Icon" />
                            </div>
                            <p class="fw-500">112</p>
                        </div>
                        <div class="content-stat bcolor-sgray">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/share.svg" alt="Image Icon" />
                            </div>
                            <p class="fw-500">20</p>
                        </div>
                    </div>
                    <div class="text-center mt-3">
                        <a class="btn-social-white fb" href="#">
                            <em class="zmdi zmdi-facebook"></em>
                        </a>
                    </div>
                    <div class="text-center mt-1">
                        <a class="btn-social-white tw" href="#">
                            <em class="zmdi zmdi-twitter"></em>
                        </a>
                    </div>
                    <div class="text-center mt-1">
                        <a class="btn-social-white ln" href="#">
                            <em class="fab fa-line"></em>
                        </a>
                    </div>
                    <div class="text-center mt-1">
                        <a class="btn-social-white sh" href="#">
                            <em class="fas fa-link"></em>
                        </a>
                    </div>
                </div>

                <div class="grid lg-75 sm-100" data-aos="fade-up" data-aos-delay="150">
                    <h3 class="sm color-04">
                        ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G ในนิคมฯ
                    </h3>
                    <div>
                        <h3 class="xs fw-200 mt-4 pt-1" style="max-width:44rem;">
                            บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                            <span class="fw-600 color-04">
                                รองรับ Smart City เตรียมวางระบบ 5 G
                            </span>
                            ครอบคลุมพื้นที่นิคมอุตสาหกรรรม 14 แห่ง 
                            และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67
                        </h3>
                        <p class="md mt-3">
                            น.ส.สมจิณณ์ พิลึก ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) เปิดเผยว่า  
                            กนอ.มีแนวคิดจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน เพื่อเพิ่มความ
                            ปลอดภัยต่อชีวิตและทรัพย์สิน รวมทั้งยังเป็นการเฝ้าระวังอุบัติเหตุที่อาจจะเกิดขึ้น 
                            และจัดเตรียมระบบสาธารณูปโภค สิ่งอำนวยความสะดวกและการบริการให้กับผู้ประกอบ
                            การในนิคมอุตสาหกรรม เพื่อให้สามารถใช้ประโยชน์ร่วมกันได้
                        </p>
                        <h3 class="xs fw-500 color-04 xs-no-br mt-4 pt-2">
                            นอกจากนี้ ยังเป็นการรองรับการขยายตัว <br>
                            ของอุตสาหกรรมโทรคมนาคมที่สูงขึ้นในอนาคต 
                        </h3>
                        <p class="md mt-3">
                            โดยล่าสุดในการประชุมคณะกรรมการ กนอ.(บอร์ด กนอ.) ที่มีนายนรินทร์ กัลยาณมิตร ประธานบอร์ด 
                            กนอ.เป็นประธานการประชุม มีมติเห็นชอบในหลักการของแนวทาง
                            ดังกล่าวตามที่ กนอ.เสนอ โดยให้เริ่มศึกษาความเป็นไปได้ของการลงทุนฯ ในปี 2564 
                            และคาดว่าหากผลการศึกษาแล้วเสร็จจะสามารถเริ่มดำเนินโครงการวางท่อร้อยสาย
                            สื่อสารใต้ดินในนิคมอุตสาหกรรมได้ในปี 2567 โดยจะเป็นการร่วมทุนระหว่างรัฐและเอกชน (PPP) 
                            หรือ พีพีพ
                        </p>
                    </div>
                    <div class="clear-both"></div>
                    
                    <div class="mt-4 pt-2">
                        <div class="shortcode-container">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/icon-code.svg" alt="Icon" />
                            </div>
                            <textarea data-copy="0" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                            <a class="btn-code-copy color-01 h-color-04" data-copy="0" href="#">
                                [คัดลอก]
                            </a>
                        </div>
                    </div>
                    
                    <div class="btns text-center mt-4 pt-2">
                        <a class="btn btn-action" href="#">
                            <span>คลังภาพต่อไป</span>
                        </a>
                    </div>
                </div>

                <div class="grid lg-15 hide-tablet" data-aos="fade-up" data-aos-delay="300">
                    <div class="btns mt-0">
                        <a class="btn btn-action" href="#">
                            <span>ดาวน์โหลดภาพ</span>
                        </a>
                    </div>
                    <div class="ss-tag">
                        <div class="text d-block">TAG :</div>
                    </div>
                    <div class="ss-tag">
                        <div class="tags">
                            <a class="tag" href="#">นิคมอุตสาหกรรม</a>
                            <a class="tag" href="#">5G</a>
                            <a class="tag" href="#">เมืองอุตสาหกรรมเชิงเนิเวศ</a>
                            <a class="tag" href="#">ประเทศไทย</a>
                            <a class="tag" href="#">พื้นที่อีอีซี</a>
                        </div>
                    </div>
                </div>
            </div>    

        </div>
    </section>

    <section class="section-padding bg-fgray">
        <div class="container">
            <div class="grids">
                <div class="grid lg-10 sm-100 mt-0"></div>
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
                <div class="grid lg-15 sm-100 mt-0"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-minisite.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
