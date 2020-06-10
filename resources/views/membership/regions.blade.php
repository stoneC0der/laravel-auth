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
                            <span class="font-weight-bold">DEVELOPING LEADERS WHO WORK ACROSS LINES OF DIFFERENCE </span>
                            TO CHALLENGE THE STATUS QUO
                        </h2>
                    </div>
                </div>
                <div class="col-md-6 ml-auto">
                    <div class="py-3 pl-5">
                        <p>
                            Our Fellows Program is currently offered in Malaysia, Bangladesh, Colombia, East Africa, West Africa, and India. Over the course of a year, Fellows remain in their jobs while participating in five, multi-day immersive seminars and engaging in online content between seminars. The program design is centered on group-based learning, self-reflection, and real-world application. Fellows receive training, practical tools and the space to explore their own leadership journeys while connecting with innovators across Acumen’s local and global communities. Find your region below.
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
                        <h2 class="text-primary mb-4">GABON</h2>
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
                        <h2 class="text-white mb-4">EQUATORIAL GUINNEA</h2>
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
                        <h2 class="text-white mb-4">CAMEROON</h2>
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
                        <h2 class="text-primary mb-4">MOROCO</h2>
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
    <section class="py-5" style="background-image: url({{ asset('images/regions_bg4.png') }});
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
                        <h2 class="text-primary mb-4">GHANA</h2>
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
                        <h2 class="text-primary mb-4">IVORY COAST</h2>
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
                        <h2 class="text-white mb-4">TCHAD</h2>
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
                        <h2 class="text-primary mb-4">GHANA</h2>
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
    <section class="py-5" style="background-image: url({{ asset('images/regions_bg2.png') }});
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
                        <h2 class="text-white mb-4">MALI</h2>
                        <p class="text-white mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                        </p>
                        <a href="#" class="btn btn-light">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="my-5 ml-md-5">
                        <h2 class="text-primary mb-4">BURUNDI</h2>
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
                        <h2 class="text-white mb-4">TOGO</h2>
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
                        <h2 class="text-primary mb-4">ETHIOPIA</h2>
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
    <section class="py-5" style="background-image: url({{ asset('images/regions_bg3.png') }});
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
                        <p class="text-dark mb-4">
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
    <section class="py-5" style="background-image: url({{ asset('images/regions_bg2.png') }});
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
                        <h2 class="text-white mb-4">WEST AFRICA</h2>
                        <p class="text-white mb-4">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur id, voluptates et, veritatis cumque optio voluptatum ipsam ullam nisi, omnis eveniet aliquam accusantium eum. Accusamus in iure ipsum eveniet, voluptatibus fugit, impedit neque suscipit hic ratione consectetur, aperiam optio deleniti?
                        </p>
                        <a href="#" class="btn btn-light">LEARN MORE</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 align-self-center">
                    <div class="my-5 ml-md-5">
                        <h2 class="text-primary mb-4">CENTRAL AFRICA</h2>
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
    <section id="report" class="" style="height:100vh; 
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