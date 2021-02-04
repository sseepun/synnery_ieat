$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavDropdownToggles = topnav.find('.topnav-dropdown-toggle'),
        topnavDropdown = $('.topnav-dropdown'),
        topnavDropdownWrappers = topnavDropdown.find('.dropdown-wrapper');
    var sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavToggles = $('nav.topnav .sidenav-toggle, nav.sidenav .sidenav-toggle');
    if(topnav.length){

        // Topnav Dropdown Toggle
        topnavDropdownToggles.click(function(e){
            e.preventDefault();
            var self = $(this),
                parent = self.parent();
            if(parent.hasClass('active')){
                parent.removeClass('active');
                topnavDropdown.removeClass('active');
                topnavDropdown.stop().slideUp();
            }else{
                topnavDropdownToggles.parent().removeClass('active');
                parent.addClass('active');
                topnavDropdownWrappers.removeClass('active');
                topnavDropdownWrappers
                    .filter('[data-dropdown="'+self.data('dropdown')+'"]')
                    .addClass('active');
                topnavDropdown.addClass('active');
                topnavDropdown.stop().slideDown();
            }
        });
        topnavDropdown.find('> .close-filter').click(function(e){
            e.preventDefault();
            topnavDropdownToggles.parent().removeClass('active');
            topnavDropdown.removeClass('active');
            topnavDropdown.stop().slideUp();
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

    // Footer
    $('nav.footer .tag').click(function(e){
        e.preventDefault();
        $('nav.footer .tag-target').slideToggle(600);
    });

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

    // Dropzone
    $('.input-dropzone').each(function(){
        $(this).dropzone({
            url: 'writable',
            acceptedFiles: 'image/*,application/pdf',
            autoProcessQueue: false,
            uploadMultiple: true,
            parallelUploads: 5,
            maxFiles: 5,
            maxFilesize: 5,
            addRemoveLinks: true,
        });
    });
    

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
    var shortcodeReady = true,
        shortcodes = $('.shortcode-container');
    if(shortcodes.length){
        shortcodes.each(function(){
            var self = $(this),
                target = self.find('textarea');
            self.find('.btn-code-copy').click(function(e){
                e.preventDefault();
                var thisBtn = $(this);
                if(shortcodeReady && target.length){
                    shortcodeReady = false;
                    thisBtn.html('[คัดลอกแล้ว]');
                    target[0].select();
                    target[0].setSelectionRange(0, target[0].value.length);
                    document.execCommand('copy');
                    target.blur();
                    setTimeout(function(){
                        shortcodeReady = true;
                        thisBtn.html('[คัดลอก]');
                    }, 1500);
                }
            });
        });
    }


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

    // About 02
    var about02 = $('.about-02');
    if(about02.length){
        about02.each(function(){
            var self = $(this),
                aboutContainers = self.find('.about-container');
            aboutContainers.not('.active').find('> .about-body').hide();
            aboutContainers.find('> .about-header').click(function(e){
                e.preventDefault();
                var parent = $(this).parent();
                parent.toggleClass('active');
                if(parent.hasClass('active')) parent.find('> .about-body').slideDown();
                else parent.find('> .about-body').slideUp();
                AOS.refresh();
            });
        });
    }
    
    // About 03
    var about03 = $('.about-03');
    if(about03.length){
        // about03.each(function(){

            var self = about03,
                slideContainer = self.find('.slide-container');
            slideContainer.find('.slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: false,
                adaptiveHeight: true, swipe: true, touchMove: true,
                autoplay: false, speed: 600, 
                arrows: true, appendArrows: slideContainer.find('.arrows'), 
                dots: true, appendDots: slideContainer.find('.dots'),
                customPaging: function(slide, i){
                    return '<button data-slide="'+i+'">'
                            +'<img src="public/assets/app/images/icon/pin.png" alt="Icon" />'
                            +'<div class="y">'
                                +'<span>พ.ศ.</span>'
                                +(2551+i)
                            +'<div>'
                        +'</button>';
                }
            });

            var awards = self.find('.awards .award'),
                li = slideContainer.find('.dots li');
            var clickReady = true,
                activeSlide = 0;
            li.each(function(j, k){
                if(j<5) $(k).attr('data-class', 'active');
            });
            awards.each(function(j, k){
                if(j==0) $(k).attr('data-pos', '0');
                else if(j==1) $(k).attr('data-pos', '1');
                else if(j==2) $(k).attr('data-pos', '2');
                else if(j==3) $(k).attr('data-pos', '3');
                else $(k).attr('data-pos', 'after');
            });

            li.click(function(){
                if(clickReady){
                    clickReady = false;
                    var i = $(this).find('> button').data('slide');
                    award03changeSlide(i);
                    setTimeout(function(){
                        clickReady = true;
                    }, 600);
                }
            });
            slideContainer.find('.slides').on('beforeChange', function(e, s, c, i){
                award03changeSlide(i);
                setTimeout(function(){
                    clickReady = true;
                }, 900);
            });

            li.mouseenter(function(){
                if(clickReady){
                    clickReady = false;
                    var i = $(this).find('> button').data('slide');
                    slideContainer.find('.slides').slick('slickGoTo', i)
                    setTimeout(function(){
                        clickReady = true;
                    }, 600);
                }
            });

            function award03changeSlide(i){
                activeSlide = i;
                var start = i - 2,
                    end = i + 2;
                while(start < 0){ start += 1; end += 1; }
                while(end > li.length-1){ start -= 1; end -= 1; }
                li.attr('data-class', '');
                li.each(function(j, k){
                    if(start<=j && j<=end) $(k).attr('data-class', 'active');
                });
                awards.each(function(j, k){
                    if(j<i) $(k).attr('data-pos', 'before');
                    else if(j==i) $(k).attr('data-pos', '0');
                    else if(j==i+1) $(k).attr('data-pos', '1');
                    else if(j==i+2) $(k).attr('data-pos', '2');
                    else if(j==i+3) $(k).attr('data-pos', '3');
                    else $(k).attr('data-pos', 'after');
                });
            }

        // });
    }
    
    // About 04
    var about04 = $('.about-04');
    if(about04.length){
        var about04Ready = true,
            teams = about04.find('.director'),
            targets = about04.find('.about-target');
        teams.click(function(e){
            e.preventDefault();
            var target = targets.filter('[data-team="'+$(this).data('team')+'"]');
            if(about04Ready && target.length){
                about04Ready = false;
                teams.removeClass('active');
                $(this).addClass('active');
                targets.filter('.active').addClass('out');
                setTimeout(function(){
                    targets.removeClass('active in out');
                    target.addClass('active in');
                    setTimeout(function(){
                        target.removeClass('in');
                        about04Ready = true;
                    }, 50);
                }, 450);
            }
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
                    arrows: true, appendArrows: self.find('.arrows'),
                    dots: true, appendDots: self.find('.dots')
                };
            if(self.hasClass('img-only')){
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: false,
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 14000, speed: 900,
                    arrows: true, appendArrows: self.find('.arrows'),
                    dots: true, appendDots: self.find('.dots'),
                    adaptiveHeight: true
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

    // Content 04
    var content04 = $('.content-04');
    if(content04.length){
        content04.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-container'),
                slideNav = self.find('.slide-nav');
            if(slideContainer.length){
                slideContainer.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 1, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: true, appendArrows: slideContainer.find('.arrows'), dots: false,
                    adaptiveHeight: true, asNavFor: slideNav.find('> .slides'),
                });
                slideNav.find('> .slides').slick({
                    centerMode: true, centerPadding: 0, slidesToShow: 9, infinite: true,
                    focusOnSelect: true, autoplay: false, speed: 900,
                    arrows: false, dots: false, asNavFor: slideContainer.find('> .slides'),
                    responsive: [
                        { breakpoint: 1299.98, settings: { slidesToShow: 8, } },
                        { breakpoint: 1199.98, settings: { slidesToShow: 7, } },
                        { breakpoint: 991.98, settings: { slidesToShow: 6, } },
                        { breakpoint: 767.98, settings: { slidesToShow: 5, } },
                        { breakpoint: 575.98, settings: { slidesToShow: 3, } },
                    ]
                });
            }
        });
    }

    // Content 06
    var content06 = $('.content-06');
    if(content06.length){
        content06.each(function(){
            var self = $(this),
                slideContainer = self.find('.slide-container');
            slideContainer.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 7, infinite: true,
                focusOnSelect: true, autoplay: false, speed: 600, swipeToSlide: true,
                dots: false, arrows: true, appendArrows: slideContainer.find('> .arrows'),
                responsive: [
                    { breakpoint: 1299.98, settings: { slidesToShow: 6, } },
                    { breakpoint: 1199.98, settings: { slidesToShow: 5, } },
                    { breakpoint: 991.98, settings: { slidesToShow: 4, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 3, } },
                    { breakpoint: 575.98, settings: { slidesToShow: 2, } },
                ]
            });
        });
    }


    // FAQ 01
    var faq01 = $('.faq-01');
    if(faq01.length){
        faq01.each(function(){
            var self = $(this);
            self.find('.faq > .faq-header .title').click(function(e){
                e.preventDefault();
                var parent = $(this).closest('.faq');
                parent.toggleClass('active');
                parent.find('> .faq-body').slideToggle();
            });
        });
    }

    
    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this);
            var tabs = self.find('.tabs .tab'),
                tabChildren = self.find('.tabs .tab-children'),
                tabContents = self.find('.tab-contents .tab-content');
            if(self.hasClass('tab-global')){
                var temp = $('.tab-container.tab-global-target');
                tabContents = temp.find('.tab-contents .tab-content');
            }
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

                        var slides = target.find('.slide-container > .slides');
                        if(slides.length){
                            slides.slick('setPosition');
                        }

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
