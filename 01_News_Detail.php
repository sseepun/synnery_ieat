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
            [ 'url' => '#', 'display' => 'ย้อนกลับไปที่หน้ารวมข่าว ' ],
        ];
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding">
        <div class="container">
            <div class="grids">
                <div class="grid xl-20 lg-25 sm-100"></div>
                <div class="grid xl-80 lg-75 sm-100 mt-0">
                    <h5 class="h3 text-center sm xs-no-br" data-aos="fade-up" data-aos-delay="0">
                        ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน 
                        <br> วางระบบ 5G ในนิคมฯ
                    </h5>
                </div>
            </div>

            <div class="tab-container tab-container-01">
                <div class="grids">

                    <div class="grid xl-20 lg-25 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <?php
                            $cateActive = 0;
                            $cateChildren = true;
                            include('component/category-tab.php');
                        ?>
                    </div>

                    <div class="grid xl-80 lg-75 sm-100">
                        <div class="content-banner" data-aos="fade-up" data-aos-delay="0">
                            <div class="ss-img">
                                <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                            </div>
                            <!-- <p class="text-right mt-2">
                                <em class="zmdi zmdi-eye mr-1"></em> 
                                ยอดการเปิดอ่าน <span class="fw-500">126485</span> ครั้ง
                            </p> -->
                        </div>

                        <div data-aos="fade-up" data-aos-delay="0">
                            <h3 class="xs fw-200 mt-4 pt-1" style="max-width:44rem;">
                                บอร์ดกนอ.ไฟเขียวลงทุนนำสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน 
                                <span class="fw-600 color-06">
                                    รองรับ Smart City เตรียมวางระบบ 5 G
                                </span>
                                ครอบคลุมพื้นที่นิคมอุตสาหกรรรม 14 แห่ง 
                                และท่าเรืออุตสาหกรรม 1 แห่ง คาดเริ่มได้ปี’67
                            </h3>
                            <p class="mt-3">
                                น.ส.สมจิณณ์ พิลึก ผู้ว่าการการนิคมอุตสาหกรรมแห่งประเทศไทย (กนอ.) เปิดเผยว่า  
                                กนอ.มีแนวคิดจัดระเบียบสายสื่อสารในนิคมอุตสาหกรรมลงใต้ดิน เพื่อเพิ่มความ
                                ปลอดภัยต่อชีวิตและทรัพย์สิน รวมทั้งยังเป็นการเฝ้าระวังอุบัติเหตุที่อาจจะเกิดขึ้น 
                                และจัดเตรียมระบบสาธารณูปโภค สิ่งอำนวยความสะดวกและการบริการให้กับผู้ประกอบ
                                การในนิคมอุตสาหกรรม เพื่อให้สามารถใช้ประโยชน์ร่วมกันได้
                            </p>
                            <h3 class="xs fw-500 color-06 xs-no-br mt-4 pt-2">
                                นอกจากนี้ ยังเป็นการรองรับการขยายตัว <br>
                                ของอุตสาหกรรมโทรคมนาคมที่สูงขึ้นในอนาคต 
                            </h3>
                            <p class="mt-3">
                                โดยล่าสุดในการประชุมคณะกรรมการ กนอ.(บอร์ด กนอ.) ที่มีนายนรินทร์ กัลยาณมิตร ประธานบอร์ด 
                                กนอ.เป็นประธานการประชุม มีมติเห็นชอบในหลักการของแนวทาง
                                ดังกล่าวตามที่ กนอ.เสนอ โดยให้เริ่มศึกษาความเป็นไปได้ของการลงทุนฯ ในปี 2564 
                                และคาดว่าหากผลการศึกษาแล้วเสร็จจะสามารถเริ่มดำเนินโครงการวางท่อร้อยสาย
                                สื่อสารใต้ดินในนิคมอุตสาหกรรมได้ในปี 2567 โดยจะเป็นการร่วมทุนระหว่างรัฐและเอกชน (PPP) 
                                หรือ พีพีพ
                            </p>
                            <div class="pt-3">
                                <p class="mt-3">
                                    <img class="content-img-float" src="public/assets/app/images/bg/18.jpg" alt="Image" />
                                    โดยอุตสาหกรรมดิจิทัล เป็นหนึ่งในกลุ่มอุตสาหกรรมที่ใช้เทคโนโลยีขั้นสูง และเป็นอุตสาหกรรมเป้าหมาย
                                    ของการพัฒนาในพื้นที่อีอีซี ซึ่งนักลงทุนต่างชาติโดยเฉพาะนักลงทุนจีนได้ย้ายฐานการผลิตมายังภูมิภาค
                                    อาเซียนจนยอดการลงทุนโดยตรงจากจากต่างประเทศ (Foreign Direct Investment : FDI) เพิ่มมากขึ้น
                                    ถึงแม้ว่าในช่วงไตรมาส 2 จะชะลอตัวลงเล็กน้อยจากสถานการณ์โควิด-19 แต่หลังจากที่รัฐบาลได้ประกาศ
                                    ผ่อนปรนมาตรการต่างๆ ทำให้บรรยากาศการลงทุนเริ่มกลับมาคึกคักอีกครั้ง
                                </p>
                                <h4 class="xs-no-br mt-4">
                                    โดยเฉพาะในกลุ่มอุตสาหกรรม <br>
                                    เป้าหมายเช่น อุตสาหกรรมดิจิทัล เพื่อพัฒนาระบบ 5G <br>
                                    และนวัตกรรมด้านดิจิทัลสมัยใหม่
                                </h4>
                            </div>
                        </div>
                        
                        <div class="clear-both"></div>
                        <div class="content-quote mt-4 pt-2" data-aos="fade-up" data-aos-delay="0">
                            <h4 class="h3 xs text-center fw-200 md-no-br">
                                สำหรับพื้นที่เป้าหมายของการวางท่อร้อยสายสื่อสารใต้ดินในนิคมอุตสาหกรรม <br> 
                                เพื่อให้บริการโทรคมนาคมประกอบด้วย นิคมอุตสาหกรรม 14 แห่ง <br>
                                และท่าเรืออุตสาหกรรม 1 แห่งที่ กนอ.บริหารจัดการเอง
                            </h4>
                            <h5 class="h4 text-center mt-2">
                                เนื้อที่ประมาณ 
                                <span class="text-2xl color-05">33,855.72</span>
                                ไร่ มีผู้ประกอบกิจการในพื้นที่รวมทั้งสิ้น 
                                <span class="text-2xl color-05">2,142</span>
                                ราย
                            </h5>
                        </div>
                        
                        <div class="mt-5 pt-1" data-aos="fade-up" data-aos-delay="0">
                            <?php include('component/content-footer.php'); ?>
                        </div>
                        <div class="btns text-center" data-aos="fade-up" data-aos-delay="0">
                            <a class="btn btn-action" href="#">
                                <span>ข่าวต่อไป</span>
                            </a>
                        </div>
                        
                        <div class="mt-4 pt-4" data-aos="fade-up" data-aos-delay="0">
                            <h3 class="xs content-grid-title">
                                ข่าวที่เกี่ยวข้อง
                            </h3>
                            <div class="grids">
                                <?php for($j=0; $j<3; $j++){?>
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

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>
</html>
