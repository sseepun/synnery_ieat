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
            [ 'url' => '#', 'display' => 'เกี่ยวกับ กนอ.' ],
            [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
        ];
        $breadcrumbClass = 'color-white';
        include('component/breadcrumb.php');
    ?>

    <section class="section-bpadding img-fill" style="background-image:url('public/assets/app/images/bg/30.jpg');">
        <div class="container">
            <h2 class="color-white" data-aos="fade-up" data-aos-delay="0">
                ปฏิทินกิจกรรม
            </h2>
            <h3 class="sm color-08 fw-400 xs-no-br" data-aos="fade-up" data-aos-delay="150">
                ตลอดระยะเวลากว่า 47 ปีที่ผ่านมา มุ่งมั่น <br>
                สร้างฐานการผลิต 
            </h3>
            <h5 class="color-white xs-no-br" data-aos="fade-up" data-aos-delay="300">
                เพื่อรองรับการลงทุนด้านอุตสาหกรรม ผลักดันการลงทุน เพื่อพัฒนาเศรษฐกิจของประเทศ <br>
                ให้เกิดความมั่นคงและเป็นศูนย์กลางที่สำคัญของเอเชีย 
            </h5>
            <div class="grids grid-header mt-3" data-aos="fade-up" data-aos-delay="450">
                <div class="grid xl-20 lg-25 md-30 sm-100 mt-0">
                    <div class="options">
                        <input type="text" name="search" placeholder="ค้นหา" required />
                        <button type="submit" class="btn btn-grid">
                            <em class="zmdi zmdi-search"></em>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-calendar">
        <div class="top-container">
            <div class="container">
                <div class="slide-container">
                    <div class="slides">
                        <?php
                            foreach([
                                'ม.ก.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.', 
                                'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'
                            ] as $i=>$d){
                        ?>
                            <div class="slide" data-month="<?= $i ?>" data-index="<?= $i ?>">
                                <div class="wrapper">
                                    <p>เดือน</p>
                                    <h5><?= $d ?></h5>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="arrows"></div>
                </div>
            </div>
        </div>

        <div class="middle-container">
            <div class="container">
                <div class="calendar-tabs">
                    <?php
                        $days = ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'];
                        for($i=1; $i<=31; $i++){
                    ?>
                        <div class="tab <?php if($i==19)echo 'active'; ?>">
                            <div class="d"><?= $days[$i%7] ?></div>
                            <div class="icon btn-hex">
                                <?= sprintf('%02d', $i) ?>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>

        <div class="bottom-container section-padding pt-0">
            <div class="container">
                <div class="grids">

                    <div class="grid xl-75 lg-70 sm-100">
                        <div class="ss-box position-relative pl-5">
                            <div class="content-float-date">
                                <div class="d">04</div>
                                <div class="m-y">09.2563</div>
                            </div>
                            <div class="pl-3">
                                <h4 class="fw-500">
                                    วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G ในนิคมอุตสาหกรรม
                                </h4>
                                
                                <div class="grids mt-3">
                                    <div class="grid sm-40 mt-0">
                                        <div class="ss-stat mt-0">
                                            <div class="stat icon-only fit-text mt-0">
                                                <div class="icon">
                                                    <em class="zmdi zmdi-calendar"></em>
                                                </div>
                                                <p><span class="fw-500">วันที่</span> 12/09/2563</p>
                                            </div>
                                        </div>
                                        <div class="ss-stat mt-0">
                                            <div class="stat icon-only fit-text mt-0">
                                                <div class="icon">
                                                    <em class="zmdi zmdi-time"></em>
                                                </div>
                                                <p><span class="fw-500">เวลา</span> 12.45</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid sm-60 mt-0">
                                        <div class="ss-stat mt-0">
                                            <div class="stat icon-only fit-text ai-start mt-0">
                                                <div class="icon">
                                                    <em class="zmdi zmdi-pin"></em>
                                                </div>
                                                <p class="ws-normal">
                                                    <span class="fw-500">สถานที่</span>
                                                    618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="content-banner mt-3">
                                    <div class="ss-img">
                                        <div class="img-bg lazy-bg" data-src="public/assets/app/images/bg/17.jpg"></div>
                                    </div>
                                </div>
                                
                                <h6 class="fw-500 mt-4">
                                    รายละเอียด : 
                                </h6>
                                <p class="mt-3">
                                    กนอ.ดำเนินธุรกิจจัดตั้งนิคมอุตสาหกรรมพร้อมให้บริการระบบสาธารณูปโภคอย่างครบวงจร 
                                    และสร้างมูลค่าเพิ่มให้กับนิคมอุตสาหกรรมที่ กนอ. ดำเนินงานเอง 
                                    รวมทั้งส่งสริมภาคเอกชนเป็นผู้จัดตั้งนิคมอุตสาหกรรมเพื่อรองรับการประกอบกิจการโรงงานอุตสาหกรรมให้อยู่รวมกัน 
                                    โดย กนอ.จะสามารถให้บริการระบบสาธารณูปโภค และบริหารจัดการนิคมอุตสาหกรรมได้อย่างเป็นระบบและรวมถึงการบริหารจัดการด้าน
                                    สิ่งแวดล้อม ก่อให้เกิดการกระจายความเจริญทางเศรษฐกิจและอุตสาหกรรมไปสู่ภูมิภาคของประเทศอย่างสมดุลและยั่งยืน
                                </p>
                                <p class="mt-3">
                                    โดยอุตสาหกรรมดิจิทัล เป็นหนึ่งในกลุ่มอุตสาหกรรมที่ใช้เทคโนโลยีขั้นสูง และเป็นอุตสาหกรรมเป้าหมายของการพัฒนาในพื้นที่อีอีซี 
                                    ซึ่งนักลงทุนต่างชาติโดยเฉพาะนักลงทุนจีนได้ย้ายฐานการผลิตมายังภูมิภาคอาเซียนจนยอดการลงทุนโดยตรงจากจากต่างประเทศ 
                                    (Foreign Direct Investment : FDI) เพิ่มมากขึ้นถึงแม้ว่าในช่วงไตรมาส 2 จะชะลอตัวลงเล็กน้อยจากสถานการณ์โควิด-19 
                                    แต่หลังจากที่รัฐบาลได้ประกาศผ่อนปรนมาตรการต่างๆ ทำให้บรรยากาศการลงทุนเริ่มกลับมาคึกคักอีกครั้ง
                                </p>
                                
                                <div class="mt-5 pt-1">
                                    <?php include('component/content-footer.php'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="grid xl-25 lg-30 sm-100">
                        <h4 class="lg fw-400 color-01">
                            กิจกรรมถัดมา
                        </h4>
                        <div class="grids">
                            <?php for($j=0; $j<3; $j++){?>
                                <div class="grid md-100 sm-50 mt-3">
                                    <a class="ss-img mb-2" href="#">
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
                                    <a class="h6 fw-600 color-black h-color-04" href="#">
                                        กนอ.ดึงเอกชนร่วมพีพีพีจัดระเบียบ
                                        สายสื่อสารลงดิน วางระบบ 5G
                                    </a>
                                    <div class="ss-stat mt-1">
                                        <div class="stat icon-only fit-text width-full">
                                            <div class="icon">
                                                <em class="zmdi zmdi-calendar"></em>
                                            </div>
                                            <p><span class="fw-500">วันที่</span> 12/09/2563</p>
                                        </div>
                                        <div class="stat icon-only fit-text width-full">
                                            <div class="icon">
                                                <em class="zmdi zmdi-time"></em>
                                            </div>
                                            <p><span class="fw-500">เวลา</span> 12.45</p>
                                        </div>
                                        <div class="stat icon-only fit-text width-full ai-start">
                                            <div class="icon">
                                                <em class="zmdi zmdi-pin"></em>
                                            </div>
                                            <p class="ws-normal">
                                                <span class="fw-500">สถานที่</span>
                                                618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            <?php }?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>

    <script>
        $(function(){ 'use strict';

            // Calendar Variables
            var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
            var months = [
                'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
                'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
            ];
            var today = new Date();

                
            // Section Calendar
            var sectionCalendar = $('.section-calendar');
            var slideContainer = sectionCalendar.find('.slide-container'),
                slides = slideContainer.find('.slide');
            slideContainer.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 8, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: true, appendArrows: slideContainer.find('> .arrows'),
                initialSlide: slides.filter('[data-month="'+today.getMonth()+'"]').data('index'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 7, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                ]
            });

        });
    </script>
</body>
</html>
