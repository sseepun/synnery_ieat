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
                            <i class="zmdi zmdi-search"></i>
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
                        <?php for($i=30; $i>=0; $i--){?>
                            <div class="slide" data-year="<?= 2579-$i-543 ?>" data-index="<?= 30-$i ?>">
                                <div class="wrapper">
                                    <p>พ.ศ.</p>
                                    <h5><?= 2579-$i ?></h5>
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
                        <i class="zmdi zmdi-chevron-left mr-2"></i>
                        <span class="h6"></span>
                    </div>
                    <h3 id="calendar-title" class="sm fw-300 calendar-title"></h3>
                    <div id="next-month-btn" class="calendar-btn">
                        <span class="h6"></span>
                        <i class="zmdi zmdi-chevron-right ml-2"></i>
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

    <?php include_once('include/footer-inside.php'); ?>
    <?php include_once('include/script.php'); ?>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
    <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
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
                initialSlide: slides.filter('[data-year="'+today.getFullYear()+'"]').data('index'),
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
                    var slickIndex = slides.filter('[data-year="'+year+'"]').data('index');
                    if(slickIndex!==undefined){
                        slideContainer.find('> .slides').slick('slickGoTo', slickIndex);
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
                        customStartTime: '12:45',
                        end: '2020-12-19',
                        customEndTime: '15:00',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2020-12-19',
                        customStartTime: '12:45',
                        end: '2020-12-19',
                        customEndTime: '15:00',
                        url: '#',
                    },
                    {
                        title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
                        start: '2020-12-19',
                        customStartTime: '12:45',
                        end: '2020-12-19',
                        customEndTime: '15:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-24',
                        customStartTime: '09:00',
                        end: '2020-12-24',
                        customEndTime: '20:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00',
                        end: '2020-12-24',
                        customEndTime: '20:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00',
                        end: '2020-12-24',
                        customEndTime: '20:00',
                        url: '#',
                    },
                    {
                        title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
                        start: '2020-12-29',
                        customStartTime: '09:00',
                        end: '2020-12-24',
                        customEndTime: '20:00',
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
                },
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
            slideContainer.find('.slides').on('beforeChange', function(e, s, c, i){
                var year = slides.filter('[data-index="'+i+'"]').data('year'),
                    date = calendarMonth.getDate(),
                    gotoDate = new Date(year+'-'+(date.getMonth()+1)+'-'+'14');
                calendarMonth.gotoDate(gotoDate);
            });

        });
    </script>
</body>
</html>
