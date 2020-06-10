@extends('layouts.app')

@section('head')
    <style>
        .overlay,
        .card-img-overlay {
            background: #0c2642b9;
            height: 100%
        }
        .ongoing-overlay {
            display: none;
        }
        #ongoing .slick-slide.slick-current.slick-active.slick-center .ongoing-overlay {
            display: block;
            position: absolute;
            height: 35%;
            width: 96%;
            background: #006DFFd6;
            bottom: 53px;
            left: 7px;
            /* right: 29px; */
            border-bottom-left-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        #ongoing .slick-slide.slick-current.slick-active.slick-center {
            transform: scale3D(2,2,2);
        }
        #ongoing .slick-slide.slick-current.slick-active.slick-center img {
            box-shadow: 0 0rem 20rem -3.5rem rgba(0, 0, 0, 0.342) !important;
            /* transform: scale3d(1.2,1.2,1.2); */
        }
        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
            max-height: 100%;
            margin-top: 5rem;
            margin-bottom: 4rem;
        }

        .slick-prev:before, .slick-next:before {
            font-family: "slick";
            font-size: 20px;
            line-height: 1;
            color: #006DFF;
            opacity: 0.75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .poverty-facts .slick-prev:before, .poverty-facts .slick-next:before {
            font-family: "slick";
            font-size: 20px;
            line-height: 1;
            color: #eef4fa;
            opacity: 0.75;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .slick-dots li button:before {
            position: absolute;
            top: 0;
            left: 0;
            content: "\2022";
            width: 20px;
            height: 20px;
            font-family: "slick";
            font-size: 10px;
            line-height: 20px;
            text-align: center;
            color: #006DFF;
            opacity: 0.25;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .poverty-facts .slick-dots li button:before {
            position: absolute;
            top: 0;
            left: 0;
            content: "\2022";
            width: 20px;
            height: 20px;
            font-family: "slick";
            font-size: 10px;
            line-height: 20px;
            text-align: center;
            color: #eef4fa;
            opacity: 0.25;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .slick-dots li.slick-active button:before {
            color: rgb(4, 106, 238);
            opacity: 0.75;
        }
        .poverty-facts .slick-dots li.slick-active button:before {
            color: #eef4fa;
            opacity: 0.75;
        }
        .carousel-inner > span {
            position: absolute;
            height: 100%;
            width: 100%;
            background: #006DFF60;
            z-index: 1;
        }
        .carousel-item {
            position: relative;
        }
        .carousel-item > img {
            height: 100vh;
        }
        .carousel-caption {
            /* left: -10%; */
        }
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 9;
        }
        #home svg {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 9;
        }
        #home svg .Desktop path {
            fill: #006DFFd6;
        }

        #poverty-facs svg {
            width: 100%
        }

        #upcoming-event svg {
            /* position: absolute; */
        }

        #upcoming-event .card .overflow-hidden img {
            transform: scale(1.5);
            transition: .8s all
        }

        #upcoming-event .card:hover .overflow-hidden img {
            transform: scale(1);
        }
        #latest-news svg {
            width: 100%;
        }
        @media (max-width: 1024px) {
            .carousel-caption {
                left: 10%;
            }

            .display-3 {
                font-size: 3.5rem;
                font-weight: 300;
                line-height: 1.2;
            }
            .h2 {
                font-size: 1.575rem;
            }
        }
        @media (max-width: 768px) {
            #home svg {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    {{-- Home --}}
    <section id="home" class="h-100">
        <div id="carouselExampleCaptions" class="carousel slide h-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner h-100">
                <span></span>
                <div class="carousel-item active h-100">
                    <img src="{{ asset('images/1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-ellipsis">
                        <h5 class="display-3 font-weight-bold text-left">First slide label</h5>
                        <p class="h2">Nulla vitae elit libero, a pharetra augue mollis interdum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, enim!</p>
                    </div>
                    <svg viewBox="0 0 45482 12758" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="Desktop" transform="translate(2.000000, -11396.000000)" fill="#006DFF" stroke="#979797">
                                <path d="M9138.95276,12632.0575 C16473.9991,8058.98982 29365.6255,17657.6313 29365.6255,17657.6313 C29365.6255,17657.6313 35104.1699,22051.7451 38867.2505,21595.8445 C41375.971,21291.9108 43579.8874,19911.6508 45479,17455.0643 L45479,24153 L-1,24153 L-1,22927.7667 C2422.39221,18351.9822 5469.04313,14920.0791 9138.95276,12632.0575 Z" id="Path"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('images/2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-ellipsis">
                        <h5 class="display-3 font-weight-bold text-left">Second slide label</h5>
                        <p class="h2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                    <svg viewBox="0 0 45482 12758" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-2" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="Desktop" transform="translate(2.000000, -11396.000000)" fill="#006DFF" stroke="#979797">
                                <path d="M9138.95276,12632.0575 C16473.9991,8058.98982 29365.6255,17657.6313 29365.6255,17657.6313 C29365.6255,17657.6313 35104.1699,22051.7451 38867.2505,21595.8445 C41375.971,21291.9108 43579.8874,19911.6508 45479,17455.0643 L45479,24153 L-1,24153 L-1,22927.7667 C2422.39221,18351.9822 5469.04313,14920.0791 9138.95276,12632.0575 Z" id="Path"></path>
                            </g>
                        </g>
                    </svg>
                </div>
                <div class="carousel-item h-100">
                    <img src="{{ asset('images/3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block text-ellipsis">
                        <h5 class="display-3 font-weight-bold text-left">Third slide label</h5>
                        <p class="h2">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</pc>
                    </div>
                    <svg viewBox="0 0 45482 12758" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-3" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g class="Desktop" transform="translate(2.000000, -11396.000000)" fill="#006DFF" stroke="#979797">
                                <path d="M9138.95276,12632.0575 C16473.9991,8058.98982 29365.6255,17657.6313 29365.6255,17657.6313 C29365.6255,17657.6313 35104.1699,22051.7451 38867.2505,21595.8445 C41375.971,21291.9108 43579.8874,19911.6508 45479,17455.0643 L45479,24153 L-1,24153 L-1,22927.7667 C2422.39221,18351.9822 5469.04313,14920.0791 9138.95276,12632.0575 Z" id="Path"></path>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    {{-- ./Home --}}
    {{-- Ongoing Actuality --}}
    <section id="ongoing" class="py-5 mt-4">
        <div class="container">
            <div class="row ongoing">
                <div class="px-2 py-5 ongoing-item" data-aos="zoom-in">
                    <span class="ongoing-overlay p-3">
                        <a href="#" class="card-link">
                            <h5 class="text-white text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                            <p class="text-white small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptates?</p>
                        </a>
                    </span>
                    <img src="{{asset('images/1.png')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="px-2 py-5 ongoing-item" data-aos="zoom-in">
                    <span class="ongoing-overlay p-3">
                        <a href="#" class="card-link">
                            <h5 class="text-white text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                            <p class="text-white small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptates?</p>
                        </a>
                    </span>
                    <img src="{{asset('images/2.png')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="px-2 py-5 ongoing-item" data-aos="zoom-in">
                    <span class="ongoing-overlay p-3">
                        <a href="#" class="card-link">
                            <h5 class="text-white text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                            <p class="text-white small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptates?</p>
                        </a>
                    </span>
                    <img src="{{asset('images/3.png')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="px-2 py-5 ongoing-item" data-aos="zoom-in">
                    <span class="ongoing-overlay p-3">
                        <a href="#" class="card-link">
                            <h5 class="text-white text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                            <p class="text-white small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptates?</p>
                        </a>
                    </span>
                    <img src="{{asset('images/1.png')}}" alt="" class="img-fluid rounded">
                </div>
                <div class="px-2 py-5 ongoing-item" data-aos="zoom-in">
                    <span class="ongoing-overlay p-3">
                        <a href="#" class="card-link">
                            <h5 class="text-white text-center text-uppercase font-weight-bold">Lorem ipsum dolor sit</h5>
                            <p class="text-white small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, voluptates?</p>
                        </a>
                    </span>
                    <img src="{{asset('images/2.png')}}" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>
    {{-- ./Ongoing Actuality --}}
    {{-- Poverty Fact --}}
    <svg viewBox="0 0 1389 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Desktop" transform="translate(0.000000, -740.000000)" fill="#006DFF" stroke="#006DFF">
                <path d="M3.25913446,778.157973 C8.79297912,777.717797 14.3102885,777.280252 19.8110625,776.845337 C629.787983,728.617943 1087.27067,729.055488 1392.25913,778.157973 C2053.03353,884.541226 -682.534155,832.707688 3.25913446,778.157973 Z" id="Path"></path>
            </g>
        </g>
    </svg>
    <section id="poverty-facts" class="py-5" style="background: #006DFF">
        <div class="container-fluid">
            <div class="col-12">
                <div>
                    <h2 class="display-3 font-weight-bold text-center text-white">Poverty Facts</h2>
                </div>
            </div>
            <div class="row poverty-facts">
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/1.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    There is
                                    <span class="display-3 font-weight-bold">30%</span>
                                    of uneducated youth in Africa till today.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/2.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    Poverty is the cause of 
                                    <span class="display-3 font-weight-bold">20%</span>
                                    death in Africa.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/3.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    There is
                                    <span class="display-3 font-weight-bold">30%</span>
                                    of uneducated youth in Africa till today.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/1.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    Non African business owned increased by
                                    <span class="display-3 font-weight-bold">59%</span>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/2.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    Unmployment reaches
                                    <span class="display-3 font-weight-bold">70%</span>
                                    in most of African countries.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/3.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                            <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                                <h5 class="h3 text-white font-weight-bold text-center">
                                    Poverty in Africa has increase up to
                                    <span class="display-3 font-weight-bold">45%</span>.
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./Poverty Fact --}}
    {{-- Upcoming Events --}}
    <section id="upcoming-vent" class="" style="background: #006DFF">
        <svg viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#ffffff" stroke="#ffffff">
                    <path d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    <section id="upcoming-event" class="bg-white">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="py-5">
                        <h2 class="display-3 font-weight-bold text-center text-primary">Upcoming Event</h2>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 d-flex justify-content-center align-items-center mb-3 mb-md-0">
                    <div class="card overflow-hidden bg-dark text-white">
                        <div class="overflow-hidden">
                            <img src="{{ asset('images/1.png') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-img-overlay">
                            <h5 class="card-title font-weight-bold text-white h4">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <div class="card-footer">
                                <p class="card-text"><span class="text-primary">2020/10/05</span> <span><a href="http://#" class="pull-right card-link">VIEW DETAILS<i class="fa fa-arrow-right text-white ml-2" aria-hidden="true"></i></a></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-sm-12 col-md-6">
                    <div class="d-flex flex-column"> --}}
                        <div class="col-sm-12 col-md-4 mb-3 mb-md-0">
                            <div class="card overflow-hidden bg-dark text-white">
                                <div class="overflow-hidden">
                                    <img src="{{ asset('images/2.png') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <h5 class="card-title font-weight-bold text-white h4">Card title</h5>
                                    <p class="card-text text-ellipsis">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text text-small"><span class="text-primary">2020/10/05</span> <span><a href="http://#" class="card-link">VIEW DETAILS<i class="fa fa-arrow-right text-white ml-2" aria-hidden="true"></i></a></span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="card overflow-hidden bg-dark text-white">
                                <div class="overflow-hidden">
                                    <img src="{{ asset('images/2.png') }}" class="card-img-top" alt="...">
                                </div>
                                <div class="card-img-overlay">
                                    <h5 class="card-title font-weight-bold text-white h4">Card title</h5>
                                    <p class="card-text text-ellipsis">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text text-small"><span class="text-primary">2020/10/05</span> <span><a href="http://#" class="card-link">VIEW DETAILS<i class="fa fa-arrow-right text-white ml-2" aria-hidden="true"></i></a></span></p>
                                </div>
                            </div>
                        </div>
                    {{-- </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- ./Upcoming Events --}}
    @include('partials.latest-blog')
    @include('partials.footer')
