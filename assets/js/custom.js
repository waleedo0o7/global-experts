$(function () {
    initNewsSlider();
    openMobileMenu();
    closeMobileMenu();

    AOS.init();

    $('[data-fancybox]').fancybox({
        loop: true
    });

});

function initNewsSlider() {
    const swiper = new Swiper('.news-swiper', {
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,


        pagination: {
            el: '.news-pagination',
            type: 'bullets',
            clickable: true
        },

        breakpoints: {
            992: {
                slidesPerView: 2,
            },
        }
    });
}

function openMobileMenu() {
    $(".open-mobile-menu").on("click", function () {
        $(".navbar .navbar-nav").addClass("show")
    });
}

function closeMobileMenu() {
    $(".close-mobile-menu").on("click", function () {
        $(".navbar .navbar-nav").removeClass("show")
    });
}