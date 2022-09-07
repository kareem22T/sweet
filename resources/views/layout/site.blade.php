<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- icon lib --}}
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    {{-- css files --}}
    <!-- Link Swiper's CSS -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/front/main.css?v=7.2') }}">
    <title>Sweet</title>
</head>
<body id="home">
    @include('front.includes.navbar')
    @yield('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('assets/js/front/main.js?v=3.07') }}"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 15,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },breakpoints: {
                // when window width is >= 320px
                300: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                // when window width is >= 480px
                600: {
                slidesPerView: 2,
                spaceBetween: 15
                },
                // when window width is >= 640px
                1000: {
                slidesPerView: 3,
                spaceBetween: 15
                }
            }
        });

    </script>

    <script>
        var swiper2 = new Swiper(".mySwiper2", {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        }
        });
    </script>

    <script>
        var swiper3 = new Swiper(".mySwiper3", {
            slidesPerView: 1,
            spaceBetween: 15,
            slidesPerGroup: 1,
            loop: true,
            loopFillGroupWithBlank: true,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },breakpoints: {
                // when window width is >= 320px
                300: {
                slidesPerView: 1,
                spaceBetween: 10,
                },
                // when window width is >= 480px
                690: {
                slidesPerView: 2,
                spaceBetween: 15
                },
                // when window width is >= 640px
                1080: {
                slidesPerView: 3,
                spaceBetween: 15
                }
            }
        });

    </script>

</body>
</html>
