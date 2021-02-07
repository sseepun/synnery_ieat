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

    <section class="section-bpadding pb-0 img-fill" style="background-image:url('public/assets/app/images/bg/30.jpg');">
        <div class="container">
            <h3 class="h2 color-white" data-aos="fade-up" data-aos-delay="0">
                ปฏิทินกิจกรรม
            </h3>
            <h4 class="h3 sm color-08 fw-300 xs-no-br xs-hide" data-aos="fade-up" data-aos-delay="150">
                ตลอดระยะเวลากว่า 47 ปีที่ผ่านมา มุ่งมั่น <br>
                สร้างฐานการผลิต 
            </h4>
            <div class="grids grid-header mt-2" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="300">
                <div class="grid xl-20 lg-25 md-30 sm-100 mt-0">
                    <div class="options jc-start">
                        <input type="text" name="search" placeholder="ค้นหา" required title="Search" />
                        <button type="submit" class="btn btn-grid">
                            <em class="zmdi zmdi-search"></em>
                        </button>
                    </div>
                </div>
            </div>

            <div class="tab-container tab-container-04 tab-local" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
                <div class="tabs">
                    <div class="ss-box-shadow"></div>
                    <?php foreach(['แบบรายเดือน', 'แบบรายสัปดาห์', 'แบบรายวัน', 'รวมทั้งหมด'] as $i=>$d){?>
                        <a class="tab color-black h-color-04 <?php if($i==0)echo 'active'; ?>" data-tab="<?= $i ?>" href="#">
                            <p class="fw-500"><?= $d ?></p>
                        </a>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <div class="tab-container tab-container-04 tab-local-target">
        <div class="tab-contents">

            <!-- Calendar Month -->
            <div class="tab-content active" data-tab="0">
                <section class="section-calendar month">
                    <div class="top-container">
                        <div class="container">
                            <div class="slide-container slide-month">
                                <div class="slides">
                                    <?php for($i=30; $i>=0; $i--){?>
                                        <div class="slide" data-year="<?= 2579-$i-543 ?>" data-index="<?= 30-$i ?>">
                                            <div class="wrapper">
                                                <div class="p">พ.ศ.</div>
                                                <div class="h5"><?= 2579-$i ?></div>
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
                            <div class="calendar-header">
                                <div id="prev-month-btn" class="calendar-btn">
                                    <em class="zmdi zmdi-chevron-left mr-2"></em>
                                    <span class="h6"></span>
                                </div>
                                <h3 id="calendar-title" class="sm fw-300 calendar-title">&nbsp;</h3>
                                <div id="next-month-btn" class="calendar-btn">
                                    <span class="h6"></span>
                                    <em class="zmdi zmdi-chevron-right ml-2"></em>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-container">
                        <div class="container">
                            <div class="grids jc-center">
                                <div class="grid xl-90 sm-100 mt-0">
                                    <div class="ss-box">

                                        <!-- Calendar Month -->
                                        <div class="scroll-wrapper" data-simplebar>
                                            <div class="calendar-wrapper">
                                                <div class="calendar-month">
                                                    <div id="calendar-month"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Calendar Week -->
            <div class="tab-content" data-tab="1">
                <section class="section-calendar week">
                    <div class="top-container">
                        <div class="container">
                            <div class="slide-container slide-week">
                                <div class="slides">
                                    <?php
                                        $months = [
                                            'ม.ค.', 'ก.พ.', 'มี.ค.', 'เม.ย.', 'พ.ค.', 'มิ.ย.',
                                            'ก.ค.', 'ส.ค.', 'ก.ย.', 'ต.ค.', 'พ.ย.', 'ธ.ค.'
                                        ];
                                        for($i=0; $i<3; $i++){ for($j=0; $j<12; $j++){
                                    ?>
                                        <div class="slide" 
                                        data-year="<?= 2562+$i-543 ?>" 
                                        data-month="<?= $j ?>" 
                                        data-index="<?= $i*12+$j ?>">
                                            <div class="wrapper">
                                                <div class="h5"><?= $months[$j] ?></div>
                                                <div class="h6 fw-200"><?= 2562+$i ?></div>
                                            </div>
                                        </div>
                                    <?php }}?>
                                </div>
                                <div class="arrows"></div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-container">
                        <div class="container">
                            <div class="grids jc-center">
                                <div class="grid xl-90 sm-100 mt-0">
                                    <div class="ss-box">
                                        <div class="h4 fw-300 color-gray">สัปดาห์</div>

                                        <!-- Calendar Week -->
                                        <div class="scroll-wrapper" data-simplebar>
                                            <div class="calendar-wrapper">
                                                <div class="calendar-week">
                                                    <div id="calendar-week"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Calendar Day -->
            <div class="tab-content" data-tab="2">
                <section class="section-calendar day">
                    <div class="top-container">
                        <div class="container">
                            <div class="slide-container slide-month">
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
                            <div class="slide-container calendar-tabs">
                                <div class="slides">
                                    <?php
                                        $days = ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'];
                                        for($i=1; $i<=31; $i++){
                                    ?>
                                        <div class="slide">
                                            <div class="tab">
                                                <div class="d"><?= $days[$i%7] ?></div>
                                                <div class="icon btn-hex">
                                                    <?= sprintf('%02d', $i) ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-container">
                        <div class="container">
                            <div class="grids jc-center">
                                <div class="grid xl-90 sm-100 mt-0">
                                    <div class="ss-box">

                                        <!-- Calendar Day -->
                                        <div class="scroll-wrapper" data-simplebar>
                                            <div class="calendar-wrapper">
                                                <div class="calendar-day">
                                                    <div id="calendar-day"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            
            <!-- Calendar Detail -->
            <div class="tab-content" data-tab="3">
                <section class="section-calendar detail">
                    <div class="top-container">
                        <div class="container">
                            <div class="slide-container slide-month">
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
                            <div class="slide-container calendar-tabs">
                                <div class="slides">
                                    <?php
                                        $days = ['อา.', 'จ.', 'อ.', 'พ.', 'พฤ.', 'ศ.', 'ส.'];
                                        for($i=1; $i<=31; $i++){
                                    ?>
                                        <div class="slide">
                                            <div class="tab">
                                                <div class="d"><?= $days[$i%7] ?></div>
                                                <div class="icon btn-hex">
                                                    <?= sprintf('%02d', $i) ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-container section-padding pt-0 ovf-hidden">
                        <div class="container">
                            <div class="grids">

                                <div class="grid xl-75 lg-70 sm-100">
                                    <div class="ss-box padding-pull-right">
                                        <div class="content-float-date">
                                            <div class="d">04</div>
                                            <div class="m-y">09.2563</div>
                                        </div>
                                        <h5 class="h4 fw-500">
                                            วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสารลงดิน วางระบบ 5G ในนิคมอุตสาหกรรม
                                        </h5>
                                        
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
                                                        <p><span class="fw-500">เวลา</span> 12.45 น.</p>
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

                                <div class="grid xl-25 lg-30 sm-100 calendar-contents">
                                    <h4 class="lg fw-400 color-01">
                                        กิจกรรมถัดมา
                                    </h4>
                                    <div class="grids">
                                        <?php for($j=0; $j<3; $j++){?>
                                            <div class="grid lg-100 md-50 sm-50 mt-3 calendar-content">
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
            </div>
            
        </div>
    </section>

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
    <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
    <script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>
    
    <!-- Calendar Variables -->
    <script>
        var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
        var months = [
            'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
            'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
        ];
        var today = new Date();
        
        $(function(){ 'use strict';

            // -----------------------------------------------------------------------
            // Calendar Month --------------------------------------------------------
            // -----------------------------------------------------------------------
             
            // Section Calendar Month
            var sectionCalendarMonth = $('.section-calendar.month');
            var slideMonth = sectionCalendarMonth.find('.slide-container.slide-month'),
                slidesMonth = slideMonth.find('.slide');
            slideMonth.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 8, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: true, appendArrows: slideMonth.find('> .arrows'),
                initialSlide: slidesMonth
                    .filter('[data-month="'+today.getMonth()+'"]')
                    .data('index'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 7, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                ]
            });

            // Calendar Month
            var calendarTitle = $('#calendar-title');
            var prevMonthBtn = $('#prev-month-btn');
            var nextMonthBtn = $('#next-month-btn');
            
            function updateCalendarHeaderMonth(date, updateSlick){
                var month = date.getMonth(), 
                    year = date.getFullYear();
                var prevMonth = 0,
                    nextMonth = 0;

                if(months[month - 1]) prevMonth = months[month - 1];
                else prevMonth = months[months.length - 1];

                if(months[month + 1]) nextMonth = months[month + 1];
                else nextMonth = months[0];

                calendarTitle.html('เดือน'+months[month]);
                prevMonthBtn.find('> span').html(prevMonth);
                nextMonthBtn.find('> span').html(nextMonth);

                if(updateSlick){
                    var slickIndex = slidesMonth.filter('[data-year="'+year+'"]').data('index');
                    if(slickIndex!==undefined){
                        slideMonth.find('> .slides').slick('slickGoTo', slickIndex);
                    }
                }
            }

            const calendarMonth = new FullCalendar.Calendar($('#calendar-month')[0], {
                plugins: [ 'interaction', 'dayGrid' ],
                defaultView: 'dayGridMonth',
                firstDay: 0,
                locale: 'th',
                contentHeight: 'auto',
                eventLimit: true,
                eventLimitText: 'กิจกรรม',
                views: {
                    dayGrid: {eventLimit: 2}
                },
                events: [
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-02-09',
                        customStartTime: '12:45 น.',
                        end: '2021-02-09',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-02-09',
                        customStartTime: '12:45 น.',
                        end: '2021-02-09',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2021-02-09',
                        customStartTime: '12:45 น.',
                        end: '2021-02-09',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-09',
                        customStartTime: '09:00 น.',
                        end: '2021-02-09',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-21',
                        customStartTime: '09:00 น.',
                        end: '2021-02-21',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-21',
                        customStartTime: '09:00 น.',
                        end: '2021-02-21',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-21',
                        customStartTime: '09:00 น.',
                        end: '2021-02-21',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                ],
                columnHeaderText: function(date){
                    return days[date.getDay()];
                },
                datesRender: function(info){
                    var date = new Date(info.view.currentStart);
                    updateCalendarHeaderMonth(date, true);
                },
                eventRender: function(info, d){
                    var event = info.event,
                        date = new Date(event.start),
                        classer = '';
                    if(date.getFullYear()===today.getFullYear() 
                    && date.getMonth()===today.getMonth() 
                    && date.getDate()===today.getDate()){
                        classer = 'today';
                    }
                    info.el.innerHTML = `
                        <div class="custom-event ${classer}">
                            <div class="event-main">
                                <div class="time">
                                    ${event.extendedProps.customStartTime} - 
                                    ${event.extendedProps.customEndTime}
                                </div>
                                <div class="title">${event.title}</div>
                            </div>
                            <div class="event-popup">
                                <div class="ss-card ss-card-07">
                                    <div class="ss-img">
                                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/17.jpg');"></div>
                                    </div>
                                    <div class="text-container">
                                        <div class="wrapper">
                                            <div class="text-wrapper">
                                                <div class="h6 fw-500">${event.title}</div>
                                                <div class="grids mt-2">
                                                    <div class="grid sm-40 mt-0">
                                                        <div class="ss-stat mt-0">
                                                            <div class="stat icon-only fit-text mt-0">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-calendar"></em>
                                                                </div>
                                                                <p class="sm">
                                                                    <span class="fw-500">วันที่</span> 12/09/2563
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ss-stat mt-0">
                                                            <div class="stat icon-only fit-text mt-0">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-time"></em>
                                                                </div>
                                                                <p class="sm">
                                                                    <span class="fw-500">เวลา</span> 12.45 น.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="grid sm-60 mt-0">
                                                        <div class="ss-stat mt-0">
                                                            <div class="stat icon-only fit-text ai-start mt-0">
                                                                <div class="icon">
                                                                    <em class="zmdi zmdi-pin"></em>
                                                                </div>
                                                                <p class="sm ws-normal">
                                                                    <span class="fw-500">สถานที่</span>
                                                                    618 ถนนนิคมมักกะสัน เเขวงมักกะสัน เขตราชเทวี กรุงเทพมหานคร
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    return true;
                }
            });
            // calendarMonth.render();

            // Events
            prevMonthBtn.click(function(e){
                e.preventDefault();
                calendarMonth.prev();
            });
            nextMonthBtn.click(function(e){
                e.preventDefault();
                calendarMonth.next();
            });
            slideMonth.find('.slides').on('beforeChange', function(e, s, c, i){
                var year = slidesMonth.filter('[data-index="'+i+'"]').data('year'),
                    date = calendarMonth.getDate(),
                    gotoDate = new Date(year+'-'+pad(date.getMonth()+1)+'-'+'14');
                calendarMonth.gotoDate(gotoDate);
            });
            
            
            // -----------------------------------------------------------------------
            // Calendar Week ---------------------------------------------------------
            // -----------------------------------------------------------------------
            
            // Section Calendar Week
            var readyWeek = true;
            var sectionCalendarWeek = $('.section-calendar.week');
            var slideWeek = sectionCalendarWeek.find('.slide-container.slide-week'),
                slidesWeek = slideWeek.find('.slide');
            slideWeek.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 8, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: true, appendArrows: slideWeek.find('> .arrows'),
                initialSlide: slidesWeek
                    .filter('[data-month="'+today.getMonth()+'"]')
                    .filter('[data-year="'+today.getFullYear()+'"]')
                    .data('index'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 7, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                ]
            });
            
            function updateCalendarHeaderWeek(date, updateSlick){
                if(updateSlick){
                    var month = date.getMonth(), 
                        year = date.getFullYear();
                    var slickIndex = slidesWeek
                        .filter('[data-month="'+month+'"]')
                        .filter('[data-year="'+year+'"]')
                        .data('index');
                    if(slickIndex!==undefined){
                        slideWeek.find('> .slides').slick('slickGoTo', slickIndex);
                    }
                }
            }

            // Calendar Week
            const calendarWeek = new FullCalendar.Calendar($('#calendar-week')[0], {
                plugins: [ 'interaction', 'timeGrid'],
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                defaultView: 'timeGridWeek',
                firstDay: 1,
                locale: 'th',
                contentHeight: 'auto',
                slotDuration: '01:00:00',
                events: [
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-03T10:00:00',
                        end: '2021-02-03T18:00:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564 2',
                        start: '2021-02-02T12:00:00',
                        end: '2021-02-02T21:00:00',
                        url: '#',
                    },
                ],
                eventSourceSuccess: function(content, xhr){
                    return content.eventArray;
                },
                datesRender: function(info){
                    readyWeek = false;
                    var date = new Date(info.view.currentStart);
                    updateCalendarHeaderWeek(date, true);
                },
                dayRender: function(info){
                    if(!($(info.el).closest('.fc-scroller').length)){
                        const date = new Date(info.date);
                        if(info.el.classList.contains('fc-today')){
                            info.el.innerHTML = `<div class="custom-date active">
                                    <div class="date-tag btn-hex">
                                        ${date.getDate()}
                                    </div>
                                    ${days[date.getDay()]}
                                </div>`;
                        }else{
                            info.el.innerHTML = `<div class="custom-date">
                                    <div class="date-tag btn-hex">
                                        ${date.getDate()}
                                    </div>
                                    ${days[date.getDay()]}
                                </div>`;
                        }
                        if(info.el.classList.contains('fc-other-month')){
                            info.el.style.opacity = 0.3;
                        }
                    }
                },
            });
            // calendarWeek.render();

            // Events
            slideWeek.find('.slides').on('beforeChange', function(e, s, c, i){
                if(readyWeek){
                    var self = slidesWeek.filter('[data-index="'+i+'"]'),
                        month = self.data('month'),
                        year = self.data('year'),
                        gotoDate = new Date(year+'-'+pad(month+1)+'-'+'01');
                    calendarWeek.gotoDate(gotoDate);
                }
                readyWeek = true;
            });
            
            
            // -----------------------------------------------------------------------
            // Calendar Day ----------------------------------------------------------
            // -----------------------------------------------------------------------

            // Section Calendar Day
            var readyDay = true;
            var sectionCalendarDay = $('.section-calendar.day');
            var slideDayMonth = sectionCalendarDay.find('.slide-container.slide-month'),
                slidesDay = slideDayMonth.find('.slide');
            slideDayMonth.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 8, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: true, appendArrows: slideDayMonth.find('> .arrows'),
                initialSlide: slidesDay.filter('[data-month="'+today.getMonth()+'"]').data('index'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 7, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                ]
            });

            // Calendar Day Tabs
            var dayDayTabs = sectionCalendarDay.find('.slide-container.calendar-tabs');
            dayDayTabs.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 27, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: false,
                initialSlide: today.getDate(),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 25, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 21, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 17, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 13, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 7, } },
                ]
            });
            
            function updateCalendarHeaderDay(date, updateSlick){
                if(updateSlick){
                    var day = date.getDate(),
                        month = date.getMonth(), 
                        year = date.getFullYear();
                    var slickIndex = slidesDay
                        .filter('[data-month="'+month+'"]')
                        .data('index');
                    if(slickIndex!==undefined){
                        slideDayMonth.find('> .slides').slick('slickGoTo', slickIndex);
                    }
                }
            }

            // Calendar Day
            const calendarDay = new FullCalendar.Calendar($('#calendar-day')[0], {
                plugins: [ 'interaction', 'timeGrid'],
                header: {
                    left: 'prev',
                    center: 'title',
                    right: 'next'
                },
                defaultView: 'timeGridDay',
                firstDay: 1,
                locale: 'th',
                contentHeight: 'auto',
                slotDuration: '01:00:00',
                events: [
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2021-02-07T10:00:00',
                        end: '2021-02-07T18:00:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564 2',
                        start: '2021-02-07T12:00:00',
                        end: '2021-02-07T21:00:00',
                        url: '#',
                    },
                ],
                datesRender: function(info){
                    readyDay = false;
                    var date = new Date(info.view.currentStart);
                    updateCalendarHeaderDay(date, true);
                },
            });
            // calendarDay.render();

            // Events
            slideDayMonth.find('> .slides').on('beforeChange', function(e, s, c, i){
                if(readyDay){
                    var self = slidesDay.filter('[data-index="'+i+'"]'),
                        month = self.data('month'),
                        date = calendarDay.getDate(),
                        gotoDate = new Date(date.getYear()+'-'+pad(month+1)+'-'+'01');
                    calendarDay.gotoDate(gotoDate);
                }
                readyDay = true;
            });
            
            
            // -----------------------------------------------------------------------
            // Calendar Detail -------------------------------------------------------
            // -----------------------------------------------------------------------

            // Section Calendar Detail
            var sectionCalendarDetail = $('.section-calendar.detail');
            var slideDetailMonth = sectionCalendarDetail.find('.slide-container.slide-month'),
                detailSlides = slideDetailMonth.find('.slide');
            slideDetailMonth.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 8, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: true, appendArrows: slideDetailMonth.find('> .arrows'),
                initialSlide: detailSlides.filter('[data-month="'+today.getMonth()+'"]').data('index'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 7, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                ]
            });

            // Calendar Day Tabs
            var detailDayTabs = sectionCalendarDetail.find('.slide-container.calendar-tabs');
            detailDayTabs.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 27, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, 
                swipe: false, touchMove: false, swipeToSlide: false,
                dots: false, arrows: false,
                initialSlide: today.getDate(),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 25, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 21, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 17, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 13, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 7, } },
                ]
            });
            
            
            // -----------------------------------------------------------------------
            // Local Tab -------------------------------------------------------------
            // -----------------------------------------------------------------------

            var tabs = $('.tab-container.tab-local .tabs > .tab'),
                tabContents = $('.tab-container.tab-local-target .tab-contents > .tab-content'),
                activeTabId = tabs.filter('.active').data('tab');
            calendarRenderer(activeTabId);
            tabs.click(function(e){
                var temp = $(this),
                    tabId = temp.data('tab');
                if(tabId!==undefined){
                    var target = tabContents.filter('[data-tab="'+tabId+'"]');
                    if(target.length){
                        e.preventDefault();
                        tabs.removeClass('active');
                        temp.addClass('active');
                        tabContents.removeClass('active');
                        target.addClass('active');
                        
                        AOS.refresh();
                        
                        var slides = target.find('.slide-container > .slides');
                        if(slides.length){
                            slides.slick('setPosition');
                        }
                        
                        calendarRenderer(tabId);
                    }
                }
            });

            function calendarRenderer(id){
                if(id==0){
                    calendarMonth.render();
                    calendarMonth.rerenderEvents();
                }else if(id==1){
                    calendarWeek.render();
                }else if(id==2){
                    calendarDay.render();
                }
            }

            
            // -----------------------------------------------------------------------
            // Utility Functions -----------------------------------------------------
            // -----------------------------------------------------------------------

            function pad(num, size){
                num = num.toString();
                while(num.length < size) num = '0' + num;
                return num;
            }

        });
    </script>
</body>
</html>
