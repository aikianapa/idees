var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    var PosStop = $('.portfolio-nav-stop').offset().top - $(window).height() - 100;
    if (prevScrollpos > currentScrollPos) {
        $('.portfolio-nav').removeClass('portfolio-nav--hide');
    } else {
        if (currentScrollPos < PosStop) {
            $('.portfolio-nav').addClass('portfolio-nav--hide');
        } else {
            $('.portfolio-nav').removeClass('portfolio-nav--hide');
        }
    }
    if (currentScrollPos > PosStop) {
        $('.portfolio-nav').addClass('portfolio-nav--stop').removeClass('portfolio-nav--transition');
    } else {
        if ($('.portfolio-nav').hasClass('portfolio-nav--stop')) {

            $('.portfolio-nav').addClass('portfolio-nav--transition').removeClass('portfolio-nav--stop');
        } else {
            $('.portfolio-nav').removeClass('portfolio-nav--transition')
        }
    }
    prevScrollpos = currentScrollPos;
}