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
    </style>
@endsection

@section('content')
    <section id="home" class="pb-5" style="background-image: url({{ asset('images/2.png') }}); background-size:cover; height:70vh">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-md-7"></div>
                <div class="col-md-5 ml-md-auto align-self-end">
                    <div class="hero text-white py-4">
                        <p class="h6 mb-4">FREQUENTLY ASKED QUESTIONS</p>
                        <h1 class="">
                            <span class="font-weight-bold">BUILDING A PIPELINE OF LEADERS</span>
                            WHO UNDERSTAND WHAT IT TAKES TO CREATE LASTING CHANGE
                        </h1>
                        <a href="#" class="btn btn-primary">APPLY FOR A MEMBERSHIP</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white tick-border-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="my-4 text-center text-primary">
                        <h2 class="h1">FREQUENTLY ASKED QUESTIONS</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="accordion w-100 my-4" id="accordionExample">
                    <div class="card">
                      <div class="card-header bg-primary border-bottom-0" id="headingOne">
                        <h2 class="mb-0 d-flex justify-content-between align-items-center">
                          <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                          </button>
                          <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne"></i>
                        </h2>
                      </div>
                  
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body px-5 border-dark">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-primary border-bottom-0" id="headingTwo">
                        <h2 class="mb-0 d-flex justify-content-between align-items-center">
                          <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita corrupti fugit maiores delectus deserunt odit.
                          </button>
                          <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"></i>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body px-5 border-dark">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header bg-primary border-bottom-0" id="headingThree">
                        <h2 class="mb-0 d-flex justify-content-between align-items-center">
                          <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias eaque modi odio sequi ad est culpa assumenda, adipisci vel!
                          </button>
                          <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"></i>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body px-5 border-dark">
                          Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                      </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0" id="headingThree">
                          <h2 class="mb-0 d-flex justify-content-between align-items-center">
                            <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias eaque modi odio sequi ad est culpa assumenda, adipisci vel!
                            </button>
                            <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"></i>
                          </h2>
                        </div>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body px-5 border-dark">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0" id="headingThree">
                          <h2 class="mb-0 d-flex justify-content-between align-items-center">
                            <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias eaque modi odio sequi ad est culpa assumenda, adipisci vel!
                            </button>
                            <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"></i>
                          </h2>
                        </div>
                        <div id="collapseFive" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body px-5 border-dark">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0" id="headingThree">
                          <h2 class="mb-0 d-flex justify-content-between align-items-center">
                            <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias eaque modi odio sequi ad est culpa assumenda, adipisci vel!
                            </button>
                            <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"></i>
                          </h2>
                        </div>
                        <div id="collapseSix" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body px-5 border-dark">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-primary border-bottom-0" id="headingThree">
                          <h2 class="mb-0 d-flex justify-content-between align-items-center">
                            <button class="btn btn-block text-left h1 text-uppercase text-white font-weight-bold collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis molestias eaque modi odio sequi ad est culpa assumenda, adipisci vel!
                            </button>
                            <i class="fa fa-chevron-down small text-white" aria-hidden="true" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"></i>
                          </h2>
                        </div>
                        <div id="collapseSeven" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body px-5 border-dark">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('partials.footer')
@endsection