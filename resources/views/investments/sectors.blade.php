@extends('layouts.app')

@section('head')
    <style>
        #home::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 80%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,.5);
        }

        #region-1::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 80%;
            top: 0;
            left: 0;
            background: rgba(0,0,0,.6);
        }

        /* Container needed to position the overlay. Adjust the width as needed */
        .c-img-container {
        position: relative;
        width: 100%;
        }

        .c-img-container .icon {
            position: absolute;
            height: 50px;
            width: 50px;
            background: #fff;
            padding: 11px;
            border-radius: 50%;
            top: 0px;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        /* Make the image to responsive */
        .image {
        width: 100%;
        height: auto;
        }

        /* The overlay effect (full height and width) - lays on top of the container and over the image */
        .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        /* background-color: #00B03B; */
        overflow: hidden;
        width: 100%;
        height: 100%;
        transform: scale(0);
        transition: .3s ease;
        }
        .top-icon .fa {
            display: none;
            /* background: #00B03B; */
            position: absolute;
            top: 0;
            left: 50%;
            width: 50px;
            height: 50px;
            padding: 11px;
            border-radius: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff!important;
            z-index: 1;
            transition: .9s ease;
        }
        /* When you mouse over the container, the overlay text will "zoom" in display */
        .c-img-container:hover .overlay {
        transform: scale(1);
        }

        .c-img-container:hover .top-icon .fa {
        display: block;
        transition: .9s ease;
        }

        /* Some text inside the overlay, which is positioned in the middle vertically and horizontally */
        .text {
        color: white;
        font-size: 12px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
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
    </style>
@endsection
@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/housing.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="text-white py-4">
                        <p class="h6 mb-4">OUR SECTORS</p>
                        <h1 class="">
                            <span class="font-weight-bold">DELIVERING ACCESS TO CRITICAL GOODS AND SERVICES</span>
                            <span class="font-weight-light">TO UNLOCK THE POVERTY TRAP FOR MILLIONS</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 bg-blue tick-border-white">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pr-4">
                        <h2 class="h2 text-white mb-3">
                            <span class="font-weight-bold">OUR ENTREPRENEURS ARE UNAFRAID TO LEARN AT THE EDGE</span>
                            IN SOME OF THE MOST CHALLENGING CORNERS OF THE WORLD
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="py-3 pl-5">
                        <p>
                            We seek out the world’s most innovative entrepreneurs who share our commitment to standing with the poor and give them the capital and tools to grow and scale their businesses into long-term, sustainable solutions. From banks in rural Pakistan to health care clinics in India, the companies we invest in are serving some of the hardest to reach customers in the most challenging corners of the world.
                        </p>
                        <a href="#" class="btn btn-light text-primary">DOWNLOAD OUR PORTFOLIO SNAPSHOT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="my-4 pb-5">
                        <h2 class="">
                            AREAS OF INVESTMENT
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-leaf text-white bg-success fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/food.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-leaf text-success fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Agriculture</h4>
                        </div>
                        <div class="overlay bg-success">
                            <div class="text w-100 px-3">
                                <h4>Agriculture</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-plus text-white bg-danger fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/health.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-plus text-danger fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Health</h4>
                        </div>
                        <div class="overlay bg-danger">
                            <div class="text w-100 px-3">
                                <h4>Health</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-tint text-info bg-info fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/water.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-tint text-white bg-info fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Water & Sanitation</h4>
                        </div>
                        <div class="overlay bg-info">
                            <div class="text w-100 px-3">
                                <h4>Water & Sanitation</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-home text-white bg-danger fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/housing.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-home text-danger fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Housing</h4>
                        </div>
                        <div class="overlay bg-danger">
                            <div class="text w-100 px-3">
                                <h4>Housing</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-bolt text-white bg-warning fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/energy.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-bolt text-warning fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Energy</h4>
                        </div>
                        <div class="overlay bg-warning">
                            <div class="text w-100 px-3">
                                <h4>Energy</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-gear text-white bg-success fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/workforce.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-gear text-success fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Workforce Development</h4>
                        </div>
                        <div class="overlay bg-success">
                            <div class="text w-100 px-3">
                                <h4>Workforce Development</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="c-img-container h-100 position-relative shadow-sm rounded bg-white">
                        <div class="top-icon">
                            <i class="fa fa-pencil text-white bg-blue fa-2x" aria-hidden="true"></i>
                        </div>
                        <img src="{{ asset('images/education.jpg') }}" alt="Avatar" class="image img-fluid">
                        <div class="position-relative text-uppercase text-center p-4">
                            <i class="icon fa fa-pencil text-primary fa-2x" aria-hidden="true"></i>
                            <h4 class="mt-4">Education</h4>
                        </div>
                        <div class="overlay bg-blue">
                            <div class="text w-100 px-3">
                                <h4>Education</h4>
                                <p>
                                    Our agriculture investments span innovations such as financing for smallholder farmers, organic fertilizers that increases yields, and mobile technology that ensures farmers secure fair prices for their crops.
                                </p>
                                <a href="#" class="card-link border-bottom text-white">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white shadow-sm">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-4 mb-5">
                        <h2>
                            <span class="font-weight-bold">OUR IMPACT</span>
                            TO DATE
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="card-deck w-100 mx-auto pt-5 mt-5 px-3 px-md-0">
                    <div class="card border-0">
                        <img class="card-img-top shadow-lg" src="{{ asset('images/worker.jpg')}}" alt="">
                        <div class="card-body pt-5 mt-5 text-center">
                            <span class="display-4 font-weight-bold">14</span>
                            <h4 class="card-title">COUNTRIES IN</h4>
                            <p class="card-text">AFRICA, ASIA, LATIN AMERICA AND THE U.S.</p>
                        </div>
                    </div>
                    <div class="card border-0">
                        <img class="card-img-top shadow-lg" src="{{ asset('images/worker1.jpg')}}" alt="">
                        <div class="card-body pt-5 mt-5 text-center">
                            <span class="display-4 font-weight-bold">126</span>
                            <h4 class="card-title">COMPANIES SERVING</h4>
                            <p class="card-text">LOW-INCOME CUSTOMERS</p>
                        </div>
                    </div>
                    <div class="card border-0">
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
    @include('partials.latest-blog')
    @include('partials.footer')
@endsection