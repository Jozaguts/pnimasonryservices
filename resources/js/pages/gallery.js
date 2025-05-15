import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import 'owl.carousel';
$(function () {
    $('.service-detail-carousel').owlCarousel({
        loop:true,
        autoplay:true,
        autoplayTimeout:3000,
        margin:15,
        nav:true,
        navText: ['<i class="fa fa-chevron-left"></i>', '<i class="fa fa-chevron-right"></i>'],
        items:2,
        dots: true,
        animateOut:'fadeOut',
    });
});
