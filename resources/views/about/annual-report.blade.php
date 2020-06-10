@extends('layouts.app')
@section('head')
    <style>
        section#home::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 80%;
            top: 0;
            left: 0;
            background-image: linear-gradient(-75deg,rgba(8, 9, 10, 0.65) calc((1300px / 1.8) + ((100vw - 1200px)/ 2)),rgba(0,0,0,0) 0);
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        #report .container .col-md-10.mx-auto > div{
            width: 100%;
            height: 100%;
            left: 0;
            background: rgb(255, 255, 255);
        }
    </style>
@endsection
@section('content')

<section id="home" class="pb-5" style="background-image: url({{ asset('images/3.png') }}); background-size:cover; height:70vh; background-size:cover">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-5"></div>
            <div class="col-md-7 ml-md-auto align-self-end">
                <div class="hero text-white py-4 text-right">
                    <h1 class="font-weight-bold">
                        <span class="font-weight-bold">2022</span>
                    </h1>
                    <p class="display-4">ANNUAL REPORT</p>
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>
</section>
<section id="report" class="py-5 bg-white" 
    style="background-image: url({{ asset('images/Desktop.png') }});
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-position-x: center;
    background-position-y: center;
    "
    >
    <div class="container">
        <div class="row">
            <div class="col-md-10 px-5 mx-auto">
                <div class="py-4 px-2 px-md-5 shadow-lg rounded" style="
                    
                    ">
                    <div class="my-4 pt-2">
                        <h2 class="h4 text-primary">INTRODUCING ACUMEN’S 2019 ANNUAL REPORT</h2>
                    </div>
                    <div class="mb-5 text-dark">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis fuga quod voluptatem facere debitis tempore esse eligendi, reprehenderit optio non aperiam vero corporis expedita? Modi odio reprehenderit explicabo minima quas.
                        </p>
                        <ul class="list-style">
                            <li class="list-item">Prepared to expand our reach and ethos with the launch of Acumen Academy, the world’s school for social change.</li>
                            <li class="list-item">Launched new Acumen Fellowship Programs in Bangladesh, Malaysia and Spain led by Regional Partners.</li>
                            <li class="list-item">Spun out Lean DataSM, our approach to impact measurement, to create a new company, 60 Decibels.</li>
                            <li class="list-item">Released the eight Investment Principles that guide Acumen’s work of standing with the poor.</li>
                            <li class="list-item">Invested in 11 new companies tackling some of the world’s toughest challenges.</li>
                        </ul>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid molestiae ratione in quam culpa magni, voluptas quasi nulla aliquam unde illum architecto error, itaque doloribus dicta consequuntur eaque similique, perferendis doloremque. Itaque quod quis quasi! Quidem magni tenetur mollitia explicabo!
                        </p>
                        <p>
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Harum saepe ipsam perferendis laboriosam ullam, error voluptate culpa, in adipisci maxime hic maiores magnam itaque cumque! Alias aut deserunt veniam laboriosam eum impedit itaque accusamus fugiat tenetur? Consequatur officia blanditiis minima facere reprehenderit quas adipisci dolorem iure possimus, doloremque officiis excepturi.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid molestiae ratione in quam culpa magni, voluptas quasi nulla aliquam unde illum architecto error, itaque doloribus dicta consequuntur eaque similique, perferendis doloremque. Itaque quod quis quasi! Quidem magni tenetur mollitia explicabo!
                        </p>
                    </div>
                    <div class="my-4 text-center">
                        <a href="#" class="btn btn-lg btn-primary">DOWNLOAD THE REPORT</a>
                    </div>
                    <div class="my-5 text-center">
                        <p class="h5">
                            Banner Photo Credit: Hanz Rippe/Fernanda Pineda for USAID Colombia
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    @include('partials.footer')
@endsection