<section class="home-banner-sec">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="banner-image">
                    <img src="{{ Storage::url(Utility::getsettings('apps_image')) }}" alt="home-banner-image"
                         width="100% " height="100%">
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('vendor/landing-page2/image/slider-image.png') }}" alt="background-image"
         class="home-bg-image">
    <img src="{{ asset('vendor/landing-page2/image/bacground-image.png') }}" alt="background-image"
         class="bg-fir-img">
    <img src="{{ asset('vendor/landing-page2/image/bacground-image-2.png') }}" alt="bacground-image"
         class="bg-sec-img">
    <img src="{{ asset('vendor/landing-page2/image/slider-sec-image.png') }}" alt="bacground-image"
         class="bg-the-img">
</section>

<section class="admin-saas-sec pt pb">
    <div class="container">
        <div class="section-title text-center">
            <h2>{{ Utility::getsettings('apps_name') ? Utility::getsettings('apps_name') : __('Prime Laravel') }}<b>{{ Utility::getsettings('apps_bold_name') ? Utility::getsettings('apps_bold_name') : __('Form Builder') }}</b>
            </h2>
        </div>
        <div class="section-content">
            <p>{{ Utility::getsettings('app_detail') ? Utility::getsettings('app_detail') : __('Prime Laravel Form Builder is software for creating automated systems, you can create your own forms without writing a line of code. you have only to use the Drag & Drop to build your form and start using it.') }}
            </p>
        </div>
    </div>
</section>

@if (isset($appsMultipleImageSettings))
    <section class="client-logo-section ">
        <img src="{{ asset('vendor/landing-page2/image/client-logo-bg1.png') }}" alt="client-bg"
             class="client-bg" loading="lazy">
        <img src="{{ asset('vendor/landing-page2/image/client-logo-bg2.png') }}" alt="client-bg"
             class="client-bg2" loading="lazy">
        <div class="container">
            <div class="client-logo-wrap">
                <div class="client-logo-slider slick-slider">
                    @foreach ($appsMultipleImageSettings as $appsMultipleImageSetting)
                        <div class="client-logo-iteam">
                            <a href="javascript:void(0);">
                                <img src="{{ Storage::url($appsMultipleImageSetting->apps_multiple_image) }}"
                                     alt="client-logo" width="100% " height="100%">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif