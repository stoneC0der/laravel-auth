<nav class="navbar navbar-expand-lg navbar-light navbar-laravel py-0 sticky-top shadow-sm" style="z-index: 9999">
    <div class="container">
        <a class="navbar-brand py-3 py-md-4 py-lg-2 font-weight-bolderyar" href="{{ url('/') }}">
            {{-- {!! config('app.short_name', trans('titles.app')) !!} --}}
            <img src="{{ asset('images/logo.png') }}" alt="" class="img-fluid" width="80px" height="80px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            <span class="sr-only">{!! trans('titles.toggleNav') !!}</span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            {{-- Left Side Of Navbar --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown py-2 px-xl-3">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! trans('titles.about') !!}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('about-us') }}">
                            {!! trans('titles.aboutUs') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('manifesto') }}">
                            {!! trans('titles.manifesto') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('team') }}">
                            {!! trans('titles.team') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('partners') }}">
                            {!! trans('titles.partners') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('reports') }}">
                            {!! trans('titles.reports') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('annual-report') }}">
                            {!! trans('titles.annual-report',['year'=>2022]) !!}
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown py-2 px-xl-3">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! trans('titles.investments') !!}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('our-approach') }}">
                            {!! trans('titles.our-approach') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('companies') }}">
                            {!! trans('titles.companies') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('regions') }}">
                            {!! trans('titles.regions') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('sectors') }}">
                            {!! trans('titles.sectors') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('investPrinciples') }}">
                            {!! trans('titles.investPrinciples') !!}
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown py-2 px-xl-3">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {!! trans('titles.membership') !!}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('about-membership') }}">
                            {!! trans('titles.about') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('fellows') }}">
                            {!! trans('titles.meetMembers') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('faqs') }}">
                            {!! trans('titles.faqs') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('membership-regions') }}">
                            {!! trans('titles.memberRegions') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('course-overview') }}">
                            {!! trans('titles.memberCourse') !!}
                        </a>
                        <div class="dropdown-divider"></div>
                        @guest
                        @else
                            <a class="dropdown-item" href="{{ route('fellows') }}">
                                {!! trans('titles.mentors') !!}
                            </a>
                        @endguest
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('register') }}">
                            APPLY FOR A MEMBERSHIP
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown py-2 px-xl-3">
                    <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        AREAS OF INTEREST
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('educEntrepreneurship') }}">
                            EDUCATION & ENTREPRENEURSHIP
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('humanRights') }}">
                            HUMAN RIGHTS
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            CONSUMER RIGHTS
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            GOOD GOVERNANCE & LEADERSHIP
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            FIGHT AGAINST CORRUPTION
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            ENVIRONMENTAL PROTECTION
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">
                            CORPORATE & SOCIAL RESPONSIBILITY
                        </a>
                    </div>
                </li>
                <li class="py-2 px-xl-3"><a class="nav-link" href="{{ route('blog.posts') }}">THE LATEST</a></li>
            </ul>
            {{-- Right Side Of Navbar --}}
            <ul class="navbar-nav ml-auto">
                <li id="donate" class="nav-item dropdown py-2 px-xl-3">
                    <a class="" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    </a>
                    <a class="nav-link font-weight-bolder border-bottom border-primary text-primary" href="http://donation.pwa.test" id="navbarDropdown" role="button" aria-haspopup="true" aria-expanded="false" target="_blank">
                        DONATE
                    </a>
                    <div class="dropdown-menu bg-primary border-0" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-white" href="http://donation.pwa.test" target="_blank">
                            GIVE ONCE
                        </a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item text-white" href="http://donation.pwa.test" target="_blank">
                            GIVE MONTHLY
                        </a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item text-white" href="{{ route('partners') }}">
                            BECOME A PARTNER
                        </a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item text-white" href="#">
                            OTHER WAYS TO GIVE
                        </a>
                    </div>
                </li>
                @role('admin')
                    <li class="nav-item dropdown py-2 px-xl-3">
                        <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {!! trans('titles.adminDropdownNav') !!}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ (Request::is('roles') || Request::is('permissions')) ? 'active' : null }}" href="{{ route('laravelroles::roles.index') }}">
                                {!! trans('titles.laravelroles') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('users', 'users/' . Auth::user()->id, 'users/' . Auth::user()->id . '/edit') ? 'active' : null }}" href="{{ url('/users') }}">
                                {!! trans('titles.adminUserList') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('users/create') ? 'active' : null }}" href="{{ url('/users/create') }}">
                                {!! trans('titles.adminNewUser') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('themes','themes/create') ? 'active' : null }}" href="{{ url('/themes') }}">
                                {!! trans('titles.adminThemesList') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('logs') ? 'active' : null }}" href="{{ url('/logs') }}">
                                {!! trans('titles.adminLogs') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('activity') ? 'active' : null }}" href="{{ url('/activity') }}">
                                {!! trans('titles.adminActivity') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('phpinfo') ? 'active' : null }}" href="{{ url('/phpinfo') }}">
                                {!! trans('titles.adminPHP') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('routes') ? 'active' : null }}" href="{{ url('/routes') }}">
                                {!! trans('titles.adminRoutes') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('active-users') ? 'active' : null }}" href="{{ url('/active-users') }}">
                                {!! trans('titles.activeUsers') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item {{ Request::is('blocker') ? 'active' : null }}" href="{{ route('laravelblocker::blocker.index') }}">
                                {!! trans('titles.laravelBlocker') !!}
                            </a>
                        </div>
                    </li>
                @endrole
                {{-- Authentication Links --}}
                @guest
                    <li class="p-3"><a class="nav-link text-uppercase mb-0" href="{{ route('login') }}">{{ trans('titles.login') }}</a></li>
                    {{-- <li class="p-3"><a class="nav-link" href="{{ route('register') }}">{{ trans('titles.register') }}</a></li> --}}
                @else
                    <li class="nav-item dropdown py-2 px-xl-3">
                        <a id="navbarDropdown" class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            @if ((Auth::User()->profile) && Auth::user()->profile->avatar_status == 1)
                                <img src="{{ Auth::user()->profile->avatar }}" alt="{{ Auth::user()->name }}" class="user-avatar-nav">
                            @else
                                <div class="user-avatar-nav"></div>
                            @endif
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item {{ Request::is('profile/'.Auth::user()->name, 'profile/'.Auth::user()->name . '/edit') ? 'active' : null }}" href="{{ url('/profile/'.Auth::user()->name) }}">
                                {!! trans('titles.profile') !!}
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <li class="nav-item p-2">
                    <span class="nav-link" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                </li>
            </ul>
        </div>
    </div>
</nav>
