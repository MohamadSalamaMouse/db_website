@php
    $languages = \App\Facades\UtilityFacades::languages();
    config([
        'captcha.sitekey' => Utility::getsettings('recaptcha_key'),
        'captcha.secret' => Utility::getsettings('recaptcha_secret'),
    ]);
@endphp
@extends('layouts.front.app')
@section('title', __('Gallery'))
@section('auth-topbar')
    <li class="language-btn">
        <select class="btn btn-primary me-2 nice-select"
                onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"
                id="language">
            @foreach ($languages as $language)
                <option class="" @if ($lang == $language) selected @endif
                value="{{ route('change.lang', $language) }}">{{ Str::upper($language) }}
                </option>
            @endforeach
        </select>
    </li>
@endsection
@section('content')
    <div role="main" class="main">
        <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyloaded"
                 data-bg-src="{{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }}"
                 style="background-size: cover; background-position: center center; background-image: url({{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }});">
            <div class="container pb-5 my-3">
                <div class="row mb-4">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-color-dark text-10">{{$gallery->title }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li><a href="javascript:void(0)">{{ __('Gallery') }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                    <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
                    <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
                </svg>
            </div>
        </section>
        <div class="container py-2">

            <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*">

<style>
    iframe{
        width: 100%;
    }
</style>
                        @php
                            $files = json_decode($gallery['files'], true);
                        @endphp
                    @if($files)
                    <div class="lightbox row" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                        @foreach($files as $key=>$record)
                            <div class="col-12 col-sm-6 col-lg-3">
                            <a class="d-inline-block img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon mb-1 me-1" href="{{ isset($record) ? Storage::url($record) : asset('vendor/landing-page2/image/blog-card-img.png') }}">
                                <img class="img-fluid" src="{{ isset($record) ? Storage::url($record) : asset('vendor/landing-page2/image/blog-card-img.png') }}"  >
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @endif
                        <div class="col-12">
                            {!! $gallery['embed'] !!}
                        </div>
                </div>
            </div>

        </div>

@endsection
