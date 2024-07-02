@extends('layouts.front.app')
@section('title')
    {{ __('Home') }}
@endsection
@push('style')
@endpush
@push('script')
@endpush
@section('content')

@if (Utility::getsettings('slider_setting_section1_enable') == 'on') @include('front.home.slider') @endif
            <div class="wrapper">
        @include("front.home.who_we_are")
            {{-- @if (Utility::getsettings('menu_setting_section1_enable') == 'on') @include('front.home.section1') @endif --}}
            @if (Utility::getsettings('menu_setting_section2_enable') == 'on') @include('front.home.section2') @endif
            @if (Utility::getsettings('menu_setting_section3_enable') == 'on') @include('front.home.section3') @endif
            @if (Utility::getsettings('business_growth_setting_enable') == 'on') @include('front.home.business_growth') @endif
            @if (Utility::getsettings('project_setting_enable') == 'on') @include('front.home.project') @endif
                <div class="clients-over-world" data-dsn="color">
                     <div class="container">
                        <div class="">
                            <div class="overlay-parent" style="background: url('{{ asset('assets/front/img/worldMap.png') }}');background-size:cover;">
                                <div class="overLay">
                                    <div class="one-title" style="width: 100%" data-dsn-animate="up">
                                        <div class="" >
                                            <div class="" style="display: flex; justify-content: center; align-items: center; text-align: center;padding-top:10px">
                                                <div class="clients-wrapper">
                                                    <span>
                                                        <h2 style="color: #fff !important; font-size: 90px;">+200</h2>
                                                    </span>
                                                    <span style="margin-left: 10px">
                                                        <h2 style="color: #fff !important; font-size: 80px; margin-top: 10px;"><span class="second-span">clients</span> <br> <span class="second-span">all over</span> <br><span class="second-span"> the world<span></span></h2>
                                                    </span>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                      
                         
                        </div>
                     <section class="box-gallery-vertical  brand-client">

                     @include("front.home.clients")
                    </div>

                     </div>
                            {{-- <div class="wapper-client">

                                <div class="logo-box">
                                    <img src="/public/logo/1-02.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="logo-box">
                                    <img src="/public/logo/1-03.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="logo-box">
                                    <img src="/public/logo/1-04.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="logo-box">
                                    <img src="/public/logo/1-05.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="logo-box">
                                    <img src="/public/logo/1-10.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="logo-box">
                                    <img src="/public/logo/1-26.png" alt="">
                                    <div class="info">
                                        <div class="content" onclick="javascript:void(0);">
                                            <div class="icon">
                                                <i class="fas fa-plus"></i>
                                            </div>
                                            <div class="entry">
                                                <div>
                                                    <h5>Name</h5>
                                                    <a href="#">www.name.com</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </section>
                </div>
            @if (Utility::getsettings('testimonial_setting_enable') == 'on') @include('front.home.testimonial') @endif


            {{-- @if (Utility::getsettings('blog_setting_enable') == 'on') @include('front.home.blog') @endif --}}
            @if (Utility::getsettings('faq_setting_enable') == 'on') @include('front.home.faq') @endif
            @if (Utility::getsettings('feature_setting_enable') == 'on') @include('front.home.feature') @endif
            {{-- @if (Utility::getsettings('apps_setting_enable') == 'on') @include('front.home.apps') @endif --}}


                <section class="contact-up  section-padding">
                    <div class="container">
                        <div class="c-wapp">
                            <a href="#" class="effect-ajax">
                                <span class="hiring">
                                    We are hiring
                                </span>
                                <span class="career">
                                    WANT TO BE A PART OF OUR TEAM?
                                </span>
                            </a>
                        </div>
                        <div class="c-wapp text-center " style="margin-top: 45px">
                            <button class="btn btn-default">
                            <a href="/contact/">contact us</a>
                            </button>
                            <button  class="btn btn-default">
                            <a href="/join/">join us</a>
                            </button>
                        </div>
                    </div>
                  
                </section>
            </div>





@endsection
@section("scripts")
<script src="{{ asset('assets/front/js/multislider.js') }}"></script>
<script>
        var popupContainer = document.getElementById('youtubeVideo');
        var iframe = popupContainer.querySelector('iframe');

 function openPopup(url) {
    iframe.src = url;
    popupContainer.style.display = 'block';
}

function closePopup() {
    var popupContainer = document.getElementById('youtubeVideo');
    
    // Hide the popup container
    popupContainer.style.display = 'none';
    
    // Reset the src attribute of the iframe to stop the video
    iframe.src = '';
}

$('.exampleSlider').multislider({

// endless scrolling
continuous: false,

// slide all visible slides, or just one at a time
slideAll: false,

// autoplay interval
// 0 or 'false' prevents auto-sliding
interval: 2000,

// duration of slide animation
duration: 500,

// pause carousel on hover
hoverPause: true,

// pause above specified screen width
pauseAbove: null,

// pause below specified screen width
pauseBelow: null

})
</script>
@endsection