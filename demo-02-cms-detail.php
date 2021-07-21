<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <link rel="stylesheet" href="public/assets/app/css/style-demo.css" />
</head>
<body class="loading bg-11">
    <?php include_once('include/topnav-demo.php'); ?>

    <section class="content-04 style-demo section-bpadding section-bg-hero pb-2">
        <div class="bg-hero lg lazy-bg" data-src="public/assets/app/images/hero/16.png"></div>
        <div class="container">
            <h6 class="h1 color-white text-center" data-aos="fade-up" data-aos-delay="0">
                ลงนามในสัญญาจองเช่าที่ดินในนิคม <br />
                อุตสาหกรรมสงขลา (ระยะที่ 1)
            </h6>
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="150">
                <?php
                    $breadcrumbClass = 'style-demo';
                    $breadcrumb = [
                        [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                        [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
                    ];
                    include('component/breadcrumb-demo.php');
                ?>
            </div>
            <div class="tab-container tab-container-01">
                <div class="grids mt-3">

                    <div class="grid sm-100" data-aos="fade-up" data-aos-delay="300">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="slide position-relative">
                                        <div class="ss-img">
                                            <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg"></div>
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
            </div>
        </div>
        <div class="slide-nav" data-aos="fade-up" data-aos-delay="450">
            <div class="slides">
                <?php for($i=0; $i<10; $i++){?>
                    <div class="slide">
                        <div class="wrapper">
                            <div class="img-wrapper">
                                <div class="img-fill fit" style="background-image:url('public/assets/app/images/bg/<?= sprintf('%02d', $i+3) ?>.jpg');"></div>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>

    <section class="content-08 section-padding pt-0">
        <div class="container">
            <div class="grids">

                <div class="grid lg-10 hide-mobile" data-aos="fade-up" data-aos-delay="0">
                    <div class="d-flex ai-center jc-center border bcolor-sgray px-1 py-1">
                        <img class="mr-1" src="public/assets/app/images/icon/08.png" alt="Image Icon" />
                        <p class="fw-500 ml-2">112</p>
                    </div>
                    <div class="text-center mt-3">
                        <a class="btn-icon btn-hex btn-icon-lg bg-black color-04 fb" href="#">
                            <em class="fab fa-facebook-f"></em>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="btn-icon btn-hex btn-icon-lg bg-black color-04 tw" href="#">
                            <em class="fab fa-twitter"></em>
                        </a>
                    </div>
                    <div class="text-center">
                        <a class="btn-icon btn-hex btn-icon-lg bg-black color-04 ln" href="#">
                            <em class="fab fa-line"></em>
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
                            <img class="content-img-float left" src="public/assets/app/images/bg/18.jpg" alt="Image" />
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
                    
                    <div class="content-title mt-5">
                        <h6 class="h5 fw-500">
                            วิดิโอที่เกี่ยวข้อง
                        </h6>
                    </div>
                    <p class="md fw-400 color-04">การส่งเสริมนโยบายเชิงนิเวศในนิคมอุตสาหกรรม</p>
                    <div class="video-container my-2">
                        <div class="video-wrapper">
                            <video src="public/assets/app/video/01.mp4" controls></video>
                        </div>
                    </div>

                    <div class="no-border-bottom">
                        <div class="shortcode-container my-3">
                            <div class="icon">
                                <img src="public/assets/app/images/icon/code.png" alt="Icon" />
                            </div>
                            <textarea data-copy="0" title="Copy Area">Temporary code test temporary code test temporary code test</textarea>
                            <a class="btn-code-copy color-01 h-color-04" data-copy="0" href="#">
                                [คัดลอก]
                            </a>
                        </div>
                    </div>
                    
                    <div class="content-title mt-5">
                        <h6 class="h5 fw-500">
                            เอกสารที่เกี่ยวข้อง
                        </h6>
                    </div>
                    <div class="gallery-grids mt-2">
                        <?php for($i=0; $i<4; $i++){?>
                            <div class="grid xl-50 sm-100 mt-2">
                                <table class="table table-download bg-fgray">
                                    <tbody>
                                        <tr>
                                            <td class="px-3 py-2">
                                                <div class="file-icon">
                                                    <img src="public/assets/app/images/file/pdf.png" alt="Image Icon" />
                                                </div>
                                            </td>
                                            <td class="pl-0 pr-2 py-2 text-left ws-normal">
                                                <p class="sm">
                                                    รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ. <br>
                                                    ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)
                                                </p>
                                                <p class="sm mt-1">
                                                    ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                    ดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                </p>
                                                <div class="mt-1">
                                                    <a class="btn-download mr-2" href="#">
                                                        <span class="xs-hide">ดาวน์โหลด</span>
                                                        <span class="icon-container">
                                                            <img src="public/assets/app/images/icon/arrow-down.png" alt="Image Icon" />
                                                        </span>
                                                    </a>
                                                    <a class="btn-download" href="#">
                                                        <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                                        <span class="icon-container">
                                                            <img src="public/assets/app/images/icon/alert.svg" alt="Image Icon" />
                                                        </span>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php }?>
                    </div>
                    <div class="btns text-center">
                        <a class="btn btn-action" href="#">
                            <span>บทความต่อไป</span>
                        </a>
                    </div>
                </div>

                <div class="grid lg-15 hide-mobile" data-aos="fade-up" data-aos-delay="300">
                    <div class="btns mt-0">
                        <a class="btn btn-action" href="#">
                            <span>ดาวน์โหลดเอกสาร</span>
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

    <?php include_once('include/footer-demo.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
