$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavDropdownToggles = topnav.find('.topnav-dropdown-toggle'),
        topnavDropdown = $('.topnav-dropdown');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggles = $('nav.topnav .sidenav-toggle, nav.sidenav .sidenav-toggle');
    if(topnav.length){

        // Topnav Dropdown Toggle
        topnavDropdownToggles.click(function(e){
            e.preventDefault();
            topnavDropdownToggles.parent().toggleClass('active');
            topnavDropdown.toggleClass('active');
            topnavDropdown.slideToggle();
        });

        // Sidenav Toggles
        sidenavToggles.click(function(e){
            e.preventDefault();
            if($('body').hasClass('sidenav-opened')){
                $('html, body').removeClass('sidenav-opened');
                sidenavToggles.find('> *').removeClass('active');
                sidenav.removeClass('active');
            }else{
                $('html, body').addClass('sidenav-opened');
                sidenavToggles.find('> *').addClass('active');
                sidenav.addClass('active');
            }
        });
        $('.sidenav-filter').click(function(e){
            e.preventDefault();
            $('html, body').removeClass('sidenav-opened');
            sidenavToggles.find('> *').removeClass('active');
            sidenav.removeClass('active');
        });

        // Generate sidenav
        sidenavMenus.html( topnav.find('.menu-container').html() );
        sidenavMenus.find('.menu.menu-icon').remove();

    }

    // Global Search
    var globalSearchContainer = $('.global-search-container');
    if(globalSearchContainer.hasClass('use-gsap')){
        var globalSearchTl =  new TimelineMax({paused: true})
            .to('.global-search-container', .6, {
                autoAlpha: 1, ease: Power3.easeInOut
            })
            .from('.global-search-container .hamburger', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .from('.global-search-container h3', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .from('.global-search-container .input-container', .6, {
                opacity: 0, y: 30, ease: Power3.easeInOut
            }, '-=.4')
            .reverse();
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchTl.reversed( !globalSearchTl.reversed() );
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
                $('html, body').addClass('global-search-opened');
            }else{
                $('html, body').removeClass('global-search-opened');
            }
        });
    }else{
        $('.global-search-toggle').click(function(e){
            e.preventDefault();
            globalSearchContainer.toggleClass('active');
            if(globalSearchContainer.hasClass('active')){
                globalSearchContainer.find('input[type=text]').focus();
                $('html, body').addClass('global-search-opened');
            }else{
                $('html, body').removeClass('global-search-opened');
            }
        });
    }

    // Back to Top
    var backToTop = $('.back-to-top');
    if(backToTop.length){
        
        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        backToTop.click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({ scrollTop: 0 }, 800 );
        });
        
    }
    function checkOnScroll(st){
        if(st > 400){
            backToTop.addClass('active');
        }else{
            backToTop.removeClass('active');
        }
    }
    
    // Font Sizes
    var bodySize = 16;
    $('.btn-font-size').click(function(e){
        e.preventDefault();
        var s = Number($(this).data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');
    });

    // Themes
    $('.btn-theme').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+$(this).data('theme'));
    });

    // Quick Tab
    var quickTab = $('.quick-tab');
    if(quickTab.length){
        var quickTabContainer = quickTab.find('.tabs'),
            quickTabs = quickTabContainer.find('.tab'),
            quickTabBars = quickTab.find('.tab-bar'),
            quickTablCloses = quickTab.find('.btn-close');
        quickTabs.click(function(e){
            e.preventDefault();
            quickTabContainer.addClass('inactive');
            var target = quickTabBars.filter('[data-tab="'+$(this).data('tab')+'"]');
            target.addClass('show');
            setTimeout(function(){
                target.addClass('active');
            }, 100);
        });
        quickTablCloses.click(function(e){
            e.preventDefault();
            quickTabContainer.removeClass('inactive');
            quickTabBars.removeClass('show active');
        });
    }


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });
    
    // // Calendar
    // var calendar;
    // if($('.calendar-container > .calendar-wrapper').length){
    //     if(!$('.banner-event').length){
    //         $('.calendar-container > .calendar-wrapper').simpleCalendar({
    //             months: [
    //                 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
    //                 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
    //             ],
    //             days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
    //             displayYear: false,
    //             fixedStartDay: 0,
    //             displayEvent: true,
    //             disableEventDetails: false,
    //             disableEmptyDetails: true,
    //             events: [
    //                 {
    //                     startDate: new Date('08-18-2020'),
    //                     endDate: new Date('08-18-2020'),
    //                     summary: 'กิจกรรมที่ 1'
    //                 }
    //             ]
    //         });
    //     }else{
    //         calendar = $('.calendar-container > .calendar-wrapper').simpleCalendar({
    //             months: [
    //                 'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
    //                 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
    //             ],
    //             days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
    //             displayYear: false,
    //             fixedStartDay: 0,
    //             displayEvent: true,
    //             disableEventDetails: false,
    //             disableEmptyDetails: true,
    //             events: [
    //                 {
    //                     startDate: new Date('08-18-2020'),
    //                     endDate: new Date('08-18-2020'),
    //                     summary: 'กิจกรรมที่ 1'
    //                 }
    //             ],
    //             onMonthChange: function(month, year){
    //                 $('.banner-event').find('.slides').css('--month', month);
    //                 $('.banner-event').find('.slide').removeClass('active');
    //                 $('.banner-event').find('.slide[data-month="'+month+'"]').addClass('active');
    //             }
    //         });
    //     }
    // }

    
    // $('.btn-form-clear').click(function(e){
    //     e.preventDefault();
    //     var target = $(this).closest('form');
    //     if(target.length){
    //         target.find('input, select, textarea').val('');
    //         target.find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
    //     }
    // });

    // Button Toggle
    // $('.btn-toggle').click(function(e){
    //     e.preventDefault();
    //     $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').slideToggle();
    // });

    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });

    // Button Copy
    // var copyReady = true;
    // $('a[data-copy]').click(function(e){
    //     e.preventDefault();
    //     var self = $(this),
    //         target = $('textarea[data-copy="'+self.data('copy')+'"]');
    //     if(copyReady && target.length){
    //         copyReady = false;
    //         target[0].select();
    //         target[0].setSelectionRange(0, target[0].value.length);
    //         document.execCommand('copy');
    //         target.blur();
    //         self.html('<i class="fas fa-check"></i> คัดลอกโค๊ดสำเร็จ');
    //         setTimeout(function(){
    //             copyReady = true;
    //             self.closest('.toggle-target').slideUp();
    //             self.closest('.toggle-target-02').removeClass('active');
    //             self.html('คัดลอกโค้ด');
    //         }, 2000);
    //     }
    // });

    // Shortcode
    // var shortcodeReady = true,
    //     shortcodes = $('.shortcode');
    // if(shortcodes.length){
    //     shortcodes.each(function(){
    //         var self = $(this),
    //             target = self.find('input[type="text"]');
    //         self.find('button').click(function(e){
    //             e.preventDefault();
    //             var thisBtn = $(this);
    //             if(shortcodeReady && target.length){
    //                 shortcodeReady = false;
    //                 thisBtn.html('Copied!');
    //                 target[0].select();
    //                 target[0].setSelectionRange(0, target[0].value.length);
    //                 document.execCommand('copy');
    //                 target.blur();
    //                 setTimeout(function(){
    //                     shortcodeReady = true;
    //                     thisBtn.html('Copy');
    //                 }, 2000);
    //             }
    //         });
    //     });
    // }


    // Special List Toggle
    $('ul.ss-list.ss-list-toggle').find('.btn-icon').click(function(e){
        e.preventDefault();
        $(this).next().slideToggle();
    });


    // About 01
    var about01 = $('.about-01');
    if(about01.length){
        about01.each(function(){
            var self = $(this),
                tabIcons = self.find('.tab-icons .tab-icon'),
                slides = self.find('.slides');
            slides.slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: false,
                autoplay: false, speed: 900, arrows: false, dots: false,
                adaptiveHeight: true, swipe: false, touchMove: false
            });
            tabIcons.click(function(e){
                e.preventDefault();
                tabIcons.removeClass('active');
                $(this).addClass('active');
                slides.slick('slickGoTo', $(this).data('slide'));
            });
        });
    }


    // Banner 01
    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.each(function(){
            var self = $(this),
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: false,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 14000, speed: 900,
                    arrows: false, dots: true, appendDots: self.find('.dots')
                };
            if(self.hasClass('img-only')){
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: false,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 14000, speed: 900,
                    arrows: true, appendArrows: self.find('.arrows'),
                    dots: true, appendDots: self.find('.dots'),
                    adaptiveHeight: false
                };
            }

            var descObj = {};
            self.find('.slide').each(function(i){
                if($(this).data('desc')!==undefined){
                    descObj[i] = $(this).data('desc');
                }
            });

            self.find('.slides').slick(options);
            self.find('.slick-dots > li').each(function(i){
                if(descObj[i]!==undefined){
                    $(this).append('<div class="desc">'+descObj[i]+'</div>');
                }
            });
        });
    }

    
    // Client 01
    var client01 = $('.client-01');
    if(client01.length){
        client01.find('.slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 6, swipeToSlide: true, 
                focusOnSelect: true, autoplay: false, autoplaySpeed: 4000, speed: 600,
                arrows: true, appendArrows: self.find('.arrows'), dots: false,
                responsive: [
                    { breakpoint: 1199.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 2, } },
                ]
            });
        });
    }
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs .tab.tab-main'),
                tabChildren = self.find('.tabs .tab-children'),
                tabContents = self.find('.tab-contents .tab-content');
            tabs.click(function(e){
                var temp = $(this),
                    tabId = temp.data('tab');
                if(tabId!==undefined){
                    var target = tabContents.filter('[data-tab="'+tabId+'"]');
                    if(target.length){
                        e.preventDefault();
                        tabChildren.stop().slideUp();
                        var children = temp.next();
                        if(children.hasClass('tab-children')){
                            children.stop().slideDown();
                        }
                        tabs.removeClass('active');
                        temp.addClass('active');
                        tabContents.removeClass('active');
                        target.addClass('active');
                        AOS.refresh();
                    }
                }
            });
        });
    }


    // Page Loader
    var pageLoader = $('.page-loader');
    if(pageLoader.length){
        window.onload = function(){
            pageLoader.addClass('fade-out');
            setTimeout(function(){
                pageLoader.remove();
                $('body').removeClass('loading');
                AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
        AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });
    }

    // On Resize
    $(window).on('resize', function(){
        AOS.refresh();
    });

});
