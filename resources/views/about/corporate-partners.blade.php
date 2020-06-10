@extends('layouts.app')

@section('head')
    <style>
        section#home::before {
            content: '';
            position: absolute;
            height: 80%;
            width: 100%;
            top: 0;
            left: 0;
            background: rgba(2, 27, 59, 0.57);
        }
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/corporate-partners.jpg') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <p class="">CORPORATE PARTNERS</p>
                        <h1 class="font-weight-bold">
                            <span class="">OUR PARTNERS KNOW THAT THE WORLD NEEDS</span>
                        </h1>
                        <p class="h2">RADICALLY DIFFERENT APPROACH TO SOLVING POVERTY</p>
                        <a href="#" class="btn btn-primary btn-lg">JOIN US</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')
@endsection