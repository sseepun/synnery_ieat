<!DOCTYPE html>
<html lang="th">
<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
    <style>
        /* Breadcrumb */
        .breadcrumb-01{
            position:relative; width: auto; margin:0 auto;
        }
        
        .title-mini {
            position: relative; overflow:hidden;
        }
        .title-mini .line{
            position:absolute; top: calc(50% - .0625rem / 2);
            width:100%; height:.0625rem; margin-left: .5rem;
        }
        table.table-download td{
            vertical-align:top;
        }
        table.table-download .file-icon{
            margin: 0 auto;
        }
        .slide-container .arrows{
            left: -2rem; right: -2rem;
        }
        .content-04 .slide-container .arrows button{
            background: #000;
            color: #fff;
        }
    </style>
</head>
<body class="loading">
    <?php include_once('include/topnav.php'); ?>

    

    <section class="content-04 section-bpadding section-bg-hero">
        <div class="bg-hero lazy-bg" data-src="public/assets/app/images/hero/16.jpg"></div>
        <div class="container">
            <h3 class="h2 color-white text-center" data-aos="fade-up" data-aos-delay="0">
                ลงนามในสัญญาจองเช่าที่ดินในนิคม <br />
                อุตสาหกรรมสงขลา (ระยะที่ 1)
            </h3>
            <div class="d-flex jc-center" data-aos="fade-up" data-aos-delay="150">
                <?php
                    $breadcrumb = [
                        [ 'url' => '#', 'display' => 'กนอ.อัพเดท' ],
                        [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
                    ];
                    include('component/breadcrumb.php');
                ?>
            </div>
            <div class="tab-container tab-container-01">
                <div class="grids mt-3">

                    <div class="grid sm-100" data-aos="fade-up" data-aos-delay="300">
                        <div class="slide-container">
                            <div class="slides">
                                <?php for($i=0; $i<10; $i++){?>
                                    <div class="slide position-relative">
                                        <div class="ss-img horizontal">
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

    <section class="section-padding">
        <div class="container">
            <div class="tab-container tab-container-01">
                <div class="gallery-grids">
                    <div class="grid sm-100 mt-0">
                        <h3 class="sm color-04" data-aos="fade-up" data-aos-delay="0">
                            ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G ในนิคมฯ
                        </h3>

                        <div data-aos="fade-up" data-aos-delay="0">
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
                                <img class="content-img-float" style="float:left; margin:0 3rem 1.5rem 0;" src="public/assets/app/images/bg/18.jpg" alt="Image" />

                                <h4 class="xs-no-br mt-4">
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
                        
                        <div class="title-mini mt-5">
                            <p class="md fw-400">
                                วิดิโอที่เกี่ยวข้อง
                                <span class="line bg-07"></span>
                            </p>
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

                         
                        <div class="title-mini mt-5">
                            <p class="md fw-400">
                                เอกสารที่เกี่ยวข้อง
                                <span class="line bg-07"></span>
                            </p>
                        </div>

                        <div class="gallery-grids mt-2">
                            <?php for($i=0; $i<4; $i++){?>

                                <div class="grid xl-50 sm-100 mt-2">
                                    <table class="table table-download bg-sgray">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="file-icon">
                                                        <img src="public/assets/app/images/icon/pdf.png" alt="Icon" />
                                                    </div>
                                                </td>
                                                <td class="pr-3 pl-2 text-left">
                                                    รายงานผลการดำเนินงานภายใต้แผนปฏิบัติการ กนอ. <br>
                                                    ปีงบประมาณ 2563 ประจำไตรมาส 2/2563(ตุลาคม 2562 – มีนาคม 2563)<br>
                                                    ขนาด <span class="fw-600 mr-3">1.6 Mb.</span>
                                                    ดาวโหลด <span class="fw-600">23 ครั้ง</span>
                                                    <div class="mt-1">
                                                        <a class="btn-download mr-2" href="#">
                                                            <span class="xs-hide">ดาวน์โหลด</span>
                                                            <em class="zmdi zmdi-arrow-right"></em>
                                                        </a>
                                                        <a class="btn-download" href="#">
                                                            <span class="xs-hide">แจ้งไฟล์เสีย</span>
                                                            <em class="zmdi zmdi-alert-circle-o" style="transform:none;"></em>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            <?php }?>
                            
                            <div class="btns text-center">
                                <a class="btn btn-action" href="#">
                                    <span>บทความต่อไป</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="mt-4 client-01 img-fill" style="background-image:url('public/assets/app/images/bg/15.jpg');">
        <div class="container">
            <h2 class="d-none">Client 01</h2>
            <h3 class="d-none">Client 01 Description</h3>
            <div class="slide-container">
                <div class="slides">
                    <?php
                        for($j=0; $j<2; $j++){
                            foreach([
                                'สำนักงานส่งเสริมวิสาหกิจ<br>ขนาดกลางและขนาดย่อม(สสว.)',
                                'สำนักงานคณะกรรมการ<br>ข้อมูลข่าวสารของราชการ',
                                'สำนักงานคณะกรรมการพัฒนา<br>ระบบราชการ',
                                'ฐานข้อมูลหน่วยงานของรัฐ',
                                'กระทรวงอุตสาหกรรม',
                                'กรมส่งเสริมอุตสาหกรรม'
                            ] as $i=>$d){
                    ?>
                        <div class="slide">
                            <a class="wrapper" href="#">
                                <div class="img-container">
                                    <div class="img-wrapper">
                                        <img src="public/assets/app/images/client/0<?= $i+1 ?>.png" alt="Client" />
                                    </div>
                                </div>
                                <p><?= $d ?></p>
                            </a>
                        </div>
                    <?php }}?>
                </div>
                <div class="arrows"></div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
