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
        svg {
            width: 100%;
            height: auto;
        }

        .overlay {
            position: absolute;
            height: 80%;
            width: 100%;
            right: 0;
            background: #05316c6b;
        }

        #home #title {
            z-index: 2;
        }

        #our-story svg {
            position: absolute;
            top: -5px;
            z-index: 0;
        }

        @media (max-width: 768px) {
            #home img {
                /* height: 100%!important; */
            }
            #home #title .h3 {
                font-size: 1rem;
            }
            #home #title .h1 {
                font-size: 1.575rem;
            }
        }
    </style>
@endsection
@section('content')
    {{-- HOME --}}
    <section id="home" class="" style="background-image: url({{ asset('images/1.png') }}); background-size: cover; height: 70vh">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-12 col-md-7 text-center text-white">
                    <div>
                        <h1 class="h3">ABOUT POVERTY WATCH AFRICA</h1>
                        <div class="mt-3 mt-md-5 pt-5 pl-md-4">
                            <p class="h1">LOREM IPSUM DOLOR SIT AMET CONSECTETUR ADIPISICING ELIT.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./HOME --}}
    {{-- OUR-VISION --}}
    <section id="our-vision" class="pb-3 pb-md-5 bg-blue tick-border-white">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <h2 class="text-white">
                        <span class="font-weight-bold">WE BELIEVE EVERY PERSON DESERVES THE CHOICE</span>
                        TO LIVE WITH DIGNITY NOT DEPENDENCE
                    </h2>
                </div>
                <div class="col-12 col-md-6 mt-5">
                    <div class="card bg-blue shadow">
                        <div class="card-body">
                            <h2 class="h4 text-white font-weight-bold card-title">OUR VISION</h2>
                            <p class="text-white card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur voluptatem sunt alias modi ducimus. Et debitis similique nisi. Dolores fugiat iure sunt vel accusantium labore ipsa sit culpa laboriosam tenetur. Atque dolorem quibusdam vero est tempora eius aut reiciendis totam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque excepturi veniam itaque odit repellendus. Dignissimos harum sed minus delectus error cum sunt amet perferendis nostrum animi. Adipisci animi deleniti dolorem!</p>
                        </div>
                        <div class="card-footer border-0">
                            <a href="#" class="pull-right btn btn-light font-weight-bold text-primary">DOWNLOAD PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./OUR-VISION --}}
    {{-- OUR_STORY --}}
    <section id="our-story" class="position-relative" style="height: 75vh">
        <span style="background-image: url({{ asset('images/1.png') }}); background-cover: cover; background-attachment: fixed; width: 100%; height: 75vh; z-index: -2; position: absolute"></span>
        <svg viewBox="0 0 1759 404" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -392.000000)" fill="#ffffff" stroke="#ffffff">
                    <path d="M7.50333129e-12,398 C757.013911,398 2072.54677,385.989854 1788.769,398 C1599.58381,406.006764 1589.66081,538.673431 1759,796 L-15.2694323,398 C-1177.75648,398 -1172.66667,398 7.50333129e-12,398 Z" id="Path"></path>
                </g>
            </g>
        </svg>
        <span style="position: absolute; height: 100%; width: 100%; background: rgba(2, 7, 12, 0.80);
        ; z-index: -1;"></span>
        <div class="container py-5 h-100">
            <div class="row h-100">
                <div class="col-md-6 order-1 order-md-0 align-self-end">
                    <div class="py-5 mt-5">
                        <div class="text-white">
                            <h2 class="mb-4">OUR STORY</h2>
                            <div class="py-3">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam vel iste quia, sunt possimus explicabo temporibus doloremque ab error, sint illo dolore excepturi quaerat voluptatibus ipsum. Reprehenderit, repellat veritatis laborum aspernatur sunt cumque hic suscipit. Quae, reprehenderit fuga officia sed et vitae consequuntur doloremque, tempore enim ipsum, nesciunt neque iusto.</p>
                            </div>
                            <div class="">
                                <a href="#" class="text-center btn btn-md-lg btn-primary">LEARN ABOUT OUR PATIENT CAPITAL</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-0 order-md-1">
                    <div class="mt-5 pt-5 mt-md-4 pt-md-0 text-blend-white">
                        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic, incidunt!</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./OUR-STORY --}}
    {{-- OUR-FOUNDER --}}
    <section id="our-founder" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="d-flex flex-column justify-content-center">
                        <h2 class="text-primary">OUR FOUNDER</h2>
                        <div class="mt-3">
                            <p class="mb-5">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci amet, officia aliquam minima vero obcaecati alias modi doloribus commodi neque, voluptate iste laudantium, provident odit quibusdam nostrum eaque. Doloremque nihil architecto rerum quasi incidunt earum, eos totam, amet laudantium eius tempore deleniti quidem dolores commodi. Ex eaque accusamus necessitatibus ea?
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim doloremque distinctio perferendis neque iure, velit repellat quis eaque architecto explicabo.
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit, a. Voluptatibus a sequi, odit provident distinctio debitis explicabo in dolorem commodi assumenda culpa natus, animi perferendis quisquam iusto impedit eos!
                            </p>
                            <a href="#" class="btn btn-outline-primary" role="button" aria-label="READ THE FULL STORY">READ THE FULL STORY</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card shadow-lg">
                        <img src="{{ asset('images/2.png') }}" alt="founder-name" class="card-img-top">
                        <div class="card-body text-center">
                            <div class="py-4">
                                <h4 class="card-title text-primary">NDONG MINTSA STYRON A.</h4>
                                <hr class="w-50 mb-4">
                                <p class="card-text text-muted">FOUNDER</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./OUR-FOUNDER --}}
    {{-- OUR-PARTNERS --}}
    <section id="our-partners">
        <svg width="1549px" height="125px" viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#FFFFFF" stroke="#FFFFFF">
                    <path d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </section>
    <section class="bg-white py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('images/1.png') }}" alt="founder-img" class="img-fluid">
                </div>
                <div class="col-md-6">
                    <div class="mt-3">
                        <h2 class="my-4 text-primary">OUR PARTNERS</h2>
                        <div class="mb-4">
                            <p>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quo a praesentium assumenda! Eligendi ut accusamus quia qui soluta! Nulla eveniet nesciunt optio. Vitae aperiam voluptatem praesentium culpa natus, architecto delectus? Voluptatum fugit repudiandae officiis veniam, eum consequuntur autem similique temporibus!
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam necessitatibus iure eligendi hic temporibus? Nesciunt ullam esse quisquam eius quis.
                            </p>
                            <a href="{{ route('partners') }}" class="btn btn-outline-primary pull-right">JOIN OUR COMMUNITY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./OUR-PARTNERS --}}
    {{-- WHAT WE DO --}}
    <section id="what-we-do" class="py-5 bg-blue">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center text-white my-3 pb-5">
                        <h2>WHAT WE DO</h2>
                    </div>
                </div>
                <div class="card-deck">
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="card-title text-primary font-weight-bold">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod, cumque voluptate? Fuga molestias, magni maiores illo adipisci consequatur animi alias?
                            </p>
                            <a href="#" class="card-link text-primary" role="link" aria-label="LEARN MORE">LEARN MORE</a>
                        </div>
                        <img class="card-img-top" src="{{ asset('images/3.png') }}" alt="">
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="card-title text-primary font-weight-bold">Lorem ipsum dolor sit amet consectetur.</h4>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati vel officia esse, accusantium nihil iste minima eum. Est expedita, saepe voluptatem odit voluptas ratione dolorem.

                            </p>
                            <a href="#" class="card-link text-primary" role="link" aria-label="LEARN MORE">LEARN MORE</a>
                        </div>
                        <img class="card-img-top" src="{{ asset('images/2.png') }}" alt="">
                    </div>
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="card-title text-primary font-weight-bold">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</h4>
                            <p class="card-text text-dark">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa est, numquam molestiae quibusdam obcaecati rem qui quia dolore nobis non commodi reiciendis sit doloribus aspernatur ex ipsam maxime. Molestiae, incidunt.
                            </p>
                            <a href="#" class="card-link text-primary" role="link" aria-label="LEARN MORE">LEARN MORE</a>
                        </div>
                        <img class="card-img-top" src="{{ asset('images/1.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ./WHAT WE DO --}}
    @include('partials.footer')
@endsection