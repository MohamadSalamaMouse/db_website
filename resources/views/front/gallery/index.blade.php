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
                        <h1 class="font-weight-bold text-color-dark text-10">{{__('Gallery')}}</h1>
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

            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills sort-source sort-source-style-3 justify-content-center" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'fitRows', 'filter': '*'}">
                        <li class="nav-item active" data-option-value="*" style="font-size: 20px;"><a class="nav-link text-1 text-uppercase fw-bold fs-5 active" href="#">{{__('All')}}</a></li>
                        @foreach($gallery as $key=>$record)
                        <li class="nav-item" data-option-value=".photo{{$key}}" style="font-size: 20px;"><a class="nav-link text-1 text-uppercase fw-bold fs-5" href="#">{{$record['name']}}</a></li>
                        @endforeach
                    </ul>
                    <div class="sort-destination-loader mt-4 pt-2 sort-destination-loader-loaded">
                        <div class="row portfolio-list sort-destination" data-sort-id="portfolio" data-filter="*">
                            {{--<div class="row portfolio-list lightbox" data-sort-id="portfolio" data-filter="*">--}}
                            @foreach($gallery as $key=>$record)
                                @foreach($record['data'] as $k=>$r)
                                    <div class="col-12 col-sm-6 col-lg-3 isotope-item  photo{{$key}}">
                                        <div class="portfolio-item">
                                            <span class="thumb-info thumb-info-lighten thumb-info-centered-icons border-radius-0">
                                                <span class="thumb-info-wrapper border-radius-0">
                                                    <img src="{{ isset($r->images) ? Storage::url($r->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" class="img-fluid border-radius-0" alt="">
                                                    <span class="thumb-info-action">
                                                        <a href="{{ route('view.gallery', ['id' => $r->id]) }}">
                                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                                        </a>
                                                    </span>
                                                </span>
                                            </span>
                                            <div><h4>{{$r->title}}</h4></div>
                                        </div>
                                    </div>

                                @endforeach
                            @endforeach
                        </div>
                </div>
            </div>
        </div>

    </div>

@endsection
