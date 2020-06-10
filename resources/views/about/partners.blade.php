@extends('layouts.app')

@section('head')
    <style>
        section#home::before {
            content: '';
            position: absolute;
            height: 80%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(2, 27, 59, 0.57);
        }
        svg {
            width: 100% 
        }

        .fixed-overlay {
            position: absolute;
            height: 75%;
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
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/partners.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <h1 class="font-weight-bold">
                            <span class="">OUR PARTNERS KNOW THAT THE WORLD NEEDS</span>
                        </h1>
                        <p class="h2">RADICALLY DIFFERENT APPROACH TO SOLVING POVERTY</p>
                        <a href="#" class="btn btn-primary btn-lg pull-right">JOIN US</a>
                    </div>
                </div>
                <div class="col-md-7"></div>
            </div>
        </div>
    </section>
    <section class="bg-white py-4 py-md-5 tick-border-primary">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h2>
                            <span class="font-weight-bold">WITH DETERMINATION AND GRIT</span>,
                            EVERYONE CAN CONTRIBUTE TO A BETTER FUTURE
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h3 class="h4">PARTNERING WITH POVERTY WATCH AFRICA </h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Et unde obcaecati maiores labore alias! Incidunt, expedita beatae accusantium odio nulla in accusamus debitis deserunt voluptas et tenetur possimus nesciunt consectetur amet quibusdam obcaecati nam, fuga recusandae eos autem numquam cupiditate veniam deleniti? Ab at ipsam accusantium repudiandae deserunt. Dolorem, adipisci.</p>

                        <a href="#" class="btn btn-outline-primary btn-md">EXPLORE OUR COMMUNITY</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white">
        <svg viewBox="0 0 2223 253" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -983.000000)" fill="#006DFF" stroke="#006DFF">
                    <path d="M446.748351,1008.39907 C805.275354,918.056243 1435.40036,1107.68133 1435.40036,1107.68133 C1435.40036,1107.68133 1715.89254,1194.48885 1899.82676,1185.48235 C2022.44957,1179.47801 2130.17398,1152.21041 2223,1103.67954 L2223,1236 L0,1236 L0,1211.79501 C118.452086,1121.39852 267.368203,1053.59987 446.748351,1008.39907 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    <section class="bg-blue py-5">
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <div class="mb-4">
                        <h2>
                            <span class="font-weight-bold">PARTNER WITH US. TOGETHER</span>, WE CAN BUILD A MORE INCLUSIVE WORLD
                        </h2>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="container">
                        <ul id="myTabs" class="nav nav-tabs" role="tablist" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active text-primary" href="#Commentary" data-toggle="tab">WHAT IT MEANS TO BE A PARTNER</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-white" href="#Videos" data-toggle="tab">PARTNER BENEFITS</a>
                            </li>
                        </ul>
                        <div class="tab-content py-4">
                            <div role="tabpanel" class="tab-pane fade in active show" id="Commentary">
                                <div class="d-flex flex-wrap">
                                    <div class="col-lg-7">
                                        <div class="overflow-auto" style="height: 350px">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam molestiae veniam harum quia autem laboriosam fugiat minima dolorem tenetur. Blanditiis deserunt suscipit temporibus. Velit consectetur a adipisci vero, corporis molestias.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eius laudantium iste officiis placeat nemo eos consectetur sit! Nesciunt quasi et delectus. Eaque unde atque ratione. Inventore eius expedita reprehenderit!</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia omnis laudantium excepturi labore nostrum magnam voluptatem ratione. Harum est voluptate repellat non incidunt saepe tempore eos in, nisi autem hic?</p>
                                            <div class="text-center mb-3">
                                                <a href="#" class="btn btn-outline-light">Download our partners snapshot</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{ asset('images/1.png') }}" alt="" class="img-fluid shadow-lg rounded">
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Videos">
                                <div class="d-flex flex-wrap">
                                    <div class="col-lg-7">
                                        <div class="overflow-auto" style="height: 350px">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam molestiae veniam harum quia autem laboriosam fugiat minima dolorem tenetur. Blanditiis deserunt suscipit temporibus. Velit consectetur a adipisci vero, corporis molestias.</p>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia eius laudantium iste officiis placeat nemo eos consectetur sit! Nesciunt quasi et delectus. Eaque unde atque ratione. Inventore eius expedita reprehenderit!</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia omnis laudantium excepturi labore nostrum magnam voluptatem ratione. Harum est voluptate repellat non incidunt saepe tempore eos in, nisi autem hic?</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia omnis laudantium excepturi labore nostrum magnam voluptatem ratione. Harum est voluptate repellat non incidunt saepe tempore eos in, nisi autem hic?</p>
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia omnis laudantium excepturi labore nostrum magnam voluptatem ratione. Harum est voluptate repellat non incidunt saepe tempore eos in, nisi autem hic?</p>
                                            <div class="text-center mb-3">
                                                <a href="#" class="btn btn-outline-light">Download our partners snapshot</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <img src="{{ asset('images/1.png') }}" alt="" class="img-fluid shadow-lg rounded">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue">
        <svg viewBox="0 0 1389 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -740.000000)" fill="#f8f9fa" stroke="#f8f9fa">
                    <path d="M3.25913446,778.157973 C8.79297912,777.717797 14.3102885,777.280252 19.8110625,776.845337 C629.787983,728.617943 1087.27067,729.055488 1392.25913,778.157973 C2053.03353,884.541226 -682.534155,832.707688 3.25913446,778.157973 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h2 class="mb-3">
                        <span class="font-weight-bold">WE PARTNER WITH COMPANIES</span> COMMITTED TO BUILDING A BETTER WORLD
                    </h2>
                    <a href="#" class="btn btn-primary btn-lg">JOIN US</a>
                </div>
                <div class="col-md-12">
                    <div class="d-flex flex-wrap my-5">
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-twitter text-info fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-home text-warning fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-users text-danger fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-google fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 mb-3">
                            <div class="card h-100 shadow bg-white text-center">
                                <div class="card-body">
                                    <i class="fa fa-facebook text-primary fa-4x" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
            <div class="pl-md-5 ml-md-5 col-6">
                <div class="py-3 mb-4">
                    <h2 class="h1 font-weight-bold text-white">FEATURED PHOTOS FROM OUR 2021 PARTNER GATHERING</h2>
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