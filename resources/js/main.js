$(function () {

    //burger menu
    var flag = 0;
    $('.menu__burger-button').on('click', function () {
        if (flag == 0) {
            $('#rightside-menu-trigger').attr('class', 'rightside-menu');
            flag = 1;
            console.log('Кнопка нажата, удаления класса');
        } else {
            $('#rightside-menu-trigger').attr('class', 'rightside-menu rightside-menu--closed');
            flag = 0;
            console.log('Кнопка нажата, добавление класса');
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