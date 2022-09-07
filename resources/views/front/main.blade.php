@extends('layout.site')

@section('content')
    {{-- =================================================================================== --}}
    {{-- start header --}}
    <header>
        <div>
            <div class="container">

                <div class="text">
                    <h1>WELCOME TO SWEET</h1>
                    <ul>
                        <li>We are ready for your all events.</li>
                        <li>We've the best prices you will see.</li>
                        <li>Just <span>order now.</span></li>
                    </ul>
                    <p>
                        There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words
                    </p>
                    <a href="#contact">Leave us a message</a>
                </div>

                <img src="{{ asset('assets/images/header-vector.svg') }}" alt="">

            </div>
        </div>
    </header>

    {{-- =================================================================================== --}}
    {{-- start Our services --}}
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>OUR SERVICES</h1>
    </div>

    <section class="our-services">

        <div class="container">

            <div class="quoetation">

                <div>
                    <img src="{{ asset('assets/images/services-main.svg') }}" alt="">
                    <p class="desc">
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi.
                    </p>
                </div>

                <div class="q-parent">
                    <img src="{{ asset('assets/images/quoet.svg') }}" alt="">
                </div>

            </div>

            <div class="contact-btn">
                <a href="">Contact us today</a>
            </div>

            <!-- Swiper -->
            <div class="slider-container">
                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">

                        @php
                            $sliderHeadings =
                            ['WEDDINGS', 'Corporate Events', 'BIRTHDAYS', 'GOURMET', 'HEALTHY OPTIONS', 'PASTRIES'];

                            $sliderimgs =
                            ['home-slide-1', 'home-slide-2', 'home-slide-3', 'home-slide-4', 'home-slide-5', 'home-slide-6'];
                        @endphp

                        @foreach (array_combine($sliderHeadings, $sliderimgs) as $x => $y)

                            <div class="swiper-slide serv-slide">
                                <h1>{{ $x }}</h1>
                                <div class="img"><img src="{{ asset('assets/images/' . $y . '.jpg') }}" alt=""></div>
                                <p>
                                    Lorem Ipsuet ipsu Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non.
                                </p>
                                <a href="">
                                    MORE
                                </a>
                            </div>

                        @endforeach

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

                <div class="swiper-button-next swiper-btn"><i class='bx bx-chevron-right'></i></div>
                <div class="swiper-button-prev swiper-btn"><i class='bx bx-chevron-left'></i></div>

            </div>

        </div>

    </section>

    {{-- =================================================================================== --}}
    {{-- start about us --}}
    <div id="about"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>ABOUT US</h1>
    </div>


    <section class="about-us">

        <div class="container">

            <div>

                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>
                <div class="img"></div>

                <div class="text">

                    <h1>Baking Delicious cakes since 1990</h1>
                    <p>
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget,Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non Doloreiur qui commolu ptatemp dolupta orem retibusam andigen Ibu lum orci eget, viverra elit. Aliquam erat volut pat phas ellus ac sodales felis tiam non metus.
                    </p>
                    <p>
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget,Fusce mollis imperdiet interdum donec eget metus auguen unc vel lorem ispuet Ibu lum orci eget, viverra elit liquam erat volut pat phas ellus ac sodales Lorem ipsum dolor sit amet, consectetur adipisicing elit uasi quidem minus id omnis.
                    </p>

                </div>

            </div>

        </div>

        <div class="container">

            <div class="card-items">

                <div class="item">
                    <h1>Social Responsability</h1>
                    <p>
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                    </p>
                </div>

                <div class="item">
                    <h1>Mission Statement</h1>
                    <p>
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                    </p>
                </div>

                <div class="item">
                    <h1>Value Added Services</h1>
                    <p>
                        Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget.
                    </p>
                </div>

            </div>

        </div>

        <div class="container">
            <!-- Swiper -->
            <div class="slider-container">
                <div class="swiper mySwiper">

                    <div class="swiper-wrapper">

                        @php
                            $sliderHeadings =
                            ['MADE WITH LOVE', 'Seasonal Pastries', 'Event Catering', 'Gluten Free Options', '100% Homemade'];

                            $sliderimgs =
                            ['about-slide-1', 'about-slide-2', 'about-slide-3', 'about-slide-4', 'about-slide-5'];
                        @endphp

                        @foreach (array_combine($sliderHeadings, $sliderimgs) as $x => $y)

                            <div class="swiper-slide">
                                <img src="{{ asset('assets/images/' . $y . '.svg') }}" alt="">
                                <h1>{{ $x }}</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.
                                </p>
                            </div>

                        @endforeach

                    </div>

                    <div class="swiper-pagination"></div>


                </div>

                <div class="swiper-button-next swiper-btn"><i class='bx bx-chevron-right'></i></div>
                <div class="swiper-button-prev swiper-btn"><i class='bx bx-chevron-left'></i></div>

            </div>

        </div>

    </section>
    {{-- =================================================================================== --}}
    {{-- start Menu --}}
    <div id="blog"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>Latest Blog Posts</h1>
    </div>

    <section class="blog">

        <div class="container">
            <!-- Swiper -->
            <div class="slider-container">
                <div class="swiper mySwiper3">

                    <div class="swiper-wrapper">

                    </div>

                    <div class="swiper-pagination"></div>

                </div>

                <div class="swiper-button-next swiper-btn"><i class='bx bx-chevron-right'></i></div>
                <div class="swiper-button-prev swiper-btn"><i class='bx bx-chevron-left'></i></div>

            </div>

        </div>

    </section>

    {{-- =================================================================================== --}}
    {{-- start Menu --}}
    <div id="menu"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>Menu</h1>
    </div>

    <section class="menu">

        <div class="container">

            <div class="swiper mySwiper2">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="page">

                            <div class="thumbanil" style="background-image: url({{ asset('assets/images/menu-1.jpg?v=1') }})">
                                <h1>Cakes & Pies</h1>

                            </div>
                                @foreach ($items as $item)

                                    @if ($item->category_id == 1)
                                        <div class="panel panel-default">

                                            <div class="panel-heading">
                                                <span>{{ $item->name }}</span>
                                                <span>{{ $item->price }}$</span>
                                            </div>

                                            <div class="panel-body">
                                                {{ $item->description }}
                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="page">

                            <div class="thumbanil" style="background-image: url({{ asset('assets/images/menu-2.jpg') }})">
                                <h1>Pastries</h1>
                            </div>

                                @foreach ($items as $item)

                                    @if ($item->category_id == 2)
                                        <div class="panel panel-default">

                                            <div class="panel-heading">
                                                <span>{{ $item->name }}</span>
                                                <span>{{ $item->price }}$</span>
                                            </div>

                                            <div class="panel-body">
                                                {{ $item->description }}
                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="page">

                            <div class="thumbanil" style="background-image: url({{ asset('assets/images/menu-3.jpg?v=1') }})">
                                <h1>Sweets</h1>
                            </div>

                                @foreach ($items as $item)

                                    @if ($item->category_id == 3)
                                        <div class="panel panel-default">

                                            <div class="panel-heading">
                                                <span>{{ $item->name }}</span>
                                                <span>{{ $item->price }}$</span>
                                            </div>

                                            <div class="panel-body">
                                                {{ $item->description }}
                                            </div>

                                        </div>
                                    @endif
                                @endforeach

                        </div>
                    </div>
                </div>
                <div class="swiper-button-next swiper-btn"><i class='bx bx-chevron-right'></i></div>
                <div class="swiper-button-prev swiper-btn"><i class='bx bx-chevron-left'></i></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section>

    {{-- =================================================================================== --}}
    {{-- start Gallary --}}
    <div id="gallary"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>Gallary</h1>
    </div>

    <section class="gallary">

        <div class="options">
            <a href="">All</a>
            <a href="">Cakes</a>
            <a href="">Pastries</a>
            <a href="">Sweets</a>
        </div>

        <div class="container">

            @php
                $gallary_items = ['gallary-1', 'gallary-2', 'gallary-3', 'gallary-4', 'gallary-5', 'gallary-6', 'gallary-7', 'gallary-8', 'gallary-9', 'gallary-10', 'gallary-11', 'gallary-12', ]
            @endphp

            @foreach ($gallary_items as $gallary_item)

                <div class="gallary-item">
                    <img src="{{ asset('assets/images/' . $gallary_item . '.jpg') }}" alt="">
                    <p>Your Caption Here.. Lorem ipsum dolor.</p>
                </div>

            @endforeach

        </div>

    </section>
    {{-- =================================================================================== --}}
    {{-- start our prices --}}
    <div id="prices"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>Our Prices</h1>
    </div>

    <section class="prices">

        <div class="container">

            <div class="item">

                <h1>BASIC EVENT</h1>
                <h1>$100</h1>

                <ul>
                    <li>20 Pastries</li>
                    <li>2 cakes</li>
                    <li>30 Cupcakes</li>
                    <li>Perfect for Small Events</li>
                    <li>Serves up to 20 people</li>
                </ul>

                <a href="#contact">CONTACT US</a>

            </div>

            <div class="item">

                <h1>MEDIUM EVENT</h1>
                <h1>$250</h1>

                <ul>
                    <li>50 Pastries</li>
                    <li>6 cakes</li>
                    <li>70 Cupcakes</li>
                    <li>Perfect for Medium Events</li>
                    <li>Serves up to 40 people</li>
                </ul>

                <a href="#contact">CONTACT US</a>

            </div>

            <div class="item">

                <h1>MEGA EVENT</h1>
                <h1>$550</h1>

                <ul>
                    <li>100 Pastries</li>
                    <li>10 cakes</li>
                    <li>130 Cupcakes</li>
                    <li>Perfect for Mega Events</li>
                    <li>Serves up to 80 people</li>
                </ul>

                <a href="">CONTACT US</a>

            </div>

        </div>

    </section>

    {{-- =================================================================================== --}}
    {{-- start Contact us --}}
    <div id="contact"></div>
    <div class="head">
        <img src="{{ asset('assets/images/head-icon.svg') }}" alt="">
        <h1>Contact us</h1>
    </div>

    <section class="contact">

        <div class="bg">
            <div class="container">

                <div class="heading">
                    <h1>Get in touch with us</h1>
                    <p>
                        Consectetur adipiscing elit Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Aenean eu leo quam. Pellentesque ornare sem lacinia.
                    </p>
                </div>

                <div class="form-map">

                    <form action="">
                        <input type="text" name="name" placeholder="Name">
                        <input type="email" name="email" placeholder="Email ID">
                        <input type="text" name="subject" placeholder="Subject">
                        <textarea name="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                        <input type="submit" value="Send Message">
                    </form>
                    <div class="line"></div>
                    <div class="map">

                        <iframe src="https://www.google.com/maps/d/embed?mid=1n-v4_hQ062poAWrPdnRdfPoo5l4&hl=en&ehbc=2E312F"></iframe>

                    </div>

                </div>

                <hr>

                <div class="other">

                    <div>
                        <i class='bx bx-been-here'></i>
                        <h1>Imaginary cake City 2002</h1>
                    </div>

                    <div>
                        <i class='bx bx-phone'></i>
                        <h1>+ OO 123456789</h1>
                    </div>

                    <div>
                        <i class='bx bx-envelope' ></i>
                        <h1>email@company.com</h1>
                    </div>

                </div>

            </div>
        </div>

    </section>

    {{-- =================================================================================== --}}
    {{-- start footer --}}

    <footer>
        <div class="container">
            <ul>
                <a href=""><li><img src="{{ asset('assets/images/footer-logo.svg') }}" alt=""></li></a>
                <li>
                    Placerat a ultricies a, posuere a nibh. Fusce mollis imperdiet interdum donec eget metus auguen unc vel mauris ultricies, vest ibulum orci eget,Ibu lum orci eget, viverra elit. ellus ac sodales felis tiam non metus.
                </li>
            </ul>

            <ul class="accounts">
                <li>Our Accounts</li>
                <a href="https://www.facebook.com" target=”_blank”><li><i class='bx bxl-facebook' ></i></li></a>
                <a href="https://www.instagram.com" target=”_blank”><li><i class='bx bxl-instagram' ></i></li></a>
                <a href="https://www.youtube.com" target=”_blank”><li><i class='bx bxl-youtube' ></i></li></a>
                <a href="https://www.twitter.com" target=”_blank”><li><i class='bx bxl-twitter' ></i></li></a>
            </ul>

            <ul>
                <li>Links</li>
                <a href="#home"><li>Home</li></a>
                <a href="#about"><li>About-us</li></a>
                <a href="http://localhost/sweet-2/blog/"><li>Blog</li></a>
                <a href="#menu"><li>Menu</li></a>
                <a href="#gallary"><li>Gallary</li></a>
                <a href="#prices"><li>Prices</li></a>
                <a href="#contact"><li>Contact-us</li></a>
            </ul>

            <ul>
                <li>Contact</li>
                <li><i class='bx bx-been-here'></i> Imaginary cake City 2002</li>
                <li><i class='bx bx-phone'></i> + OO 123456789</li>
                <li><i class='bx bx-envelope' ></i> email@company.com</li>
            </ul>

        </div>

        <div class="container">

            <hr>

            <p id="footer">
                All Rights Reserved &copy; Sweet {{ date("Y") }}
            </p>
        </div>

    </footer>

    <div class="topYbottom">
        <a href="#home"><i class='bx bx-chevron-up'></i></a>
        <a href="#footer"><i class='bx bx-chevron-down'></i></a>

    </div>

@endsection
