
<div class="preloader">
    <div class="preloader-after"></div>
    <div class="preloader-before"></div>
    <div class="preloader-block">
        <div class="title">DS+</div>
        <div class="percent">0</div>
        <div class="loading">loading...</div>
    </div>
    <div class="preloader-bar">
        <div class="preloader-progress"></div>
    </div>
</div>

<!-- Nav Bar -->
<div class="dsn-nav-bar">
    <div class="site-header">
        <div class="extend-container">
            <div class="inner-header">
                <div class="main-logo">
                    <a href="{{ route('homepage') }}" title="{{ config('app.name') }}">
                        <img class="dark-logo" src="{{ Storage::url(setting('app_dark_logo')) ? Storage::url('app-logo/app-dark-logo.png') : asset('assets/images/app-dark-logo.png') }}" alt="">
                        <img class="light-logo" src="{{ Storage::url(setting('app_dark_logo')) ? Storage::url('app-logo/app-dark-logo.png') : asset('assets/images/app-dark-logo.png') }}" alt="">
                    </a>
                </div>
            </div>
            <nav class=" accent-menu main-navigation">
                <ul class="extend-container">
                    <li><a href="{{ route('homepage') }}" title="{{ config('app.name') }}">{{ __('Home') }}</a></li>

                    @php
                        $MainMenus = \App\Models\MenuSetting::where('parent_id', 0)->get();
                        foreach ($MainMenus as $key=>$record){
                            $MainMenus[$key]['SubMenus'] = \App\Models\MenuSetting::where('parent_id', '=', $record['id'])->get();
                        }
                    @endphp
                    @if (!empty($MainMenus))
                        @foreach ($MainMenus as $record)
                            @if(count($record['SubMenus']) > 0)
                                <li class="custom-drop-down">
                                    <a href="#" title="{{$record['title']}}">{{$record['title']}}</a>
                                    <ul>
                                        @foreach ($record['SubMenus'] as $k=>$r)
                                            <li>
                                                <a href="{{$r['slug']}}" title="{{$r['title']}}">{{$r['title']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                            @if ($record["title"] == "News")
                                @continue
                            @endif
                                <li>
                                    <a href="{{$record['slug']}}" title="{{$record['title']}}">{{$record['title']}}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif




                </ul>
            </nav>
        </div>
    </div>
    <div class="header-top header-top-hamburger">
        <div class="header-container">
            <div class="logo main-logo">
                <a href="{{ route('homepage') }}">
                    <img class="dark-logo" src="{{ Storage::url(setting('app_dark_logo')) ? Storage::url('app-logo/app-dark-logo.png') : asset('assets/images/app-dark-logo.png') }}" alt="">
                    <img class="light-logo" src="{{ Storage::url(setting('app_dark_logo')) ? Storage::url('app-logo/app-dark-logo.png') : asset('assets/images/app-dark-logo.png') }}" alt="">
                </a>
            </div>

            <div class="menu-icon" data-dsn="parallax" data-dsn-move="5">
                <div class="icon-m">
                    <i class="menu-icon-close fas fa-times"></i>
                    <span class="menu-icon__line menu-icon__line-left"></span>
                    <span class="menu-icon__line"></span>
                    <span class="menu-icon__line menu-icon__line-right"></span>
                </div>

                <div class="text-menu">
                    <div class="text-button">Menu</div>
                    <div class="text-open">Open</div>
                    <div class="text-close">Close</div>
                </div>
            </div>

            <div class="nav">
                <div class="inner">
                    <div class="nav__content">

                    </div>
                </div>
            </div>
            <div class="nav-content">
                <div class="inner-content">
                    <address class="v-middle">
                        <span>{{Utility::getsettings('contact_email')}}</span>
                        <span>{{Utility::getsettings('contact_phone1')}}</span>
                        <span>{{Utility::getsettings('contact_address')}}</span>

                    </address>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- End Nav Bar -->

<main class="main-root">
    <div id="dsn-scrollbar">