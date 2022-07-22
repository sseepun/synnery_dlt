$(function(){ 'use strict';

    // Topnav
    var topnav = $('nav.topnav'),
        topnavFilter = $('.topnav-filter'),
        sidenav = $('nav.sidenav'),
        sidenavMenus = sidenav.find('.menu-container'),
        sidenavBtns = $('nav.topnav .sidenav-btn, nav.sidenav .sidenav-btn');
    var backToTop = $('.back-to-top');
    if(topnav.length){

        // On Scroll
        checkOnScroll( $(window).scrollTop() );
        $(window).scroll(function(){
            checkOnScroll( $(this).scrollTop() );
        });

        // Topnav Filter
        topnav.find('.menu.has-children').mouseenter(function(){
            topnavFilter.addClass('active');
        });
        topnav.find('.menu.has-children').mouseleave(function(){
            topnavFilter.removeClass('active');
        });

        // Sidenav buttons
        sidenavBtns.click(function(e){
            e.preventDefault();
            if($('body').hasClass('sidenav-opened')){
                $('html, body').removeClass('sidenav-opened');
                sidenavBtns.find('> *').removeClass('active');
                sidenav.removeClass('active');
            }else{
                $('html, body').addClass('sidenav-opened');
                sidenavBtns.find('> *').addClass('active');
                sidenav.addClass('active');
            }
        });
        $('.sidenav-filter').click(function(e){
            e.preventDefault();
            $('html, body').removeClass('sidenav-opened');
            sidenavBtns.find('> *').removeClass('active');
            sidenav.removeClass('active');
        });

        // Generate sidenav
        sidenavMenus.html( topnav.find('#topnav-menu').html() );
        topnav.find('#topnav-menu .submenu-container').each(function(){
            new SimpleBar($(this)[0], {  });
        });

        sidenavMenus.find('.menu.menu-icon').remove();
        sidenavMenus.find('.has-children').each(function(){
            $(this).append('<div class="dropdown-toggle"><i class="fas fa-chevron-right"></i></div>');
        });
        sidenavMenus.find('.dropdown-toggle').click(function(e){
            e.preventDefault();
            var self = $(this);
            self.toggleClass('active');
            self.prev().slideToggle();
        });

        // Back to Top
        backToTop.click(function(e){
            e.preventDefault();
            $('html, body').stop().animate({ scrollTop: 0 }, 800 );
        });
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

    // Font Sizes
    var bodySize = 16;
    $('.btn.font-size-btn').click(function(e){
        e.preventDefault();
        var s = Number($(this).data('size'));
        if(s==0) bodySize = 16;
        else if(s==1 || s==-1) bodySize += s;
        else bodySize = s;
        $('html, body').css('font-size', bodySize+'px');
    });
    
    // Check on Scroll
    function checkOnScroll(st){
        if(st > 3.0625*bodySize){
            topnav.addClass('sticky');
            backToTop.addClass('active');
        }else{
            topnav.removeClass('sticky');
            backToTop.removeClass('active');
        }
    }

    // Themes
    $('.theme-btn').click(function(e){
        e.preventDefault();
        $('#css-theme').attr('href', 'public/assets/app/css/color-'+$(this).data('theme')+'.css');
        $('body').removeClass('theme-0 theme-1 theme-2');
        $('body').addClass('theme-'+$(this).data('theme'));
    });

    // Theme Selector
    if($('.theme-selector').length){
        var themeTarget = $('#custom-theme');
        if(!themeTarget.length){
            $('head').append('<link rel="stylesheet" id="custom-theme" href="" />');
            themeTarget = $('#custom-theme');
        }
        $('.theme-selector .color').click(function(e){
            e.preventDefault();
            themeTarget.attr('href', $(this).data('src'));
            $('body').removeClass('theme-0 theme-1 theme-2');
            $('body').addClass('theme-0');
        });
    }


    // Date Picker
    $('input.date-picker').each(function(){
        new Datepicker($(this)[0], {});
    });
    
    // Calendar
    var calendar;
    if($('.calendar-container > .calendar-wrapper').length){
        if(!$('.banner-event').length){
            $('.calendar-container > .calendar-wrapper').simpleCalendar({
                months: [
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ],
                days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                displayYear: false,
                fixedStartDay: 0,
                displayEvent: true,
                disableEventDetails: false,
                disableEmptyDetails: true,
                events: [
                    {
                        startDate: new Date('08-18-2020'),
                        endDate: new Date('08-18-2020'),
                        summary: 'กิจกรรมที่ 1'
                    }
                ]
            });
        }else{
            calendar = $('.calendar-container > .calendar-wrapper').simpleCalendar({
                months: [
                    'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 
                    'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
                ],
                days: ['อา', 'จ', 'อ', 'พ', 'พฤ', 'ศ', 'ส'],
                displayYear: false,
                fixedStartDay: 0,
                displayEvent: true,
                disableEventDetails: false,
                disableEmptyDetails: true,
                events: [
                    {
                        startDate: new Date('08-18-2020'),
                        endDate: new Date('08-18-2020'),
                        summary: 'กิจกรรมที่ 1'
                    }
                ],
                onMonthChange: function(month, year){
                    $('.banner-event').find('.slides').css('--month', month);
                    $('.banner-event').find('.slide').removeClass('active');
                    $('.banner-event').find('.slide[data-month="'+month+'"]').addClass('active');
                }
            });
        }
    }

    // Banner Event
    if($('.banner-event').length){
        $('.banner-event').each(function(){
            var bannerSlides = $(this).find('.slides'),
                bannerEvents = bannerSlides.find('.slide');
            bannerEvents.click(function(e){
                e.preventDefault();
                bannerSlides.css('--month', $(this).data('month'));
                bannerEvents.removeClass('active');
                $(this).addClass('active');
                if(calendar!==undefined){
                    var currentMonth = calendar.data('plugin_simpleCalendar').currentDate.getMonth();
                    calendar.data('plugin_simpleCalendar').changeMonth(
                        $(this).data('month') - currentMonth
                    );
                }
            });
        });
    }

    // Toggle Box
    if($('.toggle-box').length){
        $('.toggle-box').each(function(){
            $(this).find('> .toggle-title').click(function(e){
                e.preventDefault();
                $(this).toggleClass('active');
                $(this).next().slideToggle();
            });
        });
    }

    // Button Clear
    $('.btn-clear').click(function(e){
        e.preventDefault();
        var target = $(this).closest('.control').find('> input');
        if(target.length) target.val('');
    });
    $('.btn-form-clear').click(function(e){
        e.preventDefault();
        var target = $(this).closest('form');
        if(target.length){
            target.find('input, select, textarea').val('');
            target.find('input[type="checkbox"], input[type="radio"]').prop('checked', false);
        }
    });

    // Button Toggle
    $('.btn-toggle').click(function(e){
        e.preventDefault();
        $('.toggle-target[data-toggle="'+$(this).data('toggle')+'"]').slideToggle();
    });
    $('.btn-toggle-02').click(function(e){
        e.preventDefault();
        $('.toggle-target-02[data-toggle="'+$(this).data('toggle')+'"]').toggleClass('active');
    });

    // Button Popup
    $('.btn-popup-toggle').click(function(e){
        e.preventDefault();
        $('.popup-container[data-popup="'+$(this).data('popup')+'"]').toggleClass('active');
    });

    // Button Copy
    var copyReady = true;
    $('a[data-copy]').click(function(e){
        e.preventDefault();
        var self = $(this),
            target = $('textarea[data-copy="'+self.data('copy')+'"]');
        if(copyReady && target.length){
            copyReady = false;
            target[0].select();
            target[0].setSelectionRange(0, target[0].value.length);
            document.execCommand('copy');
            target.blur();
            self.html('<i class="fas fa-check"></i> คัดลอกโค๊ดสำเร็จ');
            setTimeout(function(){
                copyReady = true;
                self.closest('.toggle-target').slideUp();
                self.closest('.toggle-target-02').removeClass('active');
                self.html('คัดลอกโค้ด');
            }, 2000);
        }
    });

    // ฺButton Clear Form
    $('.btn-clear-form').click(function(e){
        e.preventDefault();
        var targetForm = $(this).closest('form');
        targetForm.find('input, textarea').val('');
    });


    // Shortcode
    var shortcodeReady = true,
        shortcodes = $('.shortcode');
    if(shortcodes.length){
        shortcodes.each(function(){
            var self = $(this),
                target = self.find('input[type="text"]');
            self.find('button').click(function(e){
                e.preventDefault();
                var thisBtn = $(this);
                if(shortcodeReady && target.length){
                    shortcodeReady = false;
                    thisBtn.html('Copied!');
                    target[0].select();
                    target[0].setSelectionRange(0, target[0].value.length);
                    document.execCommand('copy');
                    target.blur();
                    setTimeout(function(){
                        shortcodeReady = true;
                        thisBtn.html('Copy');
                    }, 2000);
                }
            });
        });
    }


    // Swiper
    var swiperContainers = $('.swiper-container[data-swiper]');
    if(swiperContainers.length){
        swiperContainers.each(function(){
            var self = $(this),
                dataClass = 'swiper-'+self.data('swiper');
            self.addClass(dataClass);
            self.find('.swiper-pagination').addClass(dataClass);
            new Swiper('.swiper-container.'+dataClass, {
                effect: 'coverflow',
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: 'auto',
                observer: true,
                observeParents: true,
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 0.8,
                    slideShadows: true,
                },
                pagination: {
                    el: '.swiper-pagination.'+dataClass,
                },
            });
        });
    }


    // About 01
    var about01 = $('.about-01');
    if(about01.length){
        var about01Ready = true;
        about01.each(function(){
            var self = $(this),
                teamSelectors = self.find('.team-selector');
            teamSelectors.click(function(e){
                e.preventDefault();
                var thisSelf = $(this);
                if(about01Ready){
                    about01Ready = false;
                    
                    var temp = $('.about-01-target[data-team="'+thisSelf.data('team')+'"]');
                    $('.about-01-target.active').addClass('out');
                    setTimeout(function(){
                        $('.about-01-target').removeClass('active in out');
                        temp.addClass('active in');
                        setTimeout(function(){
                            temp.removeClass('in');
                            about01Ready = true;
                        }, 50);
                    }, 450);

                    var k = teamSelectors.index(this),
                        count = 0;
                    teamSelectors.removeClass('pos-0 pos-1 pos-2 pos-3');
                    thisSelf.addClass('pos-0');
                    teamSelectors.each(function(i, d){
                        if(i!=k){
                            count++;
                            $(d).addClass('pos-'+count);
                        }
                    });
                }
            });

        });
    }


    // Banner 01
    var banner01 = $('.banner-01');
    if(banner01.length){
        banner01.each(function(){
            var self = $(this),
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, 
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
                    arrows: false, dots: true, appendDots: self.find('.dots')
                };
            if(self.hasClass('img-only')){
                options = {
                    centerMode: true, centerPadding: 0, slidesToShow: 1, 
                    focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 800,
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

    
    // Call to Action 02
    var call02 = $('.call-02');
    if(call02.length){
        call02.find('.slide-container').each(function(){
            var self = $(this);
            self.find('> .slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 6, 
                focusOnSelect: true, autoplay: true, autoplaySpeed: 4000, speed: 600,
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


    // Content 01
    var content01 = $('.content-01');
    if(content01.length){
        content01.each(function(){
            var self = $(this),
                contentTabs = self.find('.content-tabs > .tab'),
                contents = self.find('.contents > .content');
            contentTabs.click(function(e){
                e.preventDefault();
                contentTabs.removeClass('active');
                $(this).addClass('active');
                contents.removeClass('active');
                contents.filter('[data-id="'+$(this).data('id')+'"]').addClass('active');
                AOS.refresh();
            });
        });
    }


    // Content 03
    var content03 = $('.content-03');
    if(content03.length){
        content03.each(function(){
            var self=  $(this);
            self.find('.slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 3, 
                focusOnSelect: true, autoplay: false,
                arrows: true, appendArrows: self.find('.arrows'), dots: false,
                responsive: [
                    { breakpoint: 991.98, settings: { slidesToShow: 2, } },
                    { breakpoint: 767.98, settings: { slidesToShow: 1, } },
                ]
            });
        });
    }


    // Content 07
    var content07 = $('.content-07');
    if(content07.length){
        content07.each(function(){
            var self=  $(this);
            self.find('.slides').slick({
                centerMode: true, centerPadding: 0, slidesToShow: 1, 
                focusOnSelect: true, autoplay: false,
                arrows: true, appendArrows: self.find('.arrows'), 
                dots: true, appendDots: self.find('.dots'),
            });
        });
    }

    
    // FAQ 01
    var faq01 = $('.faq-01');
    if(faq01.length){
        faq01.each(function(){
            $(this).find('.question').click(function(e){
                e.preventDefault();
                var self = $(this);
                self.toggleClass('active');
                self.next().slideToggle();
            });
        });
    }
    

    // Tab Container
    var tabContainers = $('.tab-container');
    if(tabContainers.length){
        tabContainers.each(function(){
            var self = $(this),
                tabs = self.find('.tabs > .tab'),
                tabContents = self.find('.tab-contents > .tab-content');
            tabs.click(function(e){
                e.preventDefault();
                tabs.removeClass('active');
                $(this).addClass('active');
                tabContents.removeClass('active');
                tabContents.filter('[data-tab="'+$(this).data('tab')+'"]').addClass('active');

                if(self.hasClass('tab-container-02')){
                    self.find('.slides').slick('setPosition');
                }
                
                AOS.refresh();
            });

            // Tab Container 02
            if(self.hasClass('tab-container-02')){
                self.find('.slide-container').each(function(){
                    var self2 = $(this);
                    self2.find('> .slides').slick({
                        centerMode: false, centerPadding: 0, slidesToShow: 3, slidesToScroll: 1,
                        focusOnSelect: true, autoplay: false, swipeToSlide: true,
                        arrows: true, appendArrows: self2.find('.arrows'), dots: false,
                        responsive: [
                            { breakpoint: 991.98, settings: { slidesToShow: 2, } },
                            { breakpoint: 767.98, settings: { slidesToShow: 1, } },
                        ]
                    });
                });
            }
        });
    }


    // Page Loader
    if($('.page-loader').length){
        window.onload = function(){
            $('.page-loader').addClass('fade-out');
            setTimeout(function(){
                $('.page-loader').remove();
                $('body').removeClass('loading');
            }, 1350);
        }
    }else{
        $('body').removeClass('loading');
    }

    
    // AOS Animation
    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 15 });

});
