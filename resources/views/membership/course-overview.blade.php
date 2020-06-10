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
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5"
        style="background-image: url({{ asset('images/fellow1.jpg') }}); background-size:cover;height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <h1 class="h6 mb-4">Courses Overview</h1>
                        <p class="h1">
                            BUILDING A PIPELINE OF LEADERS
                            <span class="font-weight-lighter">WHO UNDERSTAND WHAT IT TAKES TO CREATE LASTING CHANGE</span>
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
    <section class="py-5 border-bottom shadow-lg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="py-3 mb-4">
                        <h2 class="text-primary">
                            <span class="font-weight-bold">OUR PROGRAM</span>
                            IN A NUTSHELL
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 justify-content-center">
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">comprehensive Poverty Alleviation Eduction</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Languages</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a short card.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Social Entrepreneurship</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Sustanable Development</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Change Management</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Time Management</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Understand Community Based Development</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="card h-100 border-0 shadow">
                        <div class="card-header bg-white">
                            <h5 class="h3 my-3">Understand Impact of Farming in Africa</h5>
                            <p class="card-title h5 text-primary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eaque, labore!</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                        </div>
                        <div class="card-footer bg-white py-3">
                            <a href="#" class="btn btn-primary">FOUND OUT MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="member-quote" class="py-5 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('images/2.png') }}" alt="" class="bg-dark rounded-circle p-1" height="178px" width="178px">
                </div>
                <div class="col-md-9 align-self-center">
                    <div class="">
                        <blockquote class="blockquote text-center">
                            <div class="d-flex mb-3 text-white">
                                <span class="fa fa-quote-left"></span> 
                                <p class="mb-0">
                                    The Acumen fellowship made me reality-check why I was in Kenya and what I needed to do. Instead of focusing on the problem, I learned to focus on the solution.
                                </p>
                                <span class="fa fa-quote-right"></span>
                            </div>
                            <footer class="blockquote-footer text-white-50">FAITH MUIGAI, <cite title="Source Title">EAST AFRICA FELLOW</cite></footer>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection