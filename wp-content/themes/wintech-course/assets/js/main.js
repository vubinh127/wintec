jQuery(function ($) {
    var $header = $('.header');
    var $body = $('body');
    var ticking = false;

    function handleScroll() {
        var scrollTop = $(window).scrollTop();

        if (scrollTop > 50) {
            if (!$header.hasClass('sticky-header')) {
                $header.removeClass('returning').addClass('sticky-header');
            }
            $header.addClass('scrolled');
            $body.addClass('has-sticky-header');
        } else {
            if ($header.hasClass('sticky-header')) {
                $header.addClass('returning');
                setTimeout(function () {
                    $header.removeClass('sticky-header returning');
                }, 100);
            }
            $header.removeClass('scrolled');
            $body.removeClass('has-sticky-header');
        }

        ticking = false;
    }

    $(window).on('scroll', function () {
        if (!ticking) {
            window.requestAnimationFrame(handleScroll);
            ticking = true;
        }
    });

    $(window).on('resize', handleScroll);
    handleScroll();
});


jQuery(function ($) {
    var $mobileMenuBtn = $('#mobile-menu-button');
    var $mobileMenu = $('#mobile-menu');
    var $mobileMenuCloseBtn = $('#mobile-menu-popup-close-btn');

    if ($mobileMenuBtn.length && $mobileMenu.length) {
        $mobileMenuBtn.on('click', function () {
            $mobileMenu.toggleClass('hidden');
        });
        $mobileMenuCloseBtn.on('click', function () {
            $mobileMenu.addClass('hidden');
        });
    }
});


jQuery(function ($) {
    $(document).on('click', '.mobile-accordion-toggle', function () {
        $(this).next().toggleClass('open');
        $(this).find('.accordion-arrow').toggleClass('open');
    });
});


jQuery(window).on('load', function () {

    jQuery('.ratings .ratings-cards-container').slick({
        prevArrow: jQuery('.ratings-nav-btn.ratings-nav-prev'),
        nextArrow: jQuery('.ratings-nav-btn.ratings-nav-next'),
        zIndex: 1,
        autoplay: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        responsive: [
            { breakpoint: 1025, settings: { slidesToShow: 2 } },
            { breakpoint: 700, settings: { centerMode: true, centerPadding: '0', slidesToShow: 1 } },
        ],
    });

    jQuery('.ratings .testimonial-cards-container').slick({
        prevArrow: jQuery('.testimonial-nav-btn.testimonial-nav-prev'),
        nextArrow: jQuery('.testimonial-nav-btn.testimonial-nav-next'),
        zIndex: 1,
        autoplay: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplaySpeed: 5000,
        responsive: [
            { breakpoint: 1025, settings: { slidesToShow: 2 } },
            { breakpoint: 700, settings: { centerMode: true, centerPadding: '0', slidesToShow: 1 } },
        ],
    });

    jQuery('[data-x-aos]').each(function () {
        jQuery(this).attr('data-aos', jQuery(this).data('x-aos'));
    });

    AOS.init({ duration: 650, once: true });
    AOS.refreshHard();
});


jQuery(function ($) {
    var $overlay = $('#modal-auth');

    $('#open-auth-modal').on('click', function () {
        $overlay.addClass('is-open');
        $('body').css('overflow', 'hidden');
    });

    $('#close-auth-modal').on('click', function () {
        closeModal();
    });

    $overlay.on('click', function (e) {
        if ($(e.target).is($overlay)) {
            closeModal();
        }
    });

    $(document).on('keydown', function (e) {
        if (e.key === 'Escape') closeModal();
    });

    function closeModal() {
        $overlay.removeClass('is-open');
        $('body').css('overflow', '');
    }

    $(document).on('click', '.auth-tab', function () {
        var target = $(this).data('tab');
        $('.auth-tab').removeClass('auth-tab--active');
        $('.auth-pane').removeClass('auth-pane--active');
        $(this).addClass('auth-tab--active');
        $('#pane-' + target).addClass('auth-pane--active');
    });

    $(document).on('click', '.auth-password-toggle', function () {
        var $field = $(this).closest('.auth-password-field');
        var $input = $field.find('.auth-input');
        var $eyeOn = $(this).find('.eye-icon');
        var $eyeOff = $(this).find('.eye-off-icon');

        if ($input.attr('type') === 'password') {
            $input.attr('type', 'text');
            $eyeOn.hide();
            $eyeOff.show();
        } else {
            $input.attr('type', 'password');
            $eyeOn.show();
            $eyeOff.hide();
        }
    });
});