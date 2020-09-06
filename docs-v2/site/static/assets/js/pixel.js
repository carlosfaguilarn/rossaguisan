/*

=========================================================
* Pixel Pro Bootstrap 4 UI Kit
=========================================================

* Product Page: https://themesberg.com/product/ui-kits/pixel-pro-premium-bootstrap-4-ui-kit
* Copyright 2019 Themesberg (https://www.themesberg.com)

* Coded by https://themesberg.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/

"use strict";
$(document).ready(function () {

    // preloader
    var $preloader = $('.preloader');
    if($preloader.length) {

        const animations = ['oneByOne', 'delayed', 'sync', 'scenario'];

        new Vivus('loader-logo', {duration: 80, type: 'oneByOne'}, function () {

        });

        // $preloader.delay(1500).fadeOut(400);
        $preloader.delay(1500).slideUp();
    }

    // options
    var breakpoints = {
        sm: 540,
        md: 720,
        lg: 960,
        xl: 1140
    };

    var $navbarCollapse = $('.navbar-main .collapse');

    // Collapse navigation
    $navbarCollapse.on('hide.bs.collapse', function () {
        var $this = $(this);
        $this.addClass('collapsing-out');
        $('html, body').css('overflow', 'initial');
    });

    $navbarCollapse.on('hidden.bs.collapse', function () {
        var $this = $(this);
        $this.removeClass('collapsing-out');
    });

    $navbarCollapse.on('shown.bs.collapse', function () {
        $('html, body').css('overflow', 'hidden');
    });

    $('.navbar-main .dropdown').on('hide.bs.dropdown', function () {
        var $this = $(this).find('.dropdown-menu');

        $this.addClass('close');

        setTimeout(function () {
            $this.removeClass('close');
        }, 200);

    });

    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
          $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');
      
        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
          $('.dropdown-submenu .show').removeClass("show");
        });
      
        return false;
    });

    if ($(document).width() >= breakpoints.lg) {
        $('.nav-item.dropdown').hover(function() {
            $(this).find('> .dropdown-toggle').dropdown('toggle');
        },
        function () {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
            $(this).find('> .dropdown-toggle').attr('aria-expanded', 'false');
        });
    
        $('.dropdown-menu a.dropdown-toggle').hover(function() {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
              }
              var $subMenu = $(this).next(".dropdown-menu");
              $subMenu.toggleClass('show');
            
              $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
              });
            
              return false;
        },
        function () {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
            $(this).attr('aria-expanded', false);
        });
    }

    // Headroom - show/hide navbar on scroll
    if ($('.headroom')[0]) {
        var headroom = new Headroom(document.querySelector("#navbar-main"), {
            offset: 0,
            tolerance: {
                up: 0,
                down: 0
            },
        });
        headroom.init();
    }

    // Background images for sections
    $('[data-background]').each(function () {
        $(this).css('background-image', 'url(' + $(this).attr('data-background') + ')');
    });

    $('[data-background-color]').each(function () {
        $(this).css('background-color', $(this).attr('data-background-color'));
    });

    $('[data-color]').each(function () {
        $(this).css('color', $(this).attr('data-color'));
    });

    // Datepicker
    $('.datepicker')[0] && $('.datepicker').each(function () {
        $('.datepicker').datepicker({
            disableTouchKeyboard: true,
            autoclose: false
        });
    });

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Popover
    $('[data-toggle="popover"]').each(function () {
        var popoverClass = '';
        if ($(this).data('color')) {
            popoverClass = 'popover-' + $(this).data('color');
        }
        $(this).popover({
            trigger: 'focus',
            template: '<div class="popover ' + popoverClass + '" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        })
    });

    // Additional .focus class on form-groups
    $('.form-control').on('focus blur', function (e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // NoUI Slider
    if ($(".input-slider-container")[0]) {
        $('.input-slider-container').each(function () {

            var slider = $(this).find('.input-slider');
            var sliderId = slider.attr('id');
            var minValue = slider.data('range-value-min');
            var maxValue = slider.data('range-value-max');

            var sliderValue = $(this).find('.range-slider-value');
            var sliderValueId = sliderValue.attr('id');
            var startValue = sliderValue.data('range-value-low');

            var c = document.getElementById(sliderId),
                d = document.getElementById(sliderValueId);

            noUiSlider.create(c, {
                start: [parseInt(startValue)],
                connect: [true, false],
                //step: 1000,
                range: {
                    'min': [parseInt(minValue)],
                    'max': [parseInt(maxValue)]
                }
            });

        })
    }

    if ($("#input-slider-range")[0]) {
        var c = document.getElementById("input-slider-range"),
            d = document.getElementById("input-slider-range-value-low"),
            e = document.getElementById("input-slider-range-value-high"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            tooltips: true,
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function (a, b) {
            f[b].textContent = a[b]
        })
    }

    if ($("#input-slider-range-2")[0]) {
        var c = document.getElementById("input-slider-range-2"),
            d = document.getElementById("input-slider-range-value-low-2"),
            e = document.getElementById("input-slider-range-value-high-2"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            tooltips: true,
            pips: {
                mode: 'positions',
                values: [0, 25, 50, 75, 100],
                density: 5
            },
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function (a, b) {
            f[b].textContent = a[b]
        })
    }

    if ($("#input-slider-vertical-1")[0]) {
        var c = document.getElementById("input-slider-vertical-1"),
            d = document.getElementById("input-slider-range-value-low-3"),
            e = document.getElementById("input-slider-range-value-high-3"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            tooltips: false,
            orientation: 'vertical',
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function (a, b) {
            f[b].textContent = a[b]
        })
    }

    if ($("#input-slider-vertical-2")[0]) {
        var c = document.getElementById("input-slider-vertical-2"),
            d = document.getElementById("input-slider-range-value-low"),
            e = document.getElementById("input-slider-range-value-high"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            tooltips: true,
            orientation: 'vertical',
            pips: {
                mode: 'positions',
                values: [0, 25, 50, 75, 100],
                density: 5
            },
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function (a, b) {
            f[b].textContent = a[b]
        })
    }

    $(".progress-bar").each(function () {
        $(this).waypoint(function () {
            var progressBar = $(".progress-bar");
            progressBar.each(function (indx) {
                $(this).css("width", $(this).attr("aria-valuenow") + "%");
            });
            $('.progress-bar').css({
                animation: "animate-positive 3s",
                opacity: "1"
            });
        }, {
                triggerOnce: true,
                offset: '60%'
            });
    });

    //Owl Carousel

    $('.basic-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navElement: 'button type="button" aria-label="navigation button link" role="presentation"',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
        navText: [
			'<span class="fas fa-chevron-left"</span>',
			'<span class="fas fa-chevron-right"</span>'
		],
    });

    $('.autoplay-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        items: 3,
        autoplay: true,
        navElement: 'button type="button" aria-label="github social link" role="presentation"',
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
		navText: [
			'<span aria-label="' + 'Previous' + '">&#x2039;</span>',
			'<span aria-label="' + 'Next' + '">&#x203a;</span>'
		],
    });

    $('.news-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navElement: 'button type="button" aria-label="navigation button link" role="presentation"',
        items: 1,
        navText: [
            '<span class="fas fa-caret-left"></span>',
            '<span class="fas fa-caret-right"></span>'
        ]
    });

    $('.pricing-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navElement: 'button type="button" aria-label="github social link" role="presentation"',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        },
        navText: [
            '<span class="fas fa-angle-left"></span>',
            '<span class="fas fa-angle-right"></span>'
        ]
    });

    $('.clients-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navElement: 'button type="button" aria-label="github social link" role="presentation"',
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            }
        },
        navText: [
            '<span class="fas fa-chevron-left"></span>',
            '<span class="fas fa-chevron-right"></span>'
        ]
    });

    $('.blog-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        navElement: 'button type="button" aria-label="github social link" role="presentation"',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        },
        navText: [
            '<span class="fas fa-chevron-left"></span>',
            '<span class="fas fa-chevron-right"></span>'
        ]
    });

    $('.testimonial-carousel').owlCarousel({
        loop: true,
        margin: 8,
        nav: true,
        dots: false,
        navElement: 'button type="button" aria-label="github social link" role="presentation"',
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        },
        navText: [
            '<span class="fas fa-angle-left"></span>',
            '<span class="fas fa-angle-right"></span>'
        ]
    });

    //Chartist

    if($('.line-chart').length) {
        new Chartist.Line('.line-chart', {
            labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            series: [
              [12, 9, 7, 8, 5],
              [2, 1, 3.5, 7, 3],
              [1, 3, 4, 5, 6]
            ]
          }, {
            fullWidth: true,
            chartPadding: {
              right: 40
            },
            plugins: [
                Chartist.plugins.tooltip()
            ]
        });
    }

    if($('.line-chart-filled').length) {
        new Chartist.Line('.line-chart-filled', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8],
            series: [
              [5, 9, 7, 8, 5, 3, 5, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            plugins: [
                Chartist.plugins.tooltip()
            ]
          });
    }

    if($('.bar-chart').length) {
        //Chart 5
          new Chartist.Bar('.bar-chart', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
              [5, 4, 3, 7, 5, 10, 3],
              [3, 2, 9, 5, 4, 6, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end'
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                offset: 0
            }
        });
    }

    if($('.pie-chart').length) {
        var data = {
            series: [30, 40, 10, 20]
          };
          
          var sum = function(a, b) { return a + b };
          
          new Chartist.Pie('.pie-chart', data, {
            labelInterpolationFnc: function(value) {
              return Math.round(value / data.series.reduce(sum) * 100) + '%';
            },            
            low: 0,
            high: 8,
            fullWidth: false,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });         
    }

    if($('.ct-chart-5').length) {
        //Chart 5
          new Chartist.Bar('.ct-chart-5', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
              [5, 4, 3, 7, 5, 10, 3],
              [3, 2, 9, 5, 4, 6, 4]
            ]
          }, {
            low: 0,
            showArea: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end'
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                offset: 0
            }
        });
    }

    if($('.ct-chart-6').length) {
        var chart = new Chartist.Line('.ct-chart-6', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
            series: [
              [1, 5, 2, 5, 4, 3],
              [2, 3, 4, 8, 1, 2],
            ]
          }, {
            low: 0,
            showArea: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end'
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: false,
                showLabel: false,
                offset: 0
            }
            });
          
          chart.on('draw', function(data) {
            if(data.type === 'line' || data.type === 'area') {
              data.element.animate({
                d: {
                  begin: 2000 * data.index,
                  dur: 2000,
                  from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
                  to: data.path.clone().stringify(),
                  easing: Chartist.Svg.Easing.easeOutQuint
                }
              });
            }
        });
    }

    if($('.ct-chart-7').length) {
        var data = {
            series: [30, 40, 10, 20]
          };
          
          var sum = function(a, b) { return a + b };
          
          new Chartist.Pie('.ct-chart-7', data, {
            labelInterpolationFnc: function(value) {
              return Math.round(value / data.series.reduce(sum) * 100) + '%';
            },            
            low: 0,
            high: 8,
            fullWidth: false,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });         
    }

    if($('.ct-chart-8').length) {
        new Chartist.Line('.ct-chart-8', {
            labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
            series: [
              [0, 10, 30, 20, 40, 30, 20]
            ]
          }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
            axisX: {
                // On the x-axis start means top and end means bottom
                position: 'end',
                showGrid: false
            },
            axisY: {
                // On the y-axis start means left and end means right
                showGrid: true,
                showLabel: true,
                labelInterpolationFnc: function(value) {
                    return '$' + (value / 1) + 'k';
                }
            }
          });
    }

    if($('.ct-chart-9').length) {
        var data = {
            series: [30, 40, 10, 20]
          };
          
          var sum = function(a, b) { return a + b };
          
          new Chartist.Pie('.ct-chart-9', data, {
            labelInterpolationFnc: function(value) {
              return Math.round(value / data.series.reduce(sum) * 100) + '%';
            },            
            low: 0,
            high: 8,
            fullWidth: false,
            donut: true,
            donutWidth: 50,
            donutSolid: true,
            startAngle: 270,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });         
    }

    if($('.ct-chart-10').length) {
        new Chartist.Pie('.ct-chart-10', {
            series: [20, 10, 30, 40]
          }, {
            donut: true,
            donutWidth: 60,
            donutSolid: true,
            startAngle: 270,
            total: 200,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            showLabel: true
        });         
    }

    if($('.ct-chart-11').length) {
        // Create a simple bi-polar bar chart
        var chart = new Chartist.Bar('.ct-chart-11', {
            labels: ['W1', 'W2', 'W3', 'W4', 'W5', 'W6', 'W7', 'W8', 'W9', 'W10'],
            series: [
            [1, 2, 4, 8, 6, -2, -1, -4, -6, -2]
            ]
        }, {
            high: 10,
            low: -10,
            plugins: [
                Chartist.plugins.tooltip()
            ],
            axisX: {
            labelInterpolationFnc: function(value, index) {
                return index % 2 === 0 ? value : null;
            }
            }
        });
        
        // Listen for draw events on the bar chart
        chart.on('draw', function(data) {
            // If this draw event is of type bar we can use the data to create additional content
            if(data.type === 'bar') {
            // We use the group element of the current series to append a simple circle with the bar peek coordinates and a circle radius that is depending on the value
            data.group.append(new Chartist.Svg('circle', {
                cx: data.x2,
                cy: data.y2,
                r: Math.abs(Chartist.getMultiValue(data.value)) * 2 + 5
            }, 'ct-slice-pie'));
            }
        });         
    }

    $('#modal-notification').on('shown.bs.modal', function (event) {
        new Chartist.Line('.ct-chart-statistics', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            series: [
                [0, 0, 50, 60, 90, 140, 200, 330, 400, 500, 700, 760, 880, 900, 1000]
            ]
            }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });
    });

    $('#modal-notification-2').on('shown.bs.modal', function (event) {
        new Chartist.Line('.ct-chart-statistics-2', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            series: [
                [0, 0, 50, 60, 90, 140, 200, 330, 400, 500, 700, 760, 880, 900, 1000]
            ]
            }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });
    });

    $('#modal-notification-3').on('shown.bs.modal', function (event) {
        new Chartist.Line('.ct-chart-statistics-3', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            series: [
                [0, 0, 50, 60, 90, 140, 200, 330, 400, 500, 700, 760, 880, 900, 1000]
            ]
            }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });
    });

    $('#modal-notification-4').on('shown.bs.modal', function (event) {
        new Chartist.Line('.ct-chart-statistics-4', {
            labels: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15],
            series: [
                [0, 0, 50, 60, 90, 140, 200, 330, 400, 500, 700, 760, 880, 900, 1000]
            ]
            }, {
            low: 0,
            showArea: true,
            fullWidth: true,
            plugins: [
              Chartist.plugins.tooltip()
            ],
        });
    });
    
    //vmap
    if($('#vmap').length) {
        $('#vmap').vectorMap(
          {
              map: 'usa_en',
              backgroundColor: '#ffffff',
              borderColor: '#ffffff',
              borderOpacity: 0,
              borderWidth: 1,
              color: '#e9ecef',
              enableZoom: false,
              hoverColor: '#0E1B48',
              hoverOpacity: null,
              normalizeFunction: 'linear',
              scaleColors: ['#b6d6ff', '#005ace'],
              selectedColor: '#0E1B48',
              selectedRegions: null,
              showTooltip: true,
              onLabelShow: function(event, label, code)
              {
                label.text(label.text() + ': ' + Math.floor((Math.random() * 10000) + 1) + ' session');
              }
          });
    }

    // When in viewport
    $('[data-toggle="on-screen"]')[0] && $('[data-toggle="on-screen"]').onScreen({
        container: window,
        direction: 'vertical',
        doIn: function () {
            //alert();
        },
        doOut: function () {
            // Do something to the matched elements as they get off scren
        },
        tolerance: 200,
        throttle: 50,
        toggleClass: 'on-screen',
        debug: false
    });

    // Scroll to anchor with scroll animation
    $('[data-toggle="scroll"]').on('click', function (event) {
        var hash = $(this).attr('href');
        var offset = $(this).data('offset') ? $(this).data('offset') : 0;

        // Animate scroll to the selected section
        $('html, body').stop(true, true).animate({
            scrollTop: $(hash).offset().top - offset
        }, 600);

        event.preventDefault();
    });

    //Rotating Cards
    $(document).on('click', '.card-rotate .btn-rotate', function () {
        var $rotating_card_container = $(this).closest('.rotating-card-container');

        if ($rotating_card_container.hasClass('hover')) {
            $rotating_card_container.removeClass('hover');
        } else {
            $rotating_card_container.addClass('hover');
        }
    });

    //CounterUp
    $('.counter').counterUp({
        delay: 10,
        time: 1000,
        offset: 70,
        beginAt: 100,
        formatter: function (n) {
            return n.replace(/,/g, '.');
        }
    });

    //Countdown
    $('#clock').countdown('2020/10/10').on('update.countdown', function (event) {
        var $this = $(this).html(event.strftime(''
            + '<span>%-w</span> week%!w '
            + '<span>%-d</span> day%!d '
            + '<span>%H</span> hr '
            + '<span>%M</span> min '
            + '<span>%S</span> sec'));
    });

    //Parallax
    $('.jarallax').jarallax({
        speed: 0.2
    });

    $('#loadOnClick').click(function () {
        var $button = $(this);
        var $loadContent = $('#extraContent');
    var $allLoaded = $('#allLoadedText');
        $button.addClass('btn-loading');
        $button.attr('disabled', true);

        setTimeout(function () {
            $loadContent.show();
            $button.hide();
            $allLoaded.show();
        }, 1500);
    });

    //Smooth scroll
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 500,
        speedAsDuration: true
    });

    // Equalize height to the max of the elements
    if ($(document).width() >= breakpoints.lg) {

        // object to keep track of id's and jQuery elements
        var equalize = {
            uniqueIds: [],
            elements: []
        };

        // identify all unique id's
        $('[data-equalize-height]').each(function () {
            var id = $(this).attr('data-equalize-height');
            if (!equalize.uniqueIds.includes(id)) {
                equalize.uniqueIds.push(id)
                equalize.elements.push({ id: id, elements: [] });
            }
        });

        // add elements in order
        $('[data-equalize-height]').each(function () {
            var $el = $(this);
            var id = $el.attr('data-equalize-height');
            equalize.elements.map(function (elements) {
                if (elements.id === id) {
                    elements.elements.push($el);
                }
            });
        });

        // equalize
        equalize.elements.map(function (elements) {
            var elements = elements.elements;
            if (elements.length) {
                var maxHeight = 0;

                // determine the larget height
                elements.map(function ($element) {
                    maxHeight = maxHeight < $element.outerHeight() ? $element.outerHeight() : maxHeight;
                });

                // make all elements with the same [data-equalize-height] value
                // equal the larget height
                elements.map(function ($element) {
                    $element.height(maxHeight);
                })
            }
        });
    }

    // update target element content to match number of characters
    $('[data-bind-characters-target]').each(function () {
        var $text = $($(this).attr('data-bind-characters-target'));
        var maxCharacters = parseInt($(this).attr('maxlength'));
        $text.text(maxCharacters);

        $(this).on('keyup change', function (e) {
            var string = $(this).val();
            var characters = string.length;
            var charactersRemaining = maxCharacters - characters;
            $text.text(charactersRemaining);
        })
    });

    // copy docs
    $('.copy-docs').on('click', function () {
        var $copy = $(this);
        var htmlEntities = $copy.parents('.nav-wrapper').siblings('.card').find('.tab-pane:last-of-type').html();
        var htmlDecoded = $('<div/>').html(htmlEntities).text().trim();

        var $temp = $('<textarea>');
        $('body').append($temp);
        console.log(htmlDecoded);
        $temp.val(htmlDecoded).select();
        document.execCommand('copy');
        $temp.remove();

        $copy.text('Copied!');
        $copy.addClass('copied');

        setTimeout(function () {
            $copy.text('Copy');
            $copy.removeClass('copied');
        }, 1000);
    });

    $('.current-year').text(new Date().getFullYear());

});   
