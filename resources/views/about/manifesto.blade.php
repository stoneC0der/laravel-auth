@extends('layouts.app')
@section('head')
    <style>
        svg {
            width: 100%;
        }
        #home::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 80%;
            top: 0;
            left: 0;
            background: rgba(0, 0, 0, .52);
        }
        .fixed-overlay {
            position: absolute;
            height: 80%;
            width: 100%;
            right: 0;
            background: #05316c6b;
        }
        .overlay,
        .card-img-overlay {
            background: #05316c6b;
            height: 100%
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
        .poverty-facts .slick-dots li.slick-active button:before {
            color: #eef4fa;
            opacity: 0.75;
        }
        .slick-list.draggable {
            padding: 40px 60px!important;
        }
        #poverty-facts .slick-slide.slick-current.slick-active.slick-center {
            transform: scale3D(1.2,1.2, 1.2);
            width: 428px;
            box-shadow: 0 0rem 20rem -3.5rem rgba(0, 0, 0, 0.342) !important;
        }
        #poverty-facts .slick-slide.slick-current.slick-active.slick-center h6 {
            font-size: 20px;
        }
        #poverty-facts .slick-slide.slick-current.slick-active.slick-center .h-100,
        #poverty-facts .slick-slide.slick-current.slick-active.slick-center .h-100 .overlay {
            border-radius: 4px;
        }
    </style>
@endsection
@section('content')
    {{-- HOME --}}
    <section id="home" style="background-image:url({{ asset('images/1.png') }}); background-size:cover;height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-5"></div>
                <div class="col-md-7 text-center text-white align-self-center">
                    <div>
                        <h1 class="h6">ABOUT POVERTY WATCH AFRICA</h1>
                        <div class="">
                            <p class="h1">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./HOME --}}
    {{-- MANIFESTO --}}
    <section id="manifesto" class="py-5 tick-border-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div class="my-2">
                        <h2 class="text-primary display-3">Our Manifesto</h2>
                    </div>
                    <div class="mb-4 py-3">
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facere dolor tempore esse consectetur officiis ipsam quisquam eaque voluptatibus molestiae. Sit!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis non vel quibusdam commodi recusandae? Expedita, dolor ratione odit obcaecati voluptatum, amet consequuntur, neque animi quas labore quisquam incidunt dolorem molestias.
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae quisquam saepe soluta officiis sequi excepturi, qui sint blanditiis. Minus, at.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam rerum ullam pariatur ipsum tenetur nulla quam. Amet ex repudiandae libero, est necessitatibus dolorum doloremque tempora.
                        </p>
                        <p>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque sed reprehenderit delectus culpa nostrum officiis non recusandae, earum dicta in at quod nihil animi odit nobis quas aliquam. Alias minima reprehenderit eaque architecto fugiat modi.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci blanditiis eius error reprehenderit eaque, quos sit dignissimos, quam soluta cum perferendis cupiditate quasi vitae, architecto ratione quo temporibus culpa. In!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./MANIFESTO --}}
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
                <div class="py-3">
                    <h2 class="h1 font-weight-bold text-white">Featured Photos</h2>
                </div>
            </div>
            <div class="row poverty-facts">
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/1.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/2.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/3.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/1.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/2.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
                <div>
                    <div class="h-100" style="background-image: url({{ asset('images/3.png') }}; background-size:cover; height:275px!important">
                        <div class="overlay">
                        </div>
                    </div>
                    <div class="p-3 h-100 d-flex justify-content-center align-items-center">
                        <h6 class="text-white font-weight-bold text-center">
                            There is
                            of uneducated youth in Africa till today.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./Poverty Fact --}}

    <section class="py-4 bg-white">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div>
                        <h3 class="h2 text-primary mb-3">
                            <span class="font-weight-bold">WE’VE IMPACTED MORE THAN 230 MILLION LIVES</span>
                            THROUGH OUR INVESTMENTS
                        </h3>
                        <a href="#" class="border-bottom border-primary btn-link"><i class="fa fa-arrow-right" aria-hidden="true"></i> READ MORE ABOUT OUR APPROACH</a>
                    </div>
                </div>
                <div class="col-md-3 ml-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section id="our-partners" class="bg-white">
        <svg viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#f8f9fa" stroke="#f8f9fa">
                    <path d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    @include('partials.footer')
@endsection
@section('footer_scripts')
    {{-- Poverty Fact --}}
    <script>
        $(document).ready(function () {
            $('.poverty-facts').slick({
                autoplay: true,
                arrows: false,
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
                            slidesToShow: 2
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
    {{-- ./Poverty Fact --}}
@endsection