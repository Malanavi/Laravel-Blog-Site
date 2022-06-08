$(function () {
    //burger menu
    var flag = 0;
    $('.menu__burger-button').on('click', function () {
        if (flag === 0) {
            $('#rightside-menu-trigger').attr('class', 'rightside-menu');
            flag = 1;
        } else {
            $('#rightside-menu-trigger').attr('class', 'rightside-menu rightside-menu--closed');
            flag = 0;
        }
    });

    //slider
    $('.slider').slick({
        dots: true,
        fade: true,
        autoplay: true
    });

    //scroll to slider
    $('.offer-arrow').on('click', function () {
        var offset = 0;
        $('html, body').animate ({
          scrollTop: $('.slider').offset ().top - offset
        }, 500);
        return false;
    });

    //scroll to advantages
    $('.offer__link').on('click', function () {
        var offset = 0;
        $('html, body').animate ({
          scrollTop: $('.advantages').offset ().top - offset
        }, 500);
        return false;
    });
})
