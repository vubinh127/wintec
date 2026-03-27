document.addEventListener("DOMContentLoaded", function () {
    const header = document.querySelector(".header");
    const body = document.body;
    let ticking = false;

    function handleScroll() {
        const scrollTop = window.scrollY;

        if (scrollTop > 50) {
            if (!header.classList.contains("sticky-header")) {
                header.classList.remove("returning");
                header.classList.add("sticky-header");
            }
            header.classList.add("scrolled");
            body.classList.add("has-sticky-header");
        } else {
            if (header.classList.contains("sticky-header")) {
                header.classList.add("returning");
                setTimeout(() => {
                    header.classList.remove("sticky-header");
                    header.classList.remove("returning");
                }, 100);
            }
            header.classList.remove("scrolled");
            body.classList.remove("has-sticky-header");
        }

        ticking = false;
    }

    window.addEventListener("scroll", function () {
        if (!ticking) {
            window.requestAnimationFrame(handleScroll);
            ticking = true;
        }
    });

    window.addEventListener("resize", handleScroll);
    handleScroll();
});

document.addEventListener("DOMContentLoaded", function () {
    const mobileMenuButton = document.getElementById("mobile-menu-button");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileMenuCloseBtn = document.getElementById("mobile-menu-popup-close-btn");

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener("click", function () {
            mobileMenu.classList.toggle("hidden");
        });
        mobileMenuCloseBtn.addEventListener("click", function () {
            mobileMenu.classList.add("hidden");
        });
    }
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".mobile-accordion-toggle").forEach(function (btn) {
        btn.addEventListener("click", function () {
            var body = this.nextElementSibling;
            var arrow = this.querySelector(".accordion-arrow");
            body.classList.toggle("open");
            arrow.classList.toggle("open");
        });
    });
});

$(window).on("load", function () {

    $(".ratings .ratings-cards-container").slick({
        prevArrow: $(".ratings-nav-btn.ratings-nav-prev"),
        nextArrow: $(".ratings-nav-btn.ratings-nav-next"),
        zIndex: 1,
        autoplay: true,
        dots: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplaySpeed: 5000,
        responsive: [
            { breakpoint: 1025, settings: { slidesToShow: 2 } },
            { breakpoint: 700,  settings: { centerMode: true, centerPadding: "0", slidesToShow: 1 } },
        ],
    });

    $(".ratings .testimonial-cards-container").slick({
        prevArrow: $(".testimonial-nav-btn.testimonial-nav-prev"),
        nextArrow: $(".testimonial-nav-btn.testimonial-nav-next"),
        zIndex: 1,
        autoplay: true,
        dots: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        autoplaySpeed: 5000,
        responsive: [
            { breakpoint: 1025, settings: { slidesToShow: 2 } },
            { breakpoint: 700,  settings: { centerMode: true, centerPadding: "0", slidesToShow: 1 } },
        ],
    });

    $("[data-x-aos]").each(function (i, el) {
        $(el).attr("data-aos", $(el).data("x-aos"));
    });

    AOS.init({ duration: 650, once: true });
    AOS.refreshHard();
});