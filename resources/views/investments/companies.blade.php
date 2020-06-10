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
        .hero {
            z-index: 10;
        }
        section#team-list::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0%;
            left: 0;
            background-image: linear-gradient(360deg,rgba(11, 74, 215, 0.11) calc((1140px / 1.8) + ((100vw - 1180px)/ 2)),rgba(0,0,0,0) 0);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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

        .card {
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .card:hover img {
            box-shadow: none!important;
        }

        .card.card-cascade.narrower:hover .view.view-cascade {
            margin-top: 0;
        }

        .card:hover {
            background: rgb(243, 39, 141)!important;
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
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/2.png') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <p class="h5 mb-4">OUR PORTFOLIO</p>
                        <h1 class="">
                            <span class="font-weight-bold">OUR COMPANIES CREATE SUSTAINABLE SOLUTIONS</span>
                            THAT ENABLE THE POOR TO TRANSFORM THEIR LIVES
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-blue py-4 tick-border-white">
        <div class="col-md-12 mx-auto">
            <form action="" class="position-sticky" style="top: 8%">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""></label>
                            <select class="custom-select custom-select-lg" name="" id="">
                                <option selected value="">TEAM</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for=""></label>
                            <select class="custom-select custom-select-lg" name="" id="">
                                <option selected value="">BY REGION</option>
                                <option value=""></option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group w-100">
                          <label for=""></label>
                          <input type="text"
                            class="form-control form-control-lg" name="" id="" aria-describedby="helpId" placeholder="BY NAME">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <section id="team-list" class="py-4 py-md-5 position-relative" 
        style="background-image: url({{ asset('images/team-bg.pn') }});
        background-attachment: fixed;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-position-x: center;
        background-position-y: center;
        ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-flex flex-wrap">
                        @forelse ($team as $member)
                        <div class="col-md-4 mb-5">
                            <!-- Card Narrower -->
                            <div class="card card-cascade narrower border-0 bg-light d-flex flex-wrap flex-row h-100">
                                <div class="position-absolute bg-white rounded-circle" 
                                    style="z-index: 1; 
                                    left: 50%; 
                                    top: -22%; 
                                    padding: 14px;
                                    width: 50px;
                                    height: 50px;
                                    ">
                                    <i class="fa fa-home text-danger" style="font-size: 1.5rem" aria-hidden="true"></i>
                                </div>
                                <!-- Card image -->
                                <div class="col-md-5 view view-cascade overlay p-0 h-100">
                                    <img class="card-img-top h-100" src="{{ asset('images/worker1.jpg') }}"
                                        alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                
                                    <!-- Card content -->
                                <div class="col-md-7 card-body card-body-cascade d-flex flex-column justify-content-between">
                                
                                    <div>
                                        <!-- Title -->
                                        <h4 class="font-weight-bold card-title text-primary">PATIENT CAPITAL</h4>
                                        <!-- Text -->
                                        <p class="card-text text-dark">
                                            Rather than investing traditional capital,
                                        </p>
                                    </div>
                                </div>
                            
                            </div>
                            <!-- Card Narrower -->
                        </div>
                        @empty
                                
                        @endforelse
                    </div>
                    <div class="d-flex">
                        <div class="col-12 text-center">
                            <a href="#" class="btn btn-primary mx-auto">LOAD MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection