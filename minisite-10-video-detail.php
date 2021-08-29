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
            'title' => 'SMEs- iTC Center
                <br> การให้บริการ ศูนย์ SMEs-ITC',
            'structure' => [
                [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                [ 'url' => '#', 'display' => 'วิดีทัศน์' ]
            ]
        ];
        include('component/breadcrumb-minisite.php');
    ?>

    <section class="content-08 section-bpadding">
        <div class="container">

            <div class="content-header" data-aos="fade-up" data-aos-delay="300">
                <div class="img-preview box-shadow">
                    <div class="wrapper">
                        <a class="ss-img no-hover" href="#">
                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/content/07.jpg"></div>
                            <div class="hover-container op-100 bg-transparent">
                                <div class="icon">
                                    <img src="public/assets/app/images/icon/play.svg" alt="Icon" />
                                </div>
                            </div>
                            <div class="date bg-04">
                                <div class="d">0<?= $i+1 ?></div>
                                <div class="m-y">09.2563</div>
                            </div>
                        </a>
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
                        <div class="pt-3">
                            <img class="content-img-float right" src="public/assets/app/images/bg/18.jpg" alt="Image" />
                            <h4 class="xs-no-br">
                                โดยเฉพาะในกลุ่มอุตสาหกรรม <br>
                                เป้าหมายเช่น อุตสาหกรรมดิจิทัล เพื่อพัฒนาระบบ 5G <br>
                                และนวัตกรรมด้านดิจิทัลสมัยใหม่
                            </h4>
                            <p class="md mt-3">
                                โดยอุตสาหกรรมดิจิทัล เป็นหนึ่งในกลุ่มอุตสาหกรรมที่ใช้เทคโนโลยีขั้นสูง และเป็นอุตสาหกรรมเป้าหมาย
                                ของการพัฒนาในพื้นที่อีอีซี ซึ่งนักลงทุนต่างชาติโดยเฉพาะนักลงทุนจีนได้ย้ายฐานการผลิตมายังภูมิภาค
                                อาเซียนจนยอดการลงทุนโดยตรงจากจากต่างประเทศ (Foreign Direct Investment : FDI) เพิ่มมากขึ้น
                                ถึงแม้ว่าในช่วงไตรมาส 2 จะชะลอตัวลงเล็กน้อยจากสถานการณ์โควิด-19 แต่หลังจากที่รัฐบาลได้ประกาศ
                                ผ่อนปรนมาตรการต่างๆ ทำให้บรรยากาศการลงทุนเริ่มกลับมาคึกคักอีกครั้ง
                            </p>
                        </div>
                    </div>
                    <div class="clear-both"></div>
                    
                    <div class="mt-3">
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
                            <span>วิดีทัศน์ต่อไป</span>
                        </a>
                    </div>
                </div>

                <div class="grid lg-15 hide-tablet" data-aos="fade-up" data-aos-delay="300">
                    <div class="btns mt-0">
                        <a class="btn btn-action" href="#">
                            <span>ดาวน์โหลดวิดีโอ</span>
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
                        <span class="h3 fw-600 color-04">วิดีทัศน์ที่เกี่ยวข้อง</span>
                    </div>
                    <div class="grids">
                        <?php for($j=0; $j<3; $j++){?>
                            <div class="grid md-1-3 sm-50">
                                <?php
                                    $cardType = 'Video';
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
