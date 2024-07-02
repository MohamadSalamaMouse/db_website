<div class="box-seat">
    <div class="dsn-v-text">

        <div class="container-fluid">
            <div class="container">
                <h2 class="section-title">{{ @Utility::getsettings('menu_name_section3') }}</h2>

                <div class="box-middle-text">
                    {{-- <p data-dsn-animate="text"> {{@Utility::getsettings('menu_detail_section3')}}</p> --}}


                    {{-- <a href="https://vimeo.com/852312220" class="vid">
                    <div class="play-button">
                        <div class="play-btn">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                </a> --}}
                    @if (Utility::getsettings('menu_button_url_section3'))
                        <div class="link-custom">
                            {{-- <a class="image-zoom effect-ajax" href="{{ route('see.all.advertisments') }}" data-dsn="parallax">
                            <span>{{@Utility::getsettings('menu_button_title_section3')}}</span>
                        </a> --}}
                        </div>
                    @endif
                </div>

                <div class="inner-img" data-dsn-grid="move-up" data-overlay="9">
                    @if (isset($cover_ad))
                        <a href="/projects?category=2" style="z-index: 1;position: relative;">
                            <img class="has-top-bottom" src="{{ asset('storage/app/' . $cover_ad->cover) }}" alt="">
                        </a>
                    @else
                    <a href="/projects?category=2" style="z-index: 1;position: relative;">
                        <img class="has-top-bottom"
                                src="{{ Storage::url(Utility::getsettings('menu_image_section3')) }}"
                                alt=""></a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
