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
        svg {
            width: 100%;
        }
    </style>
@endsection
@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/2.png') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-6"></div>
                <div class="col-md-6 ml-md-auto align-self-center">
                    <div class="text-white py-4">
                        <p class="h6 mb-4">INVESTMENTS</p>
                        <h1 class="">
                            <span class="font-weight-bold">INVESTMENT PRINCIPLES</span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="py-5 bg-white tick-border-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-dark">
                    <p>
                        When Acumen was founded in 2001, we set out to create a new kind of institution—one that would bridge the gap between the social impact of pure philanthropy and the efficiency and scale of markets. 
                    </p>
                    <p>
                        In the two decades since we introduced our patient capital approach, the impact investing sector has grown up around us to be worth more than $500 billion. What sets Acumen apart in this crowded landscape is its starting point. Where many of today’s impact investors start by focusing on financial returns and then look for impact as a secondary outcome, Acumen starts by focusing on the problems it aims to solve, finding the best entrepreneurs to solve them and investing the right kind of capital to support them.
                    </p>
                    <p>
                        These <span class="text-primary">8 Investment Principles</span> name Acumen’s pledge to use its capital where it is needed most, to unleash those nascent but promising innovations that other investors will not take the risk of supporting.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white">
        <svg viewBox="0 0 1389 41" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -740.000000)" fill="#006DFF" stroke="#006DFF">
                    <path d="M3.25913446,778.157973 C8.79297912,777.717797 14.3102885,777.280252 19.8110625,776.845337 C629.787983,728.617943 1087.27067,729.055488 1392.25913,778.157973 C2053.03353,884.541226 -682.534155,832.707688 3.25913446,778.157973 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    <section class="bg-blue py-5">
        <div class="container">
            <div class="row">
                <div class="col-3">
                  <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link bg-white mb-2 border text-primary active" id="v-pills-principle-1-tab" data-toggle="pill" href="#v-pills-principle-1" role="tab" aria-controls="v-pills-principle-1" aria-selected="true">PRINCIPLE 1</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-2-tab" data-toggle="pill" href="#v-pills-principle-2" role="tab" aria-controls="v-pills-principle-2" aria-selected="false">PRINCIPLE 2</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-3-tab" data-toggle="pill" href="#v-pills-principle-3" role="tab" aria-controls="v-pills-principle-3" aria-selected="false">PRINCIPLE 3</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-4-tab" data-toggle="pill" href="#v-pills-principle-4" role="tab" aria-controls="v-pills-principle-4" aria-selected="false">PRINCIPLE 4</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-5-tab" data-toggle="pill" href="#v-pills-principle-5" role="tab" aria-controls="v-pills-principle-5" aria-selected="true">PRINCIPLE 5</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-6-tab" data-toggle="pill" href="#v-pills-principle-6" role="tab" aria-controls="v-pills-principle-6" aria-selected="false">PRINCIPLE 6</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-7-tab" data-toggle="pill" href="#v-pills-principle-7" role="tab" aria-controls="v-pills-principle-3" aria-selected="false">PRINCIPLE 7</a>
                    <a class="nav-link border my-2 text-white" id="v-pills-principle-8-tab" data-toggle="pill" href="#v-pills-principle-8" role="tab" aria-controls="v-pills-principle-4" aria-selected="false">PRINCIPLE 8</a>
                  </div>
                </div>
                <div class="col-9">
                  <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane d-flex fade show active" id="v-pills-principle-1" role="tabpanel" aria-labelledby="v-pills-principle-1-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-2" role="tabpanel" aria-labelledby="v-pills-principle-2-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-3" role="tabpanel" aria-labelledby="v-pills-principle-3-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-4" role="tabpanel" aria-labelledby="v-pills-principle-4-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-5" role="tabpanel" aria-labelledby="v-pills-principle-5-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-6" role="tabpanel" aria-labelledby="v-pills-principle-6-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-7" role="tabpanel" aria-labelledby="v-pills-principle-7-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-principle-8" role="tabpanel" aria-labelledby="v-pills-principle-8-tab">
                        <div class="my-5">
                            <h2 class="mb-4 font-weight-light">
                                PRINCIPLE 1
                            </h2>
                            <p class="font-weight-bold">
                                WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                            </p>
                        </div>
                        <div class="col-6">
                            <div class="my-5">
                                <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        {{-- <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 1
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 2
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
            </div>
        </div> --}}
    {{-- </section>
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 3
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 4
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-white">
        <svg viewBox="0 0 2223 130" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -1106.000000)" fill="#006DFF" stroke="#006DFF">
                    <path d="M446.748351,1119.49 C805.275354,1073.24308 1435.40036,1170.31306 1435.40036,1170.31306 C1435.40036,1170.31306 1715.89254,1214.75024 1899.82676,1210.13977 C2022.44957,1207.06613 2130.17398,1193.10771 2223,1168.26453 L2223,1236 L0,1236 L0,1223.60935 C118.452086,1177.33496 267.368203,1142.6285 446.748351,1119.49 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    <section class="bg-blue py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 5
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 6
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="bg-blue">
        <svg viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#F8F9FA" stroke="#F8F9FA">
                    <path d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 7
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="my-5">
                        <img src="{{ asset('images/agric.jpg') }}" alt="" class="img-fluid rounded shadow-lg">
                    </div>
                </div>
                <div class="col-6">
                    <div class="my-5">
                        <h2 class="mb-4 font-weight-light">
                            PRINCIPLE 8
                        </h2>
                        <p class="font-weight-bold">
                            WE USE THE POWER OF INVESTMENTS TO CHANGE SYSTEMS AND CATALYZE MARKETS TO PROVIDE CHOICE AND OPPORTUNITY FOR PEOPLE LIVING IN POVERTY.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-4 bg-white">
        <div class="container my-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div>
                        <h3 class="h2 text-primary mb-3">
                            <span class="font-weight-bold">WE’VE IMPACTED MORE THAN 230 MILLION LIVES</span>
                            THROUGH OUR INVESTMENTS
                        </h3>
                        <a href="#" class="border-bottom border-primary btn-link"><i class="fa fa-arrow-right" aria-hidden="true"></i> READ MORE ABOUT OUR APPROACH</a>
                    </div>
                </div>
                <div class="col-md-3 ml-auto">
                    <img src="{{ asset('images/logo.png') }}" alt="logo" class="img-fluid">
                </div>
            </div>
        </div>
    </section> --}}
    <div id="our-partners" class="bg-blue">
        <svg viewBox="0 0 1549 125" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Desktop" transform="translate(0.000000, -674.000000)" fill="#f8f9fa" stroke="#f8f9fa">
                    <path d="M1342.50006,681.432283 C1157.71831,646.397849 724.892676,765.418571 584.979603,775.700223 C445.066529,785.981876 392.6334,789.843869 228.781463,770.697531 C119.546839,757.933306 43.2863509,744.817865 0,731.351209 L0,799 L1549.01278,799 C1534.52546,743.977812 1465.68789,704.788573 1342.50006,681.432283 Z" id="Path"></path>
                </g>
            </g>
        </svg>
    </div>
    @include('partials.footer')
@endsection
@section('footer_scripts')
    <script>
        $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
            const regex = /-tab/i;
            const regex2 = /1/;
            id = e.target.getAttribute('id');
            $('#'+id).toggleClass('bg-white text-primary');
            prevId = e.relatedTarget.getAttribute('id');
            if (prevId.match(regex2)) {
                $('#'+prevId).toggleClass('text-white');
            }
            $('#'+prevId).toggleClass('bg-white text-primary');
            tabPane = id.replace(regex, '');
            prevTapPane = prevId.replace(regex, '');
            $('#' + tabPane).toggleClass('d-flex');
            $('#'+ prevTapPane).toggleClass('d-flex');
        })
    </script>
@endsection