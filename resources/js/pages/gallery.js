import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';
$(function () {
    $('.service-detail-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:2000,
        margin:30,
        nav:true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        items:1,
        dots: true,
        animateOut:'fadeOut',
    });
});
