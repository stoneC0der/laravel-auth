@extends('layouts.app')

@section('head')
<style>
    svg {
        width: 100%
    }

    #report::before {
        content: '';
        position: absolute;
        height: 80%;
        width: 100%;
        /* top: 0; */
        left: 0;
        background: #032c442e;
    }
</style>
@endsection

@section('content')
<section class="py-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-5">
                    <h1 class="pt-5 text-primary">ANNUAL REPORTS</h1>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card-deck">
                    <div class="card border-0 shadow bg-blue">
                        <img class="card-img-top" src="{{ asset('images/partners.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-white font-weight-bold">2022 ANNUAL REPORT</h4>
                            <p class="card-text text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia esse,
                                accusantium nihil iste minima eum. Est expedita, saepe voluptatem odit voluptas ratione
                                dolorem.

                            </p>
                            <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link"
                                aria-label="DOWNLOAD REPORT">DOWNLOAD REPORT</a>
                        </div>
                    </div>
                    <div class="card border-0 shadow bg-blue">
                        <img class="card-img-top" src="{{ asset('images/corporate-partners.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-white font-weight-bold">2021 ANNUAL REPORT</h4>
                            <p class="card-text text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia esse,
                                accusantium nihil iste minima eum. Est expedita, saepe voluptatem odit voluptas ratione
                                dolorem.

                            </p>
                            <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link"
                                aria-label="DOWNLOAD REPORT">DOWNLOAD REPORT</a>
                        </div>
                    </div>
                    <div class="card border-0 shadow bg-blue">
                        <img class="card-img-top" src="{{ asset('images/partners.jpg') }}" alt="">
                        <div class="card-body">
                            <h4 class="card-title text-white font-weight-bold">N-YEARS REPORT </h4>
                            <p class="card-text text-white">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia esse,
                                accusantium nihil iste minima eum. Est expedita, saepe voluptatem odit voluptas ratione
                                dolorem.

                            </p>
                            <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link"
                                aria-label="DOWNLOAD REPORT">DOWNLOAD REPORT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <svg viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#FFFFFF" stroke="#FFFFFF">
                <path
                    d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z"
                    id="Path"></path>
            </g>
        </g>
    </svg>
</section>
<section class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="my-4">
                    <h2 class="h1 text-primary">PUBLICATION</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-2 row-cols-md-3 justify-content-center">
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/corporate-partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">COCOA INTERRUPTED</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                            REPORT</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">POVERTY WATCH AFRICA ENERGY IMPACT REPORT</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                            REPORT</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">WOMEN AND SOCIAL ENTERPRISES</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content.</p>
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                        REPORT</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/corporate-partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">GROWING PROSPERITY</h5>
                        <div class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit lonbtn btn-light
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                            REPORT</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/corporate-partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">GROWING PROSPERITY</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                            REPORT</a>
                    </div>
                </div>
            </div>
            <div class="col mb-4">
                <div class="card shadow border-0 h-100 bg-blue">
                    <img src="{{ asset('images/partners.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-white">GROWING PROSPERITY</h5>
                        <p class="card-text text-white">This is a longer card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <a href="#" class="btn btn-light text-primary pull-right btn-sm" role="link" aria-label="DOWNLOAD REPORT">DOWNLOAD
                            REPORT</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="report" class="" style="height:80vh; 
        background-image: url({{ asset('images/3.png') }};
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
        ">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-md-7"></div>
            <div class="col-md-5 align-self-center">
                <div class="p-5 text-white" style="background: rgba(1, 12, 18, 0.52)">
                    <p class="h4">NEW REPORT</p>
                    <h3 class="h1">2022 ANNUAL REPORT</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus maiores exercitationem ex?
                        Eveniet eius veniam quibusdam earum, necessitatibus, ab inventore labore pariatur mollitia
                        eligendi natus eos dicta ipsa qui! Aliquid autem odio ipsam sequi corrupti est adipisci
                        quibusdam incidunt perferendis voluptate commodi, cumque veniam quas laboriosam sed nulla
                        eligendi consequatur.
                    </p>
                    <a href="#" class="btn  bg-blue">DOWNLOAD REPORT</a>
                </div>
            </div>
        </div>
    </div>
</section>
@include('partials.footer')
@endsection