var current_sub;

function setScrollTop() {
    const scrollTopButton = document.querySelector('.up-button');

    if (scrollTopButton) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 1) {
                scrollTopButton.classList.add('up-button--active');
            } else {
                scrollTopButton.classList.remove('up-button--active');
            }
        });

        scrollTopButton.addEventListener('click', (event) => {
            //            event.preventDefault();
            //            window.scrollTo(0, 0);
        });
    }
}





function show_pop(pop) {
    if ($(".popup[pop=" + pop + "]").is(':visible')) return;
    overlay2()
    $(".popup[pop=" + pop + "]").show()
}

function hide_pop(pop) {


    if (pop == undefined) {
        $(".popup").each(function(n, item) {
            pop = $(item).attr('pop')
            hide_pop(pop)
        })
    } else {
        overlay_remove()
        $(".popup[pop=" + pop + "]").hide()
    }

}

function sub_show(sub) {

    $('.sub-menus').css('z-index', 310)


    if (!$('.sub-menu[sub=' + sub + ']').attr('shown') || $('.sub-menu[sub=' + sub + ']').attr('shown') == "0") {
        $('.sub-menu[sub=' + sub + ']').css('opacity', 0)
            //console.log( '.sub-menu[sub='+sub+']')
        $('.sub-menu[sub=' + sub + ']').css('visibility', "visible")
        $('.sub-menu[sub=' + sub + ']').animate({ 'opacity': 1 }, 200)
        $('.sub-menu[sub=' + sub + ']').attr('shown', 1)
            //	    $( '.sub-menu[sub='+sub+']').height( $(document).height() - 50)
            //	    console.log(sub)

        ww = $('.sub-menu[sub=' + sub + '] .sub-inner').outerWidth()
        console.log(ww)

        ww2 = $('.menu-item[sub=' + sub + ']').outerWidth()
        console.log(ww2)
        var left = $('.menu-item[sub=' + sub + ']').offset().left - (ww - ww2) / 2

        if (left <= 0) { left = 0; }

        console.log(left)
        $('.sub-menu[sub=' + sub + '] .sub-inner').css('left', left)
        current_sub = sub
    }
}

function sub_hide(sub, flag) {

    $('.sub-menus').css({ 'z-index': '-1' })

    if (sub == undefined) {
        $(".menu-item.sub").each(function(n, item) {
            var sub = $(item).attr('sub')

            if (sub) {
                sub_hide(sub, true)
            }
        })
    } else {
        if ($('.sub-menu[sub=' + sub + ']').attr('shown')) {
            if (flag) {
                $('.sub-menu[sub=' + sub + ']').animate({ 'opacity': 0 }, 0)
            } else {
                $('.sub-menu[sub=' + sub + ']').animate({ 'opacity': 0 }, 200)
            }
            $('.sub-menu[sub=' + sub + ']').css({ visibility: "hidden" })
            $('.sub-menu[sub=' + sub + ']').attr('shown', 0)
        }
        current_sub = "";
        //	    overlay_remove()
    }



}



