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
            background: rgba(0, 0, 0, .52);
        }
        .card.card-cascade.narrower .view.view-cascade {
            /* margin-left: 0.75rem;
            margin-right: 0.75rem;
            margin-top: -1rem; */
            transform: translate3D(-1rem, -1rem, 1rem);
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .card.card-cascade .view.view-cascade {
            border-radius: .25rem;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
        }
        .card.card-cascade.narrower .view.view-cascade:hover {
            /* margin-left: 0;
            margin-right: 0;
            margin-top: 0; */
            transform: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .card.card-cascade.narrower:hover .view.view-cascade {
            /* margin-left: 0;
            margin-right: 0;
            margin-top: 0; */
            transform: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
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

        .card {
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .card:hover img {
            box-shadow: none!important;
        }

        .card:hover {
            background: #006DFF!important;
        }

        .card:hover p,
        .card:hover h4 {
            color: #ffffff!important;
        }

        @media (max-width: 768px) {
            .card-cascade {
                height: auto!important;
            }
        }
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5"
        style="background-image: url({{ asset('images/fellow1.jpg') }}); background-size:cover;height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-center">
                    <div class="hero text-white py-4">
                        <h1 class="h6 mb-4">WE FOCUS ON</h1>
                        <p class="h1">
                            EDUCATION & ENTREPRENEURSHIP
                            {{-- <span class="font-weight-lighter">WHO UNDERSTAND WHAT IT TAKES TO CREATE LASTING CHANGE</span> --}}
                        </p>
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
                            <span class="font-weight-bold">OUR FELLOWSHIPS ARE CONNECTING AND CULTIVATING </span>
                            EMERGING LEADERS
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="py-3 pl-md-5 text-white">
                        <h2 class="h4">PROGRAM OVERVIEW</h2>
                        <p>
                            The Acumen Fellowship program is an intensive leadership development program cultivating a
                            pipeline of tomorrow’s social changemakers. Over the course of a year, Fellows remain in their
                            jobs while participating in five, multi-day immersive seminars and engaging in online content
                            between seminars. Currently operating in Malaysia, Bangladesh, Colombia, East Africa, India, and
                            West Africa, the Fellows Program equips leaders from across the country or region with the
                            knowledge, skills and community to become more effective, collaborative agents of change.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="py-4">
                        <h2 class="mb-4 mb-md-5 text-primary">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 bg-lighth-100 shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 bg-lighth-100 shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis.
                                </p>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 bg-lighth-100 shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 bg-lighth-100 shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-image: url({{ asset('images/fellow1.jpg') }});
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-position-x: center;
        background-position-y: center;
        ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 hero mb-5">
                    <div class="py-4">
                        <h2 class="text-white">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 hero shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-white">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 hero shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-white">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis.
                                </p>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-4 mb-5">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 hero shadow-lg">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-white">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-white">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="py-4">
                        <h2 class="text-primary">
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus, quas.
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 mb-5 pl-0">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 shadow-lg d-flex flex-wrap flex-row">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0 col-md-5">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between col-md-7">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-6 mb-5 pr-0">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 shadow-lg d-flex flex-wrap flex-row">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0 col-md-5">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between col-md-7">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis.
                                </p>
                            </div>
                            <div class="">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
                <div class="col-md-6 mb-5 pl-0">
                    <!-- Card Narrower -->
                    <div class="card card-cascade h-100 narrower border-0 shadow-lg d-flex flex-wrap flex-row">
                        <!-- Card image -->
                        <div class="view view-cascade overlay p-0 col-md-5">
                            <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                alt="Card image cap">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        
                            <!-- Card content -->
                        <div class="card-body card-body-cascade d-flex flex-column justify-content-between col-md-7">
                        
                            <div>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                <!-- Text -->
                                <p class="card-text text-dark">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit recusandae nulla officia omnis. Dolor, officiis, fugit ratione fugiat tempora alias accusantium laborum accusamus voluptatum eveniet suscipit cupiditate est mollitia inventore!
                                </p>
                            </div>
                            <div class="mt-4">
                                <a href="#" class="btn btn-primary">READ MORE</a>
                            </div>
                        </div>
                    
                    </div>
                    <!-- Card Narrower -->
                </div>
            </div>
        </div>
    </section>
    <section id="report" class="" style="height:80vh; 
        background-image: url({{ asset('images/fellow.jpg') }};
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6"></div>
                <div class="col-md-6 align-self-center">
                    <div class="p-5 text-white" style="background: rgba(1, 12, 18, 0.62)">
                        <p class="h6">FELLOWSHIPS</p>
                        <h3 class="h1 font-weight-light">WE CURRENTLY OFFER FELLOWSHIPS IN MULTIPLE REGIONS AROUND AFRICA</h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus maiores exercitationem ex?
                            Eveniet eius veniam quibusdam earum, necessitatibus, ab inventore labore pariatur mollitia
                            eligendi natus eos dicta ipsa qui! Aliquid autem odio ipsam sequi corrupti est adipisci
                            quibusdam incidunt perferendis voluptate commodi, cumque veniam quas laboriosam sed nulla
                            eligendi consequatur.
                        </p>
                        <a href="#" class="btn  bg-blue">FIND YOUR REGION</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection