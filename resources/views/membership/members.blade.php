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
            background: rgba(0,0,0,.52);
        }
        .hero {
            z-index: 10;
        }
        section#member-list::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0%;
            left: 0;
            background: rgba(11, 74, 215, 0.61);
        }

        .card.card-cascade .view.view-cascade {
            border-radius: .25rem;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
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
            -webkit-transition: all 0.4s ease-in-out;
            transition: all 0.4s ease-in-out;
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
        .rgba-white-slight, .rgba-white-slight:after {
            background-color: rgba(255,255,255,0.1);
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
        .overlay .mask:hover {
            opacity: 1;
        }
        .rgba-white-slight, .rgba-white-slight:after {
            background-color: rgba(255,255,255,0.1);
        }
        .btn-tw {
            color: #fff;
            background-color: #55acee !important;
        }

        .btn-floating {
            position: relative;
            z-index: 1;
            display: inline-block;
            padding: 0;
            margin: 2px;
            overflow: hidden;
            vertical-align: middle;
            cursor: pointer;
            border-radius: 50%;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            -webkit-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
            width: 25px;
            height: 25px;
        }
        .btn-floating .fa {
            margin-top: 6px;
        }
        .btn-fb {
            color: #fff;
            background-color: #3b5998 !important;
        }
        .btn-tw {
            color: #fff;
            background-color: #55acee !important;
        }
        .btn-dribbble {
            color: #fff;
            background-color: #ec4a89 !important;
        }
        .socials-button-group {
            /* position: absolute;
            bottom: 25px;
            left: -25%;
            right: -25%; */
        }
    </style>
@endsection
@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/fellow1.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <h1 class="h6 mb-4">MEET OUR FELLOWS</h1>
                        <p class="h1">
                            PASSION AND PURPOSE WILL ONLY TAKE YOU SO FAR.
                            <span class="font-weight-bold">LEADERS NEED THE RIGHT MIX OF VALUES, SKILLS, AND EXPERIENCE</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="member-list" class="py-4 py-md-5 position-relative tick-border-white" 
        style="background-image: url({{ asset('images/team-bg.png') }});
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
                    <form action="" class="position-sticky" style="top: 8%">
                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="custom-select custom-select-lg" name="" id="">
                                        <option selected value="">SELECT YEAR</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="custom-select custom-select-lg" name="" id="">
                                        <option selected value="">SELECT REGION</option>
                                        <option value=""></option>
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                  <label for=""></label>
                                  <input type="text"
                                    class="form-control form-control-lg" name="" id="" aria-describedby="helpId" placeholder="SEARCH BY NAME">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12">
                    <div class="d-flex flex-wrap">
                        @forelse ($team as $member)
                        <div class="col-md-4 mb-3">
                            <!-- Card Regular -->
                            <div class="card card-cascade h-100 d-flex flex-row border-0 shadow rounded-0">

                                <!-- Card image -->
                                <div class="col-md-5 view view-cascade overlay p-0 rounded-0 shadow-none">
                                    <img class="card-img-top h-100 rounded-0" src="{{ asset('images/2.png') }}" alt="Card image cap">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            
                                <!-- Card content -->
                                <div class="col-md-7 card-body card-body-cascade text-center position-relative d-flex flex-column justify-content-between">
                                    <div class="">
                                        <p class="card-title text-primary mb-2">REGION</p>
                                        <!-- Title -->
                                        <h4 class="card-title h5 mb-1"><strong>{{$member->full_name}}</strong></h4>
                                    </div>
                                
                                    <div class="socials-button-group mt-3">
                                        <!-- Facebook -->
                                        <a type="button" class="btn-floating btn-small btn-fb"><i class="fa fa-facebook-f text-white"></i></a>
                                        <!-- Twitter -->
                                        <a type="button" class="btn-floating btn-small btn-tw"><i class="fa fa-twitter text-white"></i></a>
                                        <!-- Google + -->
                                        <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble text-white"></i></a>
                                    </div>
                            
                                </div>
                            
                            </div>
                            <!-- Card Regular -->
                        </div>
                        @empty
                                
                        @endforelse
                        <div class="col-md-12">
                            <div class="text-center mt-5">
                                <a href="#" class="btn btn-light btn-lg">LOAD MORE</a>
                            </div>
                        </div>
                    </div>
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