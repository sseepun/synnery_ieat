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

            <div class="tab-container tab-container-04 tab-global" data-aos="fade-up" id="fade-up-mobile" data-aos-delay="450">
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

    <div class="tab-container tab-container-04 tab-global-target">
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
            
            <div class="tab-content" data-tab="2">
                
            </div>
            
            <div class="tab-content" data-tab="3">
                
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
    <script>
        // Calendar Variables
        var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];
        var months = [
            'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
            'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
        ];
        var today = new Date();
    </script>
    <script>
        // Calendar Month
        $(function(){ 'use strict';
             
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
            
            function htmlToElement(html){
                var template = document.createElement('template');
                html = html.trim();
                template.innerHTML = html;
                return template.content.firstChild;
            }
            function updateCalendarHeader(month, year, updateSlick){
                var prevMonth = 0;
                var nextMonth = 0;

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
                views: {dayGrid: {eventLimit: 2}},
                events: [
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2020-12-19',
                        customStartTime: '12:45 น.',
                        end: '2020-12-19',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2020-12-19',
                        customStartTime: '12:45 น.',
                        end: '2020-12-19',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2020-12-19',
                        customStartTime: '12:45 น.',
                        end: '2020-12-19',
                        customEndTime: '15:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-24',
                        customStartTime: '09:00 น.',
                        end: '2020-12-24',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00 น.',
                        end: '2020-12-24',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00 น.',
                        end: '2020-12-24',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00 น.',
                        end: '2020-12-24',
                        customEndTime: '20:00 น.',
                        url: '#',
                    },
                ],
                columnHeaderText: function(date){
                    return days[date.getDay()];
                },
                datesRender: function(info){
                    var date = new Date(info.view.currentStart);
                    updateCalendarHeader(date.getMonth(), date.getFullYear(), true);
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
                    info.el.innerHTML = '<div class="custom-event '+classer+'">'
                            +'<div class="time">'
                                +event.extendedProps.customStartTime
                                +' - '
                                +event.extendedProps.customEndTime
                            +'</div>'
                            +'<div class="title">'+event.title+'</div>'
                        +'</div>';
                    return true;
                }
            });
            calendarMonth.render();


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
                    gotoDate = new Date(year+'-'+(date.getMonth()+1)+'-'+'14');
                calendarMonth.gotoDate(gotoDate);
            });

        });
    </script>
    <script>
        // Calendar Week
        $(function(){ 'use strict';
            
            // Section Calendar Week
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
                events: [
                    {
                        title: 'การทำโครงงานทดลอง',
                        start: '2021-02-03T10:00:00',
                        end: '2020-02-03T16:00:00',
                        url: '#',
                        backgroundColor: 'orange',
                        borderColor: 'orange'
                    },
                    {
                        title: 'การทำโครงงานทดลอง 2',
                        start: '2020-09-22T12:00:00',
                        end: '2020-09-22T21:00:00',
                        url: '#',
                        backgroundColor: 'orange',
                        borderColor: 'orange'
                    },
                ],
                eventSourceSuccess: function(content, xhr){
                    return content.eventArray;
                },
                dayRender: function(info){
                    if(!($(info.el).closest('.fc-scroller').length)){
                        const date = new Date(info.date);
                        if(info.el.classList.contains('fc-today')){
                            info.el.style.color = '#ffffff';
                            info.el.style.backgroundColor = '#0d838d';
                        }
                        if(info.el.classList.contains('fc-other-month')){
                            info.el.style.opacity = 0.3;
                        }
                        info.el.innerHTML = `<div class="calendar-custom-date">
                                ${date.getDate()}
                                ${days[date.getDay()]}
                            </div>`;
                    }
                },
            });
            calendarWeek.render();

        });
    </script>
</body>
</html>
