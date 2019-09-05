$(document).ready(function () {

    //JS FOR HOVER SIDE MENU CATEGORY ON HEADER HOMEPAGE
    $('.nav-side-menu>ul.list-group').hover(function () {
        $('#overlay').addClass('active');
        $('.overlay-slide-banner').addClass('active');
        $('.top-header').addClass('active');
        $('.middle-header').addClass('active');
        $('.nav-indotrading-category').addClass('active');
    },
    function () {
        $('#overlay').removeClass('active');
        $('.overlay-slide-banner').removeClass('active');
        $('.top-header').removeClass('active');
        $('.middle-header').removeClass('active');
        $('.nav-indotrading-category').removeClass('active');
    });

    //JS SLIDE BANNER
    var swiper = new Swiper('.bannerHome', {
        slidesPerView: 1,
            effect: 'fade',
            autoplay: 
            {
                delay: 7000,
            },
            pagination: {
                el: '.slide-pagination',
                clickable: true
            },
        nextButton: '.nav-slide-next',
        prevButton: '.nav-slide-prev',
        slidesPerView: 1,
        //spaceBetween: 30,
        //loop: true,
    });

    //JS STICKY HEADER
    $(window).scroll(function () {
        var sticky = $('.middle-header'),
            scroll = $(window).scrollTop();
        if (scroll >= 100) sticky.addClass('fixed-header');
        else sticky.removeClass('fixed-header');
    });

    //JS PRODUCT PREMIUM
    var mySwiper = new Swiper('.product-premium', {
        nextButton: '.nav-product-premium-prev',
        prevButton: '.nav-product-premium-next',
        slidesPerView: 5,
        paginationClickable: true,
        spaceBetween: 0,
        simulateTouch: false
    });

    //JS NEW COMPANY
    var mySwiper = new Swiper('.new-company-slide', {
        nextButton: '.nav-new-company-prev',
        prevButton: '.nav-new-company-next',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        simulateTouch: false
    });

    //JS TESTIMONI SELLER
    var mySwiper = new Swiper('.testimoni-seller-slide', {
        nextButton: '.nav-testimoni-seller-prev',
        prevButton: '.nav-testimoni-seller-next',
        slidesPerView: SlidesPerViewTestimonial,
        paginationClickable: true,
        spaceBetween: 20,
        simulateTouch: false
    });

    //JS TESTIMONI BUYER
    var mySwiper = new Swiper('.testimoni-buyer-slide', {
        nextButton: '.nav-testimoni-buyer-prev',
        prevButton: '.nav-testimoni-buyer-next',
        slidesPerView: SlidesPerViewTestimonial,
        paginationClickable: true,
        spaceBetween: 20,
        simulateTouch: false
    });
});



