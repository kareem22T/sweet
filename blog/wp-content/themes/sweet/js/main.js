let $ = jQuery.noConflict();
$(function(){

    setTimeout(function() {
        $('.post').slice(0,3).css('display', 'flex').hide().fadeIn(1500)
        $('.header').css('display', 'grid').hide().fadeIn(1500)
        $('.side-bar').fadeIn(1500)
    }, 300);

    if ($('.post').not(':visible').length >= 2)
        $('.show-more').css('display', 'block')
    else
        $('.show-more').css('display', 'none')

    $('.show-more').on('click', function(e) {
        e.preventDefault()
        $('.post').not(':visible').slice(0,2).css('display', 'flex').hide().fadeIn(1500)

        if ($('.post').not(':visible').length >= 2)
            $('.show-more').css('display', 'block')
        else
            $('.show-more').css('display', 'none')

    })

    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 50)
            $('.main-nav').addClass('shadow')
        else
            $('.main-nav').removeClass('shadow')
    })

    $('.bx-menu').on('click', function () {
        $(this).toggleClass('bx-x', 'slow')

        if ($('.menu-links').is(':visible'))
        $('.menu-links').slideToggle()
        else
        $('.menu-links').css('display','flex').hide().slideToggle()
    })

    $('.main').parents('.post').insertAfter('header .main-post >div')

    if ($(window).innerWidth() <= 855) {
        $('.main-post .post').insertBefore('.posts .post:first-child')
    }

    // =========================================================
    // start single post
    if ($("#cancel-comment-reply-link").is(':visible'))
        $('#reply-title').html($('#reply-title').html().replace('Comment', 'Reply'))
    else
        $('#reply-title').html($('#reply-title').html().replace('Reply', 'Comment'))

    $('.comment-notes').remove()

    $('.comment-form p:not(.comment-form-cookies-consent)').each(function () {
        $(this).find('label').children('span').remove()
        $(this).find('input, textarea').attr('placeholder', $(this).find('label').text())
        $(this).find('label').remove()
        $('.comment-form-url').remove()
        $('.comment-form-comment').insertAfter('.comment-form-email')
    })

    $('#cancel-comment-reply-link').prepend("<i class='bx bx-x-circle'></i>")

    $('.says').remove()
    $('.fn').append(':')

    // add mentioned user
    $('.children li >div >p').each(function() {

        let mentionedUser = $(this).parent().parent().parent().parent().find('.comment-author').first()

        $(this).prepend('<span>@'+ mentionedUser.text().split(':')[0].trim() + ' </span>')

        $(this).find('span').on('click', function() {

            $([document.documentElement, document.body]).animate({
                scrollTop: mentionedUser.parent().parent().offset().top - 80
            }, 200);

            mentionedUser.parent().parent().css('border', '1px solid red')

            setTimeout(function() {
                mentionedUser.parent().parent().css('border', '1px solid #8080801c')
            }, 500);

        })

        $(this).find('span').css({
            'color' : '#3ca0f6',
            'cursor' : 'pointer',
        })

    })

    // extract depth
    $('.children').each(function() {
        $(this).insertAfter($(this).parent('li:not(.depth-1)'))
    })

    // hide replies and show btn to show them
    $('.comment').each(function() {
        if ($(this).children('.children').length > 0) {
            $(this).children('.children').css('display', 'none')
            $(this).find('>div .reply')
            .after("<span class='show-reply'><i class='bx bxs-down-arrow'></i>" +
                    $(this).children('.children').find('li').length + ' Replies' +
                    '</span>')
        }
    })
    $('.show-reply').on('click', function() {
        $(this).parents('.comment').last().children('.children').toggle('medium')
        $(this).find('i').toggleClass('bxs-up-arrow')
    })

    $('.comment-awaiting-moderation').text('"Your comment is waiting to approve"')

    // next and prev posts
    $('.nav-previous a').prepend("<i class='bx bx-chevron-left'></i>")
    $('.nav-next a').append("<i class='bx bx-chevron-right'></i>")

    if($('.nav-links').children('div').length < 2) {
        if ($('.nav-links').children('div').hasClass('nav-next')) {
            $('.nav-links').children('div').before('<div></div>')
        }else{
            $('.nav-links').children('div').after('<div></div>')
        }
    }

});