$(function() {

    setScrollTop();


    $('.mob-list li.sub a').click(function() {
        $(this).parent().find('ul').toggle(200)
        $(this).toggleClass('open');
    })

    $('.zayav-button').click(function() {
        show_pop('zayavka')
    })


    $(document).on('click', '.krest', function() {
        hide_pop()
    })


    $(document).on('click', '#soverlay2', function() {
        const popups = document.querySelector('.popups');
        popups.classList.remove('popups--hide');
        hide_pop();
    })


    $(document).on('click', '.gamburger', function() {
        $('.mob-menu-wrapper').toggleClass('d-none')
        $(this).addClass("hidden")
        $('.nav-krest').removeClass('hidden')
    })

    $(document).on('click', '.krest', function() {
        $('.mob-menu-wrapper').toggleClass('d-none')
        $('.nav-krest').addClass('hidden')
        $('.gamburger').removeClass("hidden")
    })



    $('.menu-item.sub').hover(function() {
        var sub = $(this).attr('sub');
        sub_show(sub)
    }, function() {
        //	    var sub = $(this).attr('sub');
        //	    if(!$(".sub-menu[sub="+sub+"]:hover").length ){
        //		sub_hide(sub)
        //	    }
    })

    $('.menu-item').hover(function() {
        var sub = $(this).attr('sub');

        if (sub != current_sub) {
            sub_hide()
        }
    })

    $('.sub-inner').hover(function() {

    }, function() {

        sub_hide()

    })

    $('.sub-menu').hover(function(e) {
        if (e.target == this)
            sub_hide()

    })



    $(".slider").slick({
        dots: false,
        infinite: true,
        slidesToShow: 1,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 6000,
        responsive: [{
            breakpoint: 520,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 6000,

            }
        }]

    });


    $(function() {

        $('.slider').append('<div class="slider-counter"></div>')

        $(".slider").on("afterChange", function(event, slick, currentSlide, nextSlide) {
            $(".slider-counter").text((currentSlide + 1) + '/' + $('.slider').slick('getSlick').slideCount);
            $(".slick-next").toggleClass('moved')
            $(".slick-prev").toggleClass('moved')
        });

        $(".slider").trigger("afterChange", [$('.slider').slick('getSlick'), 0, 2])

        document.querySelectorAll('textarea').forEach(el => {
            el.style.height = el.setAttribute('style', 'height: ' + el.scrollHeight + 'px');
            el.classList.add('auto');
            el.addEventListener('input', e => {
                el.style.height = 'auto';
                el.style.height = (el.scrollHeight) + 'px';
            });
        });

        $('.form__text-field').each(function(n, item) {
            pl = $(item).attr('placeholder')
            idd = $(item).attr('id')

            $(item).after('<label class="form__text-field-label" for="' + idd + '">' + pl + "</label>")
                //	    $(item).attr('placeholder' ,   "")
        })


        $('.prikrepit-wrapper').click(function() {
            $(this).prev().trigger('click')
        })





        /*
        	$('input').focus(function(){
        	    $(this).next().animate( {top: "-20px" , 'font-size' : '10px'} , 10 );
        	})

        	$('input').blur(function(){
        	    if( !$(this).val() ){
        		$(this).next().animate( {top: "1px"  , 'font-size' : '14px'} , 10 );
        	    }
        	})
        */




    })




    $('.up-button').click(function() {
        event.preventDefault();
        $("html,body").animate({ scrollTop: 0 }, 300)

        //  window.scrollTo(0, 0);
    })




    var lastScrollTop = 0;
    $(window).scroll(function(event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.header--menu').addClass('bottom-scroll')
            $('.up-button').removeClass('full-btn')
        } else {
            $('.header--menu').removeClass('bottom-scroll')
            $('.up-button').addClass('full-btn')
        }
        lastScrollTop = st;
    });

    $('.modal__wrap').scroll(function(event) {
        var st = $(this).scrollTop();
        if (st > lastScrollTop) {
            $('.header--form').addClass('bottom-scroll')
        } else {
            $('.header--form').removeClass('bottom-scroll')
        }
        lastScrollTop = st;
    });


    $(window).scroll(function() {
        if (!$(window).scrollTop() == 0) {
            $('.main-section__button.js-form-open.mobile-button').addClass('mobile-anim')
            $('.main-section__button.js-form-open.pc-button').addClass('mobile-hidden')
        } else {
            $('.main-section__button.js-form-open.mobile-button').removeClass('mobile-anim')
            $('.main-section__button.js-form-open.pc-button').removeClass('mobile-hidden')
        }
    });
})



function overlay(animation) {

    if (animation == undefined) {
        animation = true;
    } else {
        animation = false;
    }

    if (animation) {
        $('body').append(
            '<div id="soverlay"> <div id="load_animation_top" > </div> <div id="load_animation">' +
            '<center> <img src="../img/loadingAnimation.gif" />  </center>' +
            '</div></div>'
        )
    } else {
        $('body').append(
            '<div id="soverlay"></div>'
        )
    }
}

function overlay2(animation) {
    $('body').append(
        '<div id="soverlay2"></div>'
    )
}




function overlay_remove() {
    $('#soverlay').remove();
    $('#soverlay2').remove();
}