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

        #fellow-card .fellow-card {
            background: rgba(0,0,0,.6);
        }
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/fellow.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <p class="h6 mb-4">FREQUENTLY ASKED QUESTIONS</p>
                        <h1 class="">
                            <span class="font-weight-bold">DEVELOPING LEADERS WHO CHALLENGE THE STATUS QUO</span>
                            AND INSPIRE THEIR COMMUNITIES TO BUILD A BETTER FUTURE
                        </h1>
                        <a href="#" class="btn btn-primary">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white py-4 py-md-5 tick-border-primary">
        <div class="container my-4">
            <div class="row">
                <div class="col-md-6">
                    <div>
                        <h2>
                            <span class="font-weight-bold">WE’RE EQUIPPING EXTRAORDINARY LEADERS</span>,
                            WITH THE CAPACITY TO POSITIVELY TRANSFORM SOCIETY
                        </h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <h3 class="h4">PARTNERING WITH POVERTY WATCH AFRICA </h3>
                        <p>
                            We’re building a pipeline of leaders who understand what it takes to create change in our complex, interconnected world. Our Fellows Program is a one-year leadership development program designed to connect and cultivate a pipeline of social changemakers who are committed to tackling poverty and injustice in their communities.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="member-quote" class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/2.png') }}" alt="" class="bg-dark rounded-circle p-1" height="178px" width="178px">
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="">
                        <blockquote class="blockquote text-center">
                            <div class="d-flex mb-3">
                                <span class="fa fa-quote-left"></span> 
                                <p class="mb-0">
                                    The Acumen fellowship made me reality-check why I was in Kenya and what I needed to do. Instead of focusing on the problem, I learned to focus on the solution.
                                </p>
                                <span class="fa fa-quote-right"></span>
                            </div>
                            <footer class="blockquote-footer">FAITH MUIGAI, <cite title="Source Title">EAST AFRICA FELLOW</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="fellow-card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 p-0" style="background-image: url({{ asset('images/fellow.jpg') }}); background-size:cover;">
                    <div class="fellow-card p-4 p-md-5">
                        <div class="mb-4 mb-md-5 text-white px-5 pt-5">
                            <p class="h5 mb-3">FELLOWSHIP REGIONS</p>
                            <p class="h1 font-weight-light">OUR FELLOWSHIPS ARE CURRENTLY OFFERED IN MULTIPLE REGIONS AROUND THE WORLD</p>
                            <div class="my-5 pt-5">
                                <a href="#" class="btn btn-primary btn-lg">FIND YOUR REGION</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-0" style="background-image: url({{ asset('images/fellow1.jpg') }}); background-size:cover;">
                    <div class="fellow-card p-4 p-md-5">
                        <div class="mb-4 mb-md-5 text-white px-5 pt-5">
                            <p class="h5 mb-3">COURSE OVERVIEW</p>
                            <p class="h1 font-weight-light">OUR FELLOWSHIPS ARE CURRENTLY OFFERED IN MULTIPLE REGIONS AROUND THE WORLD</p>
                            <div class="my-5 pt-5">
                                <a href="#" class="btn btn-lg btn-primary">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-blue">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="py-5">
                        <h2 class="text-white h2">STAY UP TO DATE ABOUT YOUR REGION</h2>
                    </div>
                </div>
                <div class="col-md-8 mx-auto">
                    <div class="d-flex flex-wrap">
                        <form class="pb-5 w-100">
                            <div class="form-row">
                              <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <div class="form-group">
                                    <label class="sr-only" for="inlineFormInputGroup">FIRST NAME</label>
                                    <input type="text" class="form-control p-4 border-0 shadow-lg border-0" placeholder="FIRST NAME">
                                </div>
                              </div>
                              <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <div class="form-group">
                                    <label class="sr-only" for="inlineFormInputGroup">LAST NAME</label>
                                    <input type="text" class="form-control form-control-lg border-0 shadow-lg border-0" placeholder="LAST NAME">
                                </div>
                              </div>
                              <div class="col-12 col-md-3 mb-2 mb-md-0">
                                <div class="form-group">
                                    <label class="sr-only" for="inlineFormInputGroup">EMAIL</label>
                                        <input type="email" class="form-control form-control-lg border-0 shadow-lg border-0" id="inlineFormInputGroup" placeholder="EMAIL">
                                </div>
                              </div>
                              <div class="col-12 col-md-3 mb-2 mb-md-0">
                                    <div class="input-group mb-2">
                                        <select class="custom-select custom-select-lg form-control-lg border-0 shadow-lg border-0 text-primary-2" name="region" id="">
                                            <option selected class="text-primary">REGION</option>
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                        <div class="input-group-append border-0">
                                            <div class="input-group-text text-white bg-blue"><i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i></div>
                                        </div>
                                    </div>
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="report" class="" style="height:80vh; 
        background-image: url({{ asset('images/fellow3.jpg') }};
        background-size: cover;
        background-position: center;
        ">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-5 align-self-center">
                    <div class="p-5 text-white" style="background: rgba(1, 12, 18, 0.62)">
                        <p class="h6 mb-3">POVERTY WATCH AFRICA <i class="fa fa-plus" aria-hidden="true"></i></p>
                        <h3 class="h1 font-weight-light mb-3">NOT READY TO APPLY FOR OUR NEXT COHORT?</h3>
                        <p class="mb-5">
                            Take a course! Our +Acumen platform offers world-class online courses with renowned experts like Chris Anderson so that anyone, anywhere can think differently, learn collaboratively and join a global community of social changemakers.
                        </p>
                        <a href="#" class="btn  bg-blue">BROWSE OUR MENTOR</a>
                    </div>
                </div>               
                <div class="col-md-7"></div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection