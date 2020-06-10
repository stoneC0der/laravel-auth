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
            background: rgba(0,0,0,.5);
        }
    </style>
@endsection
@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/2.png') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="text-white py-4">
                        <p class="h5 mb-4">OUR REGIONS</p>
                        <h1 class="">
                            <span class="font-weight-bold">WE WORK ACROSS BORDERS AND BOUNDARIES</span>
                            <span class="font-weight-light">TO SOLVE THE TOUGHEST PROBLEMS OF POVERTY</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 bg-white tick-border-primary">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="pr-4">
                        <h2 class="h2 text-primary mb-3">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-image: url({{ asset('images/regions_bg.png') }});
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: center;
        ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-1 order-md-0">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid shadow-lg rounded">
                    </div>
                </div>
                <div class="col-md-6 order-0 order-md-1 align-self-center">
                    <div class="my-5 ml-md-5 align-self-end">
                        <h2 class="text-primary mb-4">WEST AFRICA</h2>
                        <p class=" mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                        </p>
                        <a href="#" class="btn btn-primary">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="my-5 ml-md-5">
                        <h2 class="text-white mb-4">CENTRAL AFRICA</h2>
                        <p class="text-white mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                        </p>
                        <a href="#" class="btn btn-light">LEARN MORE</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="my-5">
                        <img src="{{ asset('images/impact2.jpg') }}" alt="" class="img-fluid shadow-lg rounded">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-image: url({{ asset('images/impact2.jpg') }});
    background-repeat: no-repeat;
    background-size: cover;
    background-position-x: center;
    background-attachment: fixed;
    ">
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-1 order-md-0">
                <div class="my-5">
                    <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid shadow-lg rounded">
                </div>
            </div>
            <div class="col-md-6 order-0 order-md-1 align-self-center">
                <div class="my-5 ml-md-5 align-self-end hero p-4 rounded">
                    <h2 class="text-white mb-4">EST AFRICA</h2>
                    <p class="text-white mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                    </p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center">
                <div class="my-5 ml-md-5">
                    <h2 class="text-primary mb-4">SOUTH AFRICA</h2>
                    <p class="text-dark mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                    </p>
                    <a href="#" class="btn btn-primary">LEARN MORE</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="my-5">
                    <img src="{{ asset('images/impact2.jpg') }}" alt="" class="img-fluid shadow-lg rounded">
                </div>
            </div>
        </div>
    </div>
</section>
    @include('partials.latest-blog')
    @include('partials.footer')
@endsection