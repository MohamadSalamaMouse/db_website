<div class="dsn-slider" data-dsn-header="project">
    <div class="dsn-root-slider" id="dsn-hero-parallax-img">
        <div class="slide-inner">
            <div class="swiper-wrapper">
                <div class="slide-item swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-inner">
                            <div class="project-metas">
                                {{-- <div class="project-meta-box project-work cat">
                                </div> --}}
                            </div>
                            <div class="title-text-header">
                                <div class="title-text-header-inner" style="margin-top: 100px">
                                    <h1 style="font-size: 150%">stay <br> connected</h1>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image-bg cover-bg"
                            data-image-src="{{ Storage::url(Utility::getsettings('slider_image_section1')) }}"
                            data-overlay="0">
                            <img src="{{ Storage::url(Utility::getsettings('slider_image_section1')) }}" alt="">
                        </div>
                    </div>
                </div>
                {{--          <div class="slide-item swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-inner">
                            <div class="project-metas">
                                <div class="project-meta-box project-work cat">
                                    <span>{{@Utility::getsettings('slider_name_section1')}}</span>
                                </div>
                            </div>

                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <a href="#" class="effect-ajax" data-dsn-ajax="slider">
                                        {{@Utility::getsettings('slider_bold_name_section1')}}
                                    </a>
                                </div>
                            </div>

                            <p> {{@Utility::getsettings('slider_detail_section1')}}</p>
                            @if (Utility::getsettings('slider_button_url_section1'))
                                <div class="link-custom">
                                    <a href="{{@Utility::getsettings('slider_button_url_section1')}}" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                        <span>{{@Utility::getsettings('slider_button_title_section1')}}</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section1'))}}" data-overlay="0">
                            <img src="{{Storage::url(Utility::getsettings('slider_image_section1'))}}" alt="">
                        </div>
                    </div>
                </div> --}}
                {{--    <div class="slide-item swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-inner">
                            <div class="project-metas">
                                <div class="project-meta-box project-work cat">
                                    <span>{{@Utility::getsettings('slider_name_section2')}}</span>
                                </div>
                            </div>

                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <a href="#" class="effect-ajax" data-dsn-ajax="slider">
                                        {{@Utility::getsettings('slider_bold_name_section2')}}
                                    </a>
                                </div>
                            </div>

                            <p> {{@Utility::getsettings('slider_detail_section2')}}</p>
                            @if (Utility::getsettings('slider_button_url_section2'))
                                <div class="link-custom">
                                    <a href="{{@Utility::getsettings('slider_button_url_section2')}}" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                        <span>{{@Utility::getsettings('slider_button_title_section2')}}</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section2'))}}" data-overlay="0">
                            <img src="{{Storage::url(Utility::getsettings('slider_image_section2'))}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="slide-item swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-inner">
                            <div class="project-metas">
                                <div class="project-meta-box project-work cat">
                                    <span>{{@Utility::getsettings('slider_name_section3')}}</span>
                                </div>
                            </div>

                            <div class="title-text-header">
                                <div class="title-text-header-inner">
                                    <a href="#" class="effect-ajax" data-dsn-ajax="slider">
                                        {{@Utility::getsettings('slider_bold_name_section3')}}
                                    </a>
                                </div>
                            </div>

                            <p> {{@Utility::getsettings('slider_detail_section3')}}</p>
                            @if (Utility::getsettings('slider_button_url_section3'))
                                <div class="link-custom">
                                    <a href="{{@Utility::getsettings('slider_button_url_section3')}}" class="image-zoom effect-ajax" data-dsn="parallax" data-dsn-ajax="slider">
                                        <span>{{@Utility::getsettings('slider_button_title_section3')}}</span>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="image-container">
                        <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section3'))}}" data-overlay="0">
                            <img src="{{Storage::url(Utility::getsettings('slider_image_section3'))}}" alt="">
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="dsn-slider-content"></div>
    {{-- <div class="nav-slider">
        <div class="swiper-wrapper" role="navigation">
            <div class="swiper-slide">
                <div class="image-container">
                    <div class="image-bg cover-bg" data-image-src="/storage/app/landing-page/menu/menusection1.png" data-overlay="1">
                    </div>
                </div>
                <div class="content">
                    <p>01</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-container">
                    <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section1'))}}" data-overlay="2">
                    </div>
                </div>
                <div class="content">
                    <p>01</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-container">
                    <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section2'))}}" data-overlay="3">
                    </div>
                </div>
                <div class="content">
                    <p>02</p>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="image-container">
                    <div class="image-bg cover-bg" data-image-src="{{Storage::url(Utility::getsettings('slider_image_section3'))}}" data-overlay="4">
                    </div>
                </div>
                <div class="content">
                    <p>03</p>
                </div>
            </div>
        </div>
    </div> --}}
    <section class="footer-slid" id="descover-holder">
        <div class="main-social">
            {{-- <div class="social-icon">
                <div class="social-btn">
                    <div class="svg-wrapper">
                        <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 23.3 23.2">
                            <path d="M19.4 15.5c-1.2 0-2.4.6-3.1 1.7L7.8 12v-.7l8.5-5.1c.7 1 1.9 1.6 3.1 1.6 2.1 0 3.9-1.7 3.9-3.9S21.6 0 19.4 0s-3.9 1.7-3.9 3.9v.4L7 9.3c-1.3-1.7-3.7-2-5.4-.8s-2.1 3.7-.8 5.4c.7 1 1.9 1.6 3.1 1.6s2.4-.6 3.1-1.6l8.5 5v.4c0 2.1 1.7 3.9 3.9 3.9s3.9-1.7 3.9-3.9c0-2.1-1.7-3.8-3.9-3.8zm0-13.6c1.1 0 1.9.9 1.9 1.9s-.9 1.9-1.9 1.9-1.9-.7-1.9-1.8.8-2 1.9-2zM3.9 13.6c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.9-1.9 1.9zm15.5 7.8c-1.1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9 1.9.9 1.9 1.9-.8 1.8-1.9 1.9z">
                            </path>
                        </svg>
                    </div>
                </div>
            </div> --}}
            {{-- <ul class="social-network">
                <li>
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </li>
            </ul> --}}
        </div>

        {{-- <div class="control-num">
            <span class="sup active">01</span>
        </div> --}}
        <div class="control-nav" style="display: none">
            <div class="prev-container" data-dsn="parallax">
                {{-- <svg viewbox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg> --}}
            </div>

            <div class="next-container" data-dsn="parallax">
                <svg viewbox="0 0 40 40">
                    <path class="path circle" d="M20,2A18,18,0,1,1,2,20,18,18,0,0,1,20,2"></path>
                    <polyline class="path" points="14.6 17.45 20 22.85 25.4 17.45"></polyline>
                </svg>
            </div>
        </div>
    </section>
</div>
<SCript>
    var element = document.querySelector('.dsn-word-wrapper');
    if (element)
        element.innerHTML = element.textContent;
</SCript>
