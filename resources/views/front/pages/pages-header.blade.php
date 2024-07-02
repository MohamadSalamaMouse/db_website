<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
            <div class="container">
                <div class="header-row">
                    <div class="header-column justify-content-between">
                        <div class="header-row">
                            <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-5" style="direction: ltr;">
                                    <li class="nav-item py-2 d-inline-flex z-index-1">
                                        @if(Utility::getsettings('contact_phone1'))
                                            <span class="d-flex align-items-center p-0">
                                            <span>
                                                <img width="25" src="/assets/front/img/business-consulting-3/icons/phone.svg" alt="Phone Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2" href="tel:{{Utility::getsettings('contact_phone1')}}" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                                                {{Utility::getsettings('contact_phone1')}}
                                            </a>
                                        </span>
                                        @endif
                                        @if(Utility::getsettings('contact_email'))
                                            <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                            <span>
                                                <img width="25" src="/assets/front/img/business-consulting-3/icons/email.svg" alt="Email Icon" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
                                            </span>
                                            <a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ms-2" href="mailto:{{Utility::getsettings('contact_email')}}" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">{{Utility::getsettings('contact_email')}}</a>
                                        </span>
                                        @endif
                                    </li>
                                </ul>
                            </nav>
                            <div class="d-flex align-items-center w-100">
                                <ul class="ps-0 ms-auto mb-0">
                                    <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">

                                    </li>
                                </ul>
                                <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ms-lg-2">
                                    @if(Utility::getsettings('contact_facebook'))
                                        <li class="social-icons-facebook">
                                            <a href="{{ Utility::getsettings('contact_facebook')}}" target="_blank" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
                                        </li>
                                    @endif
                                    @if(Utility::getsettings('contact_twitter'))
                                        <li class="social-icons-twitter">
                                            <a href="{{ Utility::getsettings('contact_twitter')}}" target="_blank" title="twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
                                        </li>
                                    @endif
                                    @if(Utility::getsettings('contact_instagram'))
                                        <li class="social-icons-instagram">
                                            <a href="{{ Utility::getsettings('contact_instagram')}}" target="_blank" title="instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
                                        </li>
                                    @endif
                                    @if(Utility::getsettings('contact_youtube'))
                                        <li class="social-icons-youtube">
                                            <a href="{{ Utility::getsettings('contact_youtube')}}" target="_blank" title="youtube" data-cursor-effect-hover="fit"><i class="fab fa-youtube"></i></a>
                                        </li>
                                    @endif
                                    @if(Utility::getsettings('contact_linkedin'))
                                        <li class="social-icons-linkedin">
                                            <a href="{{ Utility::getsettings('contact_linkedin')}}" target="_blank" title="linkedin" data-cursor-effect-hover="fit"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container" style="height: 117px;">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">

                            <a href="{{ route('homepage') }}" tabindex="0">
                                <img width="250" src="{{ Storage::url(setting('app_dark_logo')) ? Storage::url('app-logo/app-dark-logo.png') : asset('assets/images/app-dark-logo.png') }}"
                                     class="" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-100">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li><a href="{{ route('homepage') }}" class="nav-link text-3 active" title="{{ __('Home') }}">{{ __('Home') }}</a></li>
                                        @php
                                            $MainMenus = \App\Models\MenuSetting::where('parent_id', 0)->get();
                                            foreach ($MainMenus as $key=>$record){
                                                $MainMenus[$key]['SubMenus'] = \App\Models\MenuSetting::where('parent_id', '=', $record['id'])->get();
                                            }
                                        @endphp
                                        @if (!empty($MainMenus))
                                            @foreach ($MainMenus as $record)
                                                @if(count($record['SubMenus']) > 0)
                                                    <li class="dropdown">
                                                        <a class="nav-link text-3 dropdown-toggle" href="#" title="{{$record['title']}}">{{$record['title']}}</a>
                                                        <ul class="dropdown-menu">
                                                            @foreach ($record['SubMenus'] as $k=>$r)
                                                                <li>
                                                                    <a href="/pages/{{$r['slug']}}" class="dropdown-item" title="{{$r['title']}}">{{$r['title']}}</a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                @else
                                                    <li>
                                                        <a class="nav-link text-3" href="/pages/{{$record['slug']}}" title="{{$record['title']}}">{{$record['title']}}</a>
                                                    </li>
                                                @endif
                                            @endforeach
                                        @endif
                                    </ul>
                                    <ul class="nav nav-pills" style="display: none" id="mainNav">
                                        <li>
                                            <a class="nav-link text-3 active" href="/" title="الرئيسية">الرئيسية</a>
                                        </li>

                                        <li class="dropdown">
                                            <a class="nav-link text-3 dropdown-toggle" href="#" title="من نحن">من نحن</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="/about-the-initiative" class="dropdown-item" title="عن المبادرة">عن المبادرة</a>
                                                </li>
                                                <li>
                                                    <a href="/health-improvement" class="dropdown-item" title="جمعية تحسين الصحة">جمعية تحسين الصحة</a>
                                                </li>
                                                <li>
                                                    <a href="/agfund" class="dropdown-item" title="أجفند">أجفند</a>
                                                </li>
                                                <li>
                                                    <a href="/team" class="dropdown-item" title="مجلس الإدارة">مجلس الإدارة</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link text-3" href="/projects" title="مشروعات">مشروعات</a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-3" href="#news" title="الأخبار">الأخبار</a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-3" href="/gallery" title="الوسائط المتعددة">الوسائط المتعددة</a>
                                        </li>
                                        <li>
                                            <a class="nav-link text-3" href="#covenant" title="مواثيق">مواثيق</a>
                                        </li>
                                        <li class="d-lg-none">
                                            <a class="nav-link text-3" href="/contact-us" title="اتصل بنا">اتصل بنا</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                    <a href="/contact-us" class="btn btn-dark custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>اتصل بنا</span></a>
                    <div class="header-nav-features header-nav-features-no-border" style="display: none">
                        <div class="header-nav-feature header-nav-features-search d-inline-flex">
                            <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch" aria-label="Search">
                                <i class="icons icon-magnifier header-nav-top-icon text-3-5 text-color-dark text-color-hover-primary font-weight-semibold top-3"></i>
                            </a>
                            <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed border-radius-0" id="headerTopSearchDropdown">
                                <form role="search" action="page-search-results.html" method="get">
                                    <div class="simple-search input-group">
                                        <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                        <button class="btn" type="submit" aria-label="Search">
                                            <i class="icons icon-magnifier header-nav-top-icon text-color-dark text-color-hover-primary top-2"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                        <i class="fas fa-bars"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</header>