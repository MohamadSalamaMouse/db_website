<section class="intro-about section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="intro-content-text">

                    <h2 data-dsn-grid="move-section" data-dsn-move="-30" data-dsn-duration="100%" data-dsn-opacity="1.2" data-dsn-responsive="tablet">
                        {{@Utility::getsettings('menu_name_section1')}}
                    </h2>

                    {{-- <p data-dsn-animate="text">{{@Utility::getsettings('menu_detail_section1')}}</p> --}}
                    <h3 data-dsn-animate="text">World leading brand specialists, consulting, design, experience</h3>

                    <h6 data-dsn-animate="text">{{@Utility::getsettings('menu_bold_name_section1')}}</h6>
                    <small data-dsn-animate="text">Digital Artisit</small>

                    <div class="link-custom">
                        @if(Utility::getsettings('menu_button_url_section1'))
                            <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                                <a href="{{@Utility::getsettings('menu_button_url_section1')}}" title="{{@Utility::getsettings('menu_button_title_section1')}}" class="btn btn-primary custom-btn-style-1 font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>{{@Utility::getsettings('menu_button_title_section1')}}</span></a>
                            </div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="background-mask">
        <div class="background-mask-bg"></div>
        <div class="img-box">
            <div class="img-cent" data-dsn-grid="move-up">
                <div class="img-container">
                    <img data-dsn-y="30%" src="{{Storage::url(Utility::getsettings('menu_image_section1'))}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
