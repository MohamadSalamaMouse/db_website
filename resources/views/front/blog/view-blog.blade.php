@php
    $user = App\Models\User::find($blog->created_by);
    $languages = \App\Facades\UtilityFacades::languages();
@endphp
@extends('layouts.front.app')
@section('title', __('Blogs'))
@section('auth-topbar')
    <li class="language-btn">
        <select class="btn btn-primary me-2 nice-select"
            onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);"
            id="language">
            @foreach ($languages as $language)
                <option class="" @if ($lang == $language) selected @endif
                    value="{{ route('change.lang', ['slug' => $slug, 'lang' => $language]) }}">{{ Str::upper($language) }}
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
                        <h1 class="font-weight-bold text-color-dark text-10">{{ isset($blog->title) ? $blog->title : __('Article Page') }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Blogs') }}</li>
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
        <div class="container pt-4 pb-5 my-5">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" style="animation-delay: 1600ms;">

                    <article>
                        <div class="card border-0">
                            <div class="card-body z-index-1 p-0">


                                <div class="post-image pb-4">
                                    <img class="card-img-top custom-border-radius-1" style="height: auto;"
                                         src="{{ isset($blog->images) ? Storage::url($blog->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" alt="Card Image" />
                                </div>
                                <p class="text-uppercase text-1 mb-3 text-color-default">
                                    <time pubdate="" datetime="{{ App\Facades\UtilityFacades::date_time_format($blog->created_at) }}">{{ App\Facades\UtilityFacades::date_time_format($blog->created_at) }}</time>
                                </p>
                                <div class="card-body p-0">
                                    <p>{!! $blog->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" style="animation-delay: 1800ms;">
                    @if (isset($allBlogs))
                        @foreach ($allBlogs as $key=>$record)
                            <div class="row" style="margin-top: 15px">
                            <div class="col-sm-12">
                                <a href="{{ route('view.blog', $record->slug) }}" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0 box-shadow-4 h-100">
                                        <div class="card-img-top position-relative overlay">
                                            <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                                <span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                                    <span class="position-relative z-index-2">
                                                        <span class="d-block custom-font-size-1 positive-ls-2 px-1">{{ App\Facades\UtilityFacades::date_format($record->created_at) }}</span>
                                                    </span>
                                                </span>
                                            </div>
                                            <img src="{{ isset($record->images) ? Storage::url($record->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                                            <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">
                                                {{$record['title']}}
                                            </h4>
                                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">{{__('More')}}
                                                <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2">
                                                    <svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" transform="matrix(-1,1.2246467991473532e-16,-1.2246467991473532e-16,-1,0,0)" id="icon_211706199376726" data-filename="arrow-right.svg" width="27" height="27">
                                                        <path d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"></path>
                                                    </svg>
                                                </div>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

@push('script')

@endpush
