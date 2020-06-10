<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Jeremy Kenedy">
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet">

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')

            @if (Auth::User() && (Auth::User()->profile) && (Auth::User()->profile->avatar_status == 0))
                .user-avatar-nav {
                    background: url({{ Gravatar::get(Auth::user()->email) }}) 50% 50% no-repeat;
                    background-size: auto 100%;
                }
            @endif

            .navbar-laravel {
                /* background-color: #ffffffdb; */
                /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.54); */
            }

        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

        @if (Auth::User() && (Auth::User()->profile) && $theme->link != null && $theme->link != 'null')
            <link rel="stylesheet" type="text/css" href="{{ $theme->link }}">
        @endif

        @yield('head')
        <style>
            #donate:hover {
                background: #007bff;
            }

            #donate:hover > a {
                color: white!important;
            }
            .text-muted {
                color: #59a6f8 !important;
            }
            .sidenav {
                height: 100%;
                width: 0;
                position: fixed;
                z-index: 10000;
                top: 0;
                right: 0;
                background-color: rgb(11, 84, 201);
                overflow-x: hidden;
                transition: 0.5s;
                padding-top: 60px;
            }

            .sidenav a {
                padding: 8px 8px 8px 32px;
                text-decoration: none;
                font-size: 25px;
                color: #e8ecf1;
                display: block;
                transition: 0.3s;
            }

            .sidenav a:hover {
                color: #f1f1f1;
            }

            .sidenav .closebtn {
                position: absolute;
                top: 0;
                left: 25px;
                font-size: 36px;
                margin-left: 50px;
            }

            #app {
                transition: margin-right .5s;
                /* padding: 16px; */
            }

            @media screen and (max-height: 450px) {
                .sidenav {padding-top: 15px;}
                .sidenav a {font-size: 18px;}
            }
            .text-blend-white {
                color: #fff!important;
                mix-blend-mode: difference;
            }
            .text-blend-blue {
                color: #006DFF;
                mix-blend-mode: difference;
            }

            .text-primary {
                color: #006DFF!important;
            }
            .bg-blue {
                background: #006DFF!important;
                color: #fff!important;
            }
            .btn:hover {
                transform: scale(1.2);
            }

            .accordion .btn:hover {
                transform: scale(1);
            }

            section#member-list .card.card-cascade:hover,
            section#team-list .card.card-cascade:hover {
                background: #006dff;
                color: #fff;
                cursor: pointer;
            }

            section#member-list .card.card-cascade:hover p.card-title,
            section#team-list .card.card-cascade:hover p.card-title {
                color: #0c0c0c!important;
            }

            .fa.small {
                font-size: 50%;
                font-weight: 400;
                cursor: pointer;
            }

            button, [type=button], [type=reset], [type=submit] {
                -webkit-appearance: none;
            }

            #home .hero {
                z-index: 10;
                background: none
            }
            .hero {
                z-index: 10;
                background: rgba(0,0,0,.7)
            }
            p {
                line-height: 1.5;
            }
        </style>

    </head>
    <body>
        <div id="app">

            @include('partials.nav')

            <main class="py-0">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            @include('partials.form-status')
                        </div>
                    </div>
                </div>

                @yield('content')

            </main>

        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

        {{-- Scripts --}}
        <script src="{{ mix('/js/app.js') }}"></script>

        @if(config('settings.googleMapsAPIStatus'))
            {!! HTML::script('//maps.googleapis.com/maps/api/js?key='.config("settings.googleMapsAPIKey").'&libraries=places&dummy=.js', array('type' => 'text/javascript')) !!}
        @endif
        @include('scripts.drop-down-nav')
        @yield('footer_scripts')
        <script>
            function openNav() {
              document.getElementById("mySidenav").style.width = "420px";
              document.getElementById("app").style.marginRight = "420px";
            }
            
            function closeNav() {
              document.getElementById("mySidenav").style.width = "0";
              document.getElementById("app").style.marginRight= "0";
            }
        </script>
    </body>
</html>
