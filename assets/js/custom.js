$(function () {
    initNewsSlider();
    initStorySlider();

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

function initStorySlider() {
    const swiper = new Swiper('.story-swiper', {
        direction: 'horizontal',
        loop: true,
        spaceBetween: 10,
        slidesPerView: 1,

        navigation: {
            nextEl: '.story-button-next',
            prevEl: '.story-button-prev',
        },
    });
}

function openMobileMenu() {
    $(".open-mobile-menu").on("click", function () {
        $(".navbar .navbar-nav").addClass("show");
        $("body").addClass("overflow-hidden");
    });
}

function closeMobileMenu() {
    $(".close-mobile-menu").on("click", function () {
        $(".navbar .navbar-nav").removeClass("show");
        $("body").removeClass("overflow-hidden");
    });
}