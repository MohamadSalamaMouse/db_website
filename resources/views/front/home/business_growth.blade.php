<section class="video-play-sec pt pb">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="video-wrapper-div">
                    <div class="video-image">
                        @if (!empty(Utility::getsettings('business_growth_video')))
                            <video id="videoPlayer" controls width="100%" height="100%"
                                   poster="{{ Storage::url(Utility::getsettings('business_growth_front_image')) }}"
                                   data-setup="{}">
                                <source
                                        src="{{ Storage::url(Utility::getsettings('business_growth_video')) }}"
                                        type='video/mp4' />
                                <source
                                        src="{{ Storage::url(Utility::getsettings('business_growth_video')) }}"
                                        type="video/ogg">
                            </video>
                        @else
                            <img src="{{ asset('assets/images/landing-page2/image/video-image.png') }}"
                                 alt="video" width="100%" height="100%">
                        @endif
                    </div>
                    <a href="javascript:void(0);" class="play-btn" id="playButton">
                        <svg xmlns="http://www.w3.org/2000/svg" width="123" height="123"
                             viewBox="0 0 123 123" fill="none">
                            <path
                                    d="M90.3519 110.096C81.8393 115.252 71.8538 118.221 61.1745 118.221C30.0286 118.221 4.7793 92.9717 4.7793 61.8255C4.7793 30.6791 30.0286 5.43027 61.1745 5.43027C92.3207 5.43027 117.57 30.6791 117.57 61.8255C117.57 73.4073 113.999 84.1735 108.011 93.1296"
                                    stroke="#645BE1" stroke-width="9.55851" stroke-miterlimit="10"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                    d="M53.5816 80.2225L77.4064 66.4197C80.9328 64.3768 80.9328 59.2738 77.4064 57.2309L53.5816 43.4282C50.0528 41.3841 45.6406 43.9369 45.6406 48.0225V75.6282C45.6406 79.7139 50.0528 82.2668 53.5816 80.2225Z"
                                    stroke="#645BE1" stroke-width="9.55851" stroke-miterlimit="10"
                                    stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('vendor/landing-page2/image/video-bg.png') }}" alt="background-image"
         class="video-bg">
    <img src="{{ asset('vendor/landing-page2/image/video-bg-2.png') }}" alt="background-image"
         class="video-bg-sec">
</section>
<section class="counter-sec pb">
    <div class="container">
        <div class="section-title">
            <h2> {{ Utility::getsettings('business_growth_name')
                                    ? Utility::getsettings('business_growth_name')
                                    : __('Makes Quick') }}
                <b>
                    {{ Utility::getsettings('business_growth_bold_name')
                        ? Utility::getsettings('business_growth_bold_name')
                        : __('Business Growth') }}
                </b>
            </h2>
            <p>
                {{ Utility::getsettings('business_growth_detail')
                    ? Utility::getsettings('business_growth_detail')
                    : __(
                        'Offer unique products, services, or solutions that stand out in the market. Innovation and differentiation can attract customers and give you a competitive edge.',
                    ) }}
            </p>
        </div>
        <div class="main-counter-div">
            <div class="row">
                @if (isset($businessGrowthsViewSettings))
                    @foreach ($businessGrowthsViewSettings as $businessGrowthsViewSetting)
                        <div class="col-sm-4 col-12 ">
                            <div class="counter-iteam counter text-center">
                                <h3>
                                                        <span class="count" data-target="2">
                                                            {{ $businessGrowthsViewSetting->business_growth_view_amount }}
                                                        </span>
                                </h3>

                                <span class="counter-content">
                                                        {{ $businessGrowthsViewSetting->business_growth_view_name }}</span>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-sm-4 col-12">
                        <div class="counter-iteam counter text-center">
                            <h3>
                                <span class="count" data-target="2"> {{ __('0') }} </span>
                                {{ __('M+') }}
                            </h3>
                            <span class="counter-content"> {{ __('Total Downloads') }} </span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 ">
                        <div class="counter-iteam counter text-center">
                            <h3>
                                <span class="count" data-target="43"> {{ __('0') }} </span>
                                {{ __('k+') }}
                            </h3>
                            <span class="counter-content"> {{ __('Positive Reviews') }} </span>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 ">
                        <div class="counter-iteam counter text-center">
                            <h3>
                                <span class="count" data-target="13"> {{ __('0') }} </span>
                                {{ __('k+') }}
                            </h3>
                            <span class="counter-content"> {{ __('Happy Users') }} </span>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="advance-feature">
        <div class="advance-feature-slider">
            @if (isset($businessGrowthsSettings))
                @foreach ($businessGrowthsSettings as $businessGrowthsSetting)
                    <div>
                        <div class="advance-feature-card">
                            <div class="advance-card-inner d-flex align-items-center">
                                <div class="advance-card-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                         viewBox="0 0 25 25" fill="none">
                                        <path
                                                d="M12.5 0C5.59642 0 0 5.59642 0 12.5C0 19.4036 5.59642 25 12.5 25C19.4036 25 25 19.4036 25 12.5C25 5.59642 19.4036 0 12.5 0ZM18.6178 10.737L12.2264 16.5232C12.0697 16.6652 11.8871 16.7607 11.6958 16.8108C11.5309 16.8843 11.3539 16.9223 11.1763 16.9223C10.8601 16.9223 10.5434 16.8058 10.2958 16.5709L6.36058 12.8354C5.84833 12.3491 5.82742 11.5397 6.31367 11.0274C6.7995 10.5152 7.60917 10.494 8.12167 10.9803L11.2539 13.9535L16.9009 8.84058C17.4244 8.36658 18.2332 8.40658 18.7072 8.93025C19.1812 9.454 19.1412 10.2627 18.6178 10.737Z"
                                                fill="#645BE1" />
                                    </svg>
                                </div>
                                <div class="advance-card-content">
                                    <p> {{ $businessGrowthsSetting->business_growth_title }} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>