@endsection

@section('footer_scripts')
    {{-- Actuality --}}
    <script>
        $(document).ready(function () {
            $('.ongoing').slick({
                autoplay: true,
                // infinite: true,
                cssEase: 'linear',
                dots: true,
                initialSide: 0,
                centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive : [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
            var currentSlide = $('.ongoing').slick('slickCurrentSlide');
            // currentSlide.style.display = 'none';
            console.log(currentSlide);
        });
    </script>
    {{-- ./Actuality --}}
    {{-- Poverty Fact --}}
    <script>
        $(document).ready(function () {
            $('.poverty-facts').slick({
                autoplay: true,
                arrows: false,
                cssEase: 'linear',
                dots: true,
                initialSide: 0,
                // centerMode: true,
                centerPadding: '60px',
                slidesToShow: 3,
                responsive : [
                    {
                        breakpoint: 768,
                        settings: {
                            arrows: false,
                            // centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            arrows: false,
                            // centerMode: true,
                            centerPadding: '40px',
                            slidesToShow: 1
                        }
                    }
                ]
            });
            var currentSlide = $('.ongoing').slick('slickCurrentSlide');
            // currentSlide.style.display = 'none';
            console.log(currentSlide);
        });
    </script>
    {{-- ./Poverty Fact --}}
@endsection