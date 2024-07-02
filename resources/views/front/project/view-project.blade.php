@php
    $user = App\Models\User::find($project->created_by);
    $languages = \App\Facades\UtilityFacades::languages();
@endphp
@extends('layouts.front.app')
@section('title', __('Projects'))
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

    {{-- <div role="main" class="main">
        <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyloaded"
                 data-bg-src="{{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }}"
                 style="background-size: cover; background-position: center center; background-image: url({{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }});">
            <div class="container pb-5 my-3">
                <div class="row mb-4">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-color-dark text-10">{{ isset($project->title) ? $project->title : __('Article Page') }}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li class="active">{{ __('Projects') }}</li>
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
                <div class="col-lg-12 mb-5 mb-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" style="animation-delay: 1600ms;">
@if($project->builder == 'on')
                        <style>
                            {!! isset($project->css) ? $project->css : null !!}
                        </style>
                        <div class="container pt-3 mt-4">
                            {!! isset($project->html) ? $project->html : null !!}
                        </div>
    @else
                    <article>
                        <div class="card border-0">
                            <div class="card-body z-index-1 p-0">


                                <div class="post-image pb-4">
                                    <img class="card-img-top custom-border-radius-1" style="height: auto;"
                                         src="{{ isset($project->images) ? Storage::url($project->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" alt="Card Image" />
                                </div>
                                <p class="text-uppercase text-1 mb-3 text-color-default">
                                    <time pubdate="" datetime="{{ App\Facades\UtilityFacades::date_time_format($project->created_at) }}">{{ App\Facades\UtilityFacades::date_time_format($project->created_at) }}</time>
                                </p>
                                <div class="card-body p-0">
                                    <p>{!! $project->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </article>
@endif

                </div>
                <div class="blog-sidebar col-lg-12 pt-4 pt-lg-0 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1800" style="animation-delay: 1800ms;">
                    <div class="row">
                    @if (isset($allProjects))
                        @foreach ($allProjects as $key=>$record)

                                <div class="col-md-6"  style="margin-top: 15px">
                                    <a href="{{ route('view.project', $record->slug) }}" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                        <div class="card border-0 box-shadow-4 h-100">
                                            <div class="card-img-top position-relative overlay">
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

                        @endforeach
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <header>
        <div class="headefr-fexid" data-dsn-header="project">
            <div class="bg" id="dsn-hero-parallax-img" data-dsn-ajax="img" style="transform: translate3d(0px, 0px, 0px);">
                <div class="bg-image  cover-bg" data-overlay="0" data-image-src="{{Storage::url($project->cover)}}" style="background-image: url({{Storage::url($project->cover)}});"></div>
            </div>

            <div class="scroll" data-dsn-animate="ajax" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                <span class="background"></span>
                <span class="triangle"></span>
            </div>
            <div class="project-title" id="dsn-hero-parallax-title" style="visibility: inherit; opacity: 1; top: 0px; transform: translate3d(0px, 0px, 0px);">

                <div class="title-text-header">
                    <div class="cat" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                        <span>{{$project->category->name}}</span>
                    </div>
                    <span class="title-text-header-inner">
                        <span data-dsn-animate="ajax" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">{{$project->title}}</span>
                    </span>
                </div>
                <div class="sub-text-header" data-dsn-animate="ajax" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
                    <h5>{{$project->client}}</h5>
                    <span>{{$project->project_date}}</span>
                </div>
            </div>

            <div class="project-page__inner">
                <div class="h-100">
                    <div class="row justify-content-center align-items-end h-100">
                        <div id="descover-holder" class="col-lg-12 project-meta__content" style="visibility: inherit; opacity: 1; bottom: 0px; transform: translate3d(0px, 0px, 0px);">
                            <div class="link">
                                {{-- <a target="_blank" href="https://www.behance.net/gallery/57136617/Time-Tag_Watch?tracking_source=search%7Cwatch%20">View
                                    Website</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="wrapper">
        <div class="root-project" style="visibility: inherit; opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">

            <div class="container intro-project section-margin">
                <div class="intro-text text-center">
                    {{-- <div class="title-cover dsn-move-section" data-dsn-opacity="0.1" data-dsn-duration="170%" data-dsn-move="0%" style="visibility: inherit; opacity: 0.0298062; transform: translate3d(0px, -129.376px, 0px);">
                        Watch
                    </div> --}}
                    <div class="inner">
                        <h2 data-dsn-animate="animate" class="dsn-active"><span class="dsn-wrapper"><span class="dsn-word-wrapper">{{ explode(' ', $project->title)[0] }}
                        </span></span><span class="dsn-wrapper"><span class="dsn-word-wrapper">{{ explode(' ', $project->title)[1] ?? "" }}
                        </span></span></h2>
                        <p data-dsn-animate="up" class="dsn-active">{{$project->description}}</p>

                        {{-- <a class="bottom-link" data-dsn-animate="up" href="https://www.behance.net/gallery/57136617/Time-Tag_Watch?tracking_source=search%7Cwatch%20" target="_blank">
                            <span></span>
                            <span></span>
                            <div class="content">
                                <div class="inner">
                                    <p>VISIT SITE</p>
                                </div>
                            </div>
                        </a> --}}
                    </div>
                </div>
            </div>

            <div class="container-fluid gallery-col">
                <div class="row">
                    @foreach ($project->images as $image )
                    <div class="col-md-4 box-im section-padding">
                        <div class="image-zoom">
                            <a class="single-image" href="{{Storage::url($image->img)}}">
                                <img src="{{Storage::url($image->img)}}" alt="">
                            </a>

                            {{-- <div class="caption">Trevor Bittinger</div> --}}
                        <div class="icon-circle"></div></div>
                    </div>

                    @endforeach
           
                 

                </div>
            </div>

   

         

 @if ($project->project_category == 2)
 <div class="box-seat">
    <div class="dsn-v-text">
        <div class="container-fluid">
            <div class="box-middle-text">
              
            </div>
            <div class="inner-img" data-dsn-grid="moveUp" style="text-align: center;">
                <iframe src="{{$project->embed}}" width="80%" height="600" frameborder="0" scrolling="no" allowtransparency="true" style="margin: 0 auto;"></iframe>
            </div>
        </div>
    </div>
</div>
 @endif

      
    </div>
@endsection

@push('script')

@endpush
