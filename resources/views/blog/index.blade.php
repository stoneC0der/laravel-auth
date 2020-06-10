@extends('layouts.app')

@section('head')
    <style>
        .card.card-cascade.wider {
            background-color: transparent;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        .card {
            font-weight: 400;
            border: 0;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0,0,0,0.125);
            border-radius: .25rem;
        }
        .card.card-cascade.wider .view.view-cascade {
            z-index: 2;
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

        .card-img, .card-img-top {
            border-top-left-radius: calc(0.25rem - 1px);
            border-top-right-radius: calc(0.25rem - 1px);
        }
        .card-img, .card-img-top, .card-img-bottom {
            -ms-flex-negative: 0;
            flex-shrink: 0;
            width: 100%;
        }
        img {
            vertical-align: middle;
            border-style: none;
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
        .card.card-cascade.wider.reverse .card-body.card-body-cascade {
            z-index: 3;
            margin-top: -1rem;
            border-radius: .25rem;
            -webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
            box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
        }
        .card.card-cascade.wider .card-body.card-body-cascade {
            z-index: 1;
            margin-right: 4%;
            margin-left: 4%;
            background: #fff;
            border-radius: 0 0 .25rem .25rem;
            -webkit-box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
            box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
        }
        .card-body {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            border-radius: 0 !important;
        }
        .text-center {
            text-align: center !important;
        }
        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            min-height: 1px;
            padding: 1.25rem;
        }
    </style>
@endsection

@section('content')
    <section class="pt-5 pb-4 mb-4 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3 mt-5 py-3">
                        <h1 class="h2 font-weight-bold text-white">IN THE NEWS</h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0">

                        <!-- Card image -->
                        <div class="view view-cascade overlay" style="height: 60vh">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h1"><strong>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis, voluptatum?</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" class="position-sticky px-3 bg-blue" style="top: 8%">
                        <div class="form-row">
                            <div class="col-sm-12 col-md-4">
                                <div class="form-group">
                                    <label for=""></label>
                                    <select class="custom-select custom-select-lg" name="" id="">
                                        <option selected value="">SELECT CATEGORY</option>
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
                                    class="form-control form-control-lg" name="" id="" aria-describedby="helpId" placeholder="SEARCH">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-sm-12 px-lg-">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 flex-md-row py-4">
                    
                        <!-- Card image -->
                        <div class="col-md-5 view view-cascade overlay px-0 ml-md-2">
                            <img class="card-img-top h-100" src="{{ asset('images/2.png') }}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="col-md-7 card-body card-body-cascade p-md-5 my-md-3 ml-md-n3 mr-md-0">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </section>
    <section class="py-2 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 h-100">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5 d-flex flex-column justify-content-between">
                    
                            <div>
                                <!-- Title -->
                                <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                                <!-- Subtitle -->
                                <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                    voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                    laborum ut beatae ullam suscipit veniam.
                                </p>
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 h-100">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5 d-flex flex-column justify-content-between">
                    
                           <div>
                                <!-- Title -->
                                <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                                <!-- Subtitle -->
                                <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                    voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                    laborum ut beatae ullam suscipit veniam.
                                </p>
                           </div>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4">
                    <div class="card bg-blue h-100">
                        <div class="card-body">
                            <form class="p-4">
                                <div class="card-titl">
                                    <p class="h1 font-weight-bolder text-white mb-4">
                                        GET OUR NEWSLETTER TO STAY UP TO DATE
                                    </p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg border-0 shadow-sm" placeholder="FIRST NAME">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg border-0 shadow-sm" placeholder="LAST NAME">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-lg border-0 shadow-sm" placeholder="EMAIL">
                                </div>

                                <div class="">
                                    <button type="submit" class="btn btn-light mb-2">SUBMIT</button>
                                </div>
                            </form>
                            <div class="p-4">
                                <p class="h3">FOLLOW US</p>
                                <!-- Linkedin -->
                                <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-white"></i></a>
                                <!-- Twitter -->
                                <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-white"></i></a>
                                <!-- Dribbble -->
                                <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 px-lg-">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 flex-md-row py-4">
                    
                        <!-- Card image -->
                        <div class="col-md-5 view view-cascade overlay px-0 ml-md-2">
                            <img class="card-img-top h-100" src="{{ asset('images/2.png') }}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="col-md-7 card-body card-body-cascade p-md-5 my-md-3 ml-md-n3 mr-md-0">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-12 px-lg-">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 flex-md-row py-4">
                        <!-- Card content -->
                        <div class="col-md-7 card-body card-body-cascade p-md-5 my-md-3 mr-md-n3 ml-md-0">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt velit aliquam est voluptas perspiciatis labore aperiam quaerat illo sint voluptates nihil vel, in praesentium magni quisquam. Repellat, nesciunt est.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                        <!-- Card image -->
                        <div class="col-md-5 view view-cascade overlay px-0 ml-md-2">
                            <img class="card-img-top h-100" src="{{ asset('images/2.png') }}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </section>
    <section class="py-2 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 h-100">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5 d-flex flex-column justify-content-between">
                    
                            <div>
                                <!-- Title -->
                                <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                                <!-- Subtitle -->
                                <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                    voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                    laborum ut beatae ullam suscipit veniam.
                                </p>
                            </div>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 h-100">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5 d-flex flex-column justify-content-between">
                    
                           <div>
                                <!-- Title -->
                                <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                                <!-- Subtitle -->
                                <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                    voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                    laborum ut beatae ullam suscipit veniam.
                                </p>
                           </div>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-md-4">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 h-100">

                        <!-- Card image -->
                        <div class="view view-cascade overlay">
                        <img class="card-img-top" src="{{ asset('images/2.png') }}"
                            alt="Card image cap">
                        <a href="#!">
                            <div class="mask rgba-white-slight"></div>
                        </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="card-body card-body-cascade p-md-5 d-flex flex-column justify-content-between">
                    
                           <div>
                                <!-- Title -->
                                <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                                <!-- Subtitle -->
                                <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                                <!-- Text -->
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                    voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                    laborum ut beatae ullam suscipit veniam.
                                </p>
                           </div>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
            </div>
        </div>
    </section>
    <section class="py-2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 px-lg-">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 flex-md-row py-4">
                    
                        <!-- Card image -->
                        <div class="col-md-5 view view-cascade overlay px-0 ml-md-2">
                            <img class="card-img-top h-100" src="{{ asset('images/2.png') }}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    
                        <!-- Card content -->
                        <div class="col-md-7 card-body card-body-cascade p-md-5 my-md-3 ml-md-n3 mr-md-0">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                    
                    </div>
                    <!-- Card -->
                </div>
                <div class="col-sm-12 px-lg-">
                    <!-- Card -->
                    <div class="card card-cascade wider reverse border-0 flex-md-row py-4">
                        <!-- Card content -->
                        <div class="col-md-7 card-body card-body-cascade p-md-5 my-md-3 mr-md-n3 ml-md-0">
                    
                            <!-- Title -->
                            <h4 class="card-title text-primary h3"><strong>My adventure</strong></h4>
                            <!-- Subtitle -->
                            <h6 class="font-weight-bold indigo-text py-2 text-primary-50">By Photography on October 2022</h6>
                            <!-- Text -->
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem perspiciatis
                                voluptatum a, quo nobis, non commodi quia repellendus sequi nulla voluptatem dicta reprehenderit, placeat
                                laborum ut beatae ullam suscipit veniam.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae sunt velit aliquam est voluptas perspiciatis labore aperiam quaerat illo sint voluptates nihil vel, in praesentium magni quisquam. Repellat, nesciunt est.
                            </p>
                        
                            <div class="d-flex justify-content-between">
                                <a href="#" class="card-link">READ MORE <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
                                <div>
                                    <!-- Linkedin -->
                                    <a class="px-2 fa-lg li-ic"><i class="fa fa-linkedin text-primary"></i></a>
                                    <!-- Twitter -->
                                    <a class="px-2 fa-lg tw-ic"><i class="fa fa-twitter text-info"></i></a>
                                    <!-- Dribbble -->
                                    <a class="px-2 fa-lg fb-ic"><i class="fa fa-facebook-f text-primary"></i></a>
                                </div>
                            </div>
                    
                        </div>
                        <!-- Card image -->
                        <div class="col-md-5 view view-cascade overlay px-0 ml-md-2">
                            <img class="card-img-top h-100" src="{{ asset('images/2.png') }}"
                                alt="Card image cap">
                            <a href="#!">
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-4">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection