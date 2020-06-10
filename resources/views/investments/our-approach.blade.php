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
            background: rgba(1, 17, 37, 0.37);
        }
        #our-sector::before {
            content: '';
            position: absolute;
            height: 80%;
            width: 100%;
            /* top: 0; */
            left: 0;
            background: #032c442e;
        }
        svg {
            width: 100% 
        }

        .card.card-cascade.narrower .view.view-cascade {
            margin-top: -1.25rem;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .card.card-cascade .view.view-cascade {
            border-radius: .25rem;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
        }
        .card.card-cascade.narrower .view.view-cascade:hover {
            margin-top: 0;
        }
        .view {
            position: relative;
            overflow: hidden;
            cursor: default;
        }
        .view img, .view video {
            position: relative;
            display: block;
        }
        .overlay .mask {
            opacity: 0;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .view .mask {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            background-attachment: fixed;
        }
        .waves-effect {
            position: relative;
            overflow: hidden;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-tap-highlight-color: transparent;
        }
        .rgba-white-slight, .rgba-white-slight:after {
            background-color: rgba(255,255,255,0.1);
        }
        .overlay .mask:hover {
            opacity: 1;
        }

        .card-deck .card img {
            position: absolute;
            height: 174px;
            width: 174px;
            border-radius: 50%;
            /* top: -56px; */
            margin-top: -100px;
            left: 25%;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }
        .card-deck .card img:hover {
            box-shadow: none!important;
        }

        @media (max-width: 768px) {
            .card-cascade {
                height: auto!important;
            }
        }
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/impact2.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">               
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <p class="h5 mb-4">OUR APPROACH</p>
                        <h1 class="">
                            <span class="font-weight-bold">PATIENT CAPITAL THAT DARES TO GO WHERE MARKETS HAVE FAILED</span>
                            <span class="font-weight-ligth">AND AID HAS FALLEN SHORT</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 bg-white tick-border-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="my-4">
                        <h2>
                            <span class="font-weight-bold">WE INVEST IN INTREPID ENTREPRENEURS AND EARLY STAGE INNOVATORS</span>
                            <span class="font-weight-light">TACKLING THE PROBLEMS OF POVERTY</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="my-4">
                        <p class="mb-4">
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Unde impedit alias, minima fugiat beatae enim doloribus sit laborum perspiciatis molestiae doloremque officiis accusamus eum, voluptatem eos ducimus maxime dolorum. Veritatis quibusdam cumque qui molestias porro eligendi voluptatem dolore ut eum!
                        </p>
                        <a href="#" class="btn btn-primary">DOWNLOAD OUR PORTFOLIO SNAPSHOT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="bg-white">
        <svg viewBox="0 0 2223 130" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -1106.000000)" fill="#006DFF" stroke="#006DFF">
                    <path d="M446.748351,1119.49 C805.275354,1073.24308 1435.40036,1170.31306 1435.40036,1170.31306 C1435.40036,1170.31306 1715.89254,1214.75024 1899.82676,1210.13977 C2022.44957,1207.06613 2130.17398,1193.10771 2223,1168.26453 L2223,1236 L0,1236 L0,1223.60935 C118.452086,1177.33496 267.368203,1142.6285 446.748351,1119.49 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    <section class="bg-blue py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="mb-4">
                        <h2>
                            <span class="font-weight-bold">OUR APPROACH</span>
                            <span class="font-weight-light">TO INVESTING</span>
                        </h2>
                    </div>
                </div>
                <div class="col-md-5"></div>
            </div>
            <div class="row mt-4 pt-3">
                <div class="col-md-6 mb-4">
                    <!-- Card Narrower -->
                    <div class="card border-0 bg-light card-cascade narrower d-flex flex-wrap flex-row h-100">

                        <!-- Card image -->
                        <div class="col-md-3 view view-cascade overlay p-0 h-100">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a class="" href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="col-md-9 card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Rather than investing traditional capital, we invest philanthropic, or “patient,” capital that provides startups with the flexibility and security to grow their business and reach as many poor customers as possible.
                                </p>
                            </div>
                            <!-- Button -->
                            <div>
                                <a class="btn btn-primary pull-right" role="link" aria-label="LEARN MORE">LEARN MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
  
                </div>
                <div class="col-md-6 mb-4">
                    <!-- Card Narrower -->
                    <div class="card border-0 bg-light card-cascade narrower d-flex flex-wrap flex-row h-100">

                        <!-- Card image -->
                        <div class="col-md-3 view view-cascade overlay p-0 h-100">
                            <img class="card-img-top h-100" src="{{ asset('images/worker.jpg') }}"
                                alt="Card image cap">
                            <a class="" href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="col-md-9 card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">EARLY-STAGE INVESTMENTS</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Rather than investing traditional capital, we invest philanthropic, or “patient,” capital that provides startups with the flexibility and security to grow their business and reach as many poor customers as possible.
                                </p>
                            </div>
                            <!-- Button -->
                            <div>
                            <a  class="btn btn-primary pull-right" role="link" aria-label="EXPLORE OUR PORTFOLIO">EXPLORE OUR PORTFOLIO</a> </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
  
                </div>
                <div class="col-md-6 mb-4">
                    <!-- Card Narrower -->
                    <div class="card border-0 bg-light card-cascade narrower d-flex flex-wrap flex-row h-100">

                        <!-- Card image -->
                        <div class="col-md-3 view view-cascade overlay p-0 h-100">
                            <img class="card-img-top h-100" src="{{ asset('images/agric.jpg') }}"
                                alt="Card image cap">
                            <a class="" href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="col-md-9 card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                           <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">ACCESS TO EXPERTISE</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    We provide our companies with access to our expertise and networks of advisors who have deep sector, channel and customer experience.
                                </p>
                           </div>
                            <!-- Button -->
                            <div>
                                <a href="{{ route('corporate-partners') }}" class="btn btn-primary pull-right" role="link" aria-label="SEE OUR PARTNERS">SEE OUR PARTNERS</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
  
                </div>
                <div class="col-md-6 mb-4">
                    <!-- Card Narrower -->
                    <div class="card border-0 bg-light card-cascade narrower d-flex flex-wrap flex-row h-100">

                        <!-- Card image -->
                        <div class="col-md-3 view view-cascade overlay p-0 h-100">
                            <img class="card-img-top h-100" src="{{ asset('images/impact1.jpg') }}"
                                alt="Card image cap">
                            <a class="" href="#">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="col-md-9 card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">POST-INVESTMENT SUPPORT</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    To help our companies grow and scale, we offer active post-investment support and guidance in the areas of strategy, governance, customer insights and fundraising.
                                </p>
                            </div>
                            <!-- Button -->
                            <div>
                                <a class="btn btn-primary pull-right" role="link" aria-label="LEARN MORE">LEARN MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
  
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 mb-5">
                        <h2>
                            <span class="font-weight-bold">WE’VE IMPACTED</span>
                            MORE THAN 263 MILLION LIVES THROUGH
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-deck w-100 mx-auto pt-5 mt-5 px-3 px-md-0">
                    <div class="card shadow border-0">
                        <img class="card-img-top shadow-lg" src="{{ asset('images/worker.jpg')}}" alt="">
                        <div class="card-body pt-5 mt-5 text-center">
                            <span class="display-4 font-weight-bold">14</span>
                            <h4 class="card-title">COUNTRIES IN</h4>
                            <p class="card-text">AFRICA, ASIA, LATIN AMERICA AND THE U.S.</p>
                        </div>
                    </div>
                    <div class="card shadow border-0">
                        <img class="card-img-top shadow-lg" src="{{ asset('images/worker1.jpg')}}" alt="">
                        <div class="card-body pt-5 mt-5 text-center">
                            <span class="display-4 font-weight-bold">126</span>
                            <h4 class="card-title">COMPANIES SERVING</h4>
                            <p class="card-text">LOW-INCOME CUSTOMERS</p>
                        </div>
                    </div>
                    <div class="card shadow border-0">
                        <img class="card-img-top shadow-lg" src="{{ asset('images/impact1.jpg')}}" alt="">
                        <div class="card-body pt-5 mt-5 text-center">
                            <span class="display-4 font-weight-bold">$126</span>
                            <h4 class="card-title">MILLION INVESTED</h4>
                            <p class="card-text">IN BREAKTHROUGH INNOVATIONS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="our-sector" style="background-image: url({{ asset('images/food.jpg') }}); background-attachment: fixed; background-size: cover; background-repeat: no-repeat; background-position: center; height: 80vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 align-self-center">
                    <div class="p-5 text-white" style="background: rgba(1, 12, 18, 0.72)">
                        <h3 class="h1">OUR SECTORS</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus maiores exercitationem ex?
                            Eveniet eius veniam quibusdam earum, necessitatibus, ab inventore labore pariatur mollitia
                            eligendi natus eos dicta ipsa qui! Aliquid autem odio ipsam sequi corrupti est adipisci
                            quibusdam incidunt perferendis voluptate commodi, cumque veniam quas laboriosam sed nulla
                            eligendi consequatur.
                        </p>
                        <a href="{{ route('sectors') }}" class="btn  bg-blue">EXPLORE OUR SECTORS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4 bg-white">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div>
                        <h3 class="h2 text-primary mb-3">
                            <span class="font-weight-bold">WANT TO KNOW MORE</span>
                            ABOUT BECOMING AN ACUMEN INVESTEE?
                        </h3>
                        <a href="#" class="border-bottom border-primary btn-link"><i class="fa fa-arrow-right" aria-hidden="true"></i> LEARN ABOUT OUR INVESTMENTS CRITERIA</a>
                    </div>
                </div>
                <div class="col-md-4 ml-auto">
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