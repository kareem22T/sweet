
$(function() {
    $('.bx-menu').on('click', function () {
        $(this).toggleClass('bx-x', 'slow')

        if ($('.menu-links').is(':visible'))
        $('.menu-links').slideToggle()
        else
        $('.menu-links').css('display','flex').hide().slideToggle()
    })
    if ($(window).innerWidth() > 850) {
    }
    $(window).on('scroll onload', function() {
        if ($(this).scrollTop() > 50)
            $('nav').addClass('shadow')
        else
            $('nav').removeClass('shadow')

        let links = ['home', 'about', 'blog', 'menu', 'gallary', 'prices', 'contact'];

        for (let i = 0; i < links.length; i++) {
            const element = links[i];
            if ($(this).scrollTop() >= $('#' + links[i]).offset().top - $( window ).height() / 2) {
                $('.' + links[i] + '-link').addClass('active')
                $('.' + links[i] + '-link').siblings().removeClass('active')
            }else if ($(this).scrollTop().prev >= $('#' + links[i]).offset().top - $( window ).height() / 2){
                $('.' + links[i] + '-link').prev.addClass('active')
                $('.' + links[i] + '-link').prev.siblings().removeClass('active')
            }
        }
    });

    $('.main-b-link').on('click', function () {
        if ($(this).find('ul').is(':visible'))
        $(this).find('ul').fadeToggle()
        else
        $(this).find('ul').css('display','flex').hide().fadeToggle()
    })
    $('header, section, .head, .container:not(.nav-container)').on('click', function () {
        $('.main-b-link').find('ul').fadeOut()
    })

    //get latest post from blog
    $.ajax({
        method: 'POST',
        url: 'http://localhost/sweet-2/blog/wp-content/themes/sweet/index.php',
        data: {getLatestPosts: true},
        success: function(response) {
            $(response).appendTo('.blog .swiper-wrapper')
        }
    })

})
