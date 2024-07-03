@php
    $languages = \App\Facades\UtilityFacades::languages();
    $lastProjectUser = App\Models\User::find($lastProject?->created_by);
    $category_selected = request()->category ?? 'all';

@endphp
@extends('layouts.front.app')
@section('title', Utility::getsettings('project_name'))
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

    <div class="box-seat box-seat-full section-margin">
        <div class="container-fluid">
            <header>
                <div class="container header-hero">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="contenet-hero">
                                <h5></h5>
                                <h1>Our Work</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="wrapper">
                <div class="root-work">
                    <div class="container">
                        <div class="box-title" data-dsn-title="cover">
                            <h2 class="title-cover" data-dsn-grid="move-section" data-dsn-move="-70">Projets</h2>
                        </div>
                        {{-- <div class="cursor" style="top: 482px; left: 329px;">

                        <div class="cursor-helper cursor-view">
                            <span>VIEW</span>
                        </div>
                
                        <div class="cursor-helper cursor-close">
                            <span>Close</span>
                        </div>
                
                        <div class="cursor-helper cursor-link"></div>
                    </div> --}}
                        <div class="filterings">
                            <div class="filtering-wrap">
                                <div class="filtering">
                                    <div class="selector"></div>
                                    <button type="button" data-filter="*"
                                        class="@if ($category_selected == 'all') active @endif">
                                        All
                                    </button>
                                    @foreach ($categories as $category)
                                        <button id="category_btn{{ $category->id }}"
                                            class="@if ($category_selected == $category->id || $category_selected == $category->id) active @endif" type="button"
                                            data-filter=".category{{ $category->id }}">
                                            {{ $category->name }}
                                        </button>
                                    @endforeach



                                </div>
                            </div>
                        </div>

                        <div class="projects-list gallery">
                            @foreach ($allProjects as $project)
                                <div class="item category{{ $project->category->id }}">
                                    <a href='{{ route('view.project', ['slug' => $project->id]) }}'>
                                        <div class="image-container">
                                            <img class="has-top-bottom"
                                                src="{{ asset('storage/app/' . $project->cover) }}"
                                                alt="Image">
                                            {{-- <img class="" src="{{Storage::url($project->cover)}}" alt="" /> --}}
                                            <div class="overLay">
                                                <div class="item-info">
                                                    <h5 class="cat">{{ $project->category->name }}</h5>
                                                    <h4>{{ $project->title }}</h4>
                                                    <span><span>View Project</span></span>
                                                </div>
                                            </div>

                                        </div>
                                        {{-- <div class="item-border"></div> --}}

                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    {{-- <div role="main" class="main">
        <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyloaded"
                 data-bg-src="{{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }}"
                 style="background-size: cover; background-position: center center; background-image: url({{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }});">
            <div class="container pb-5 my-3">
                <div class="row mb-4">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-color-dark text-10"> {{@Utility::getsettings('project_name')}}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li><a href="javascript:void(0)"> {{@Utility::getsettings('project_name')}}</a></li>
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
        <section id="blog" class="section section-height-1 section-with-shape-divider position-relative border-0 m-0">
            <div class="container my-4" >
                <div class=" row-gutter-sm justify-content-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible " data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                    <div class="row">
                    @if (isset($allProjects))
                        @foreach ($allProjects as $key => $record)
                            <div class="col-sm-12 col-md-6 col-lg-6 mb-4">
                                <a href="{{ route('view.project', $record->slug) }}" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                    <div class="card border-0 box-shadow-4 h-100">
                                        <div class="card-img-top position-relative overlay">
                                            <img src="{{ isset($record->images) ? Storage::url($record->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" class="img-fluid" alt="">
                                        </div>
                                        <div class="card-body p-4 d-flex flex-column justify-content-between">
                                            <h4 class="font-weight-semibold text-5 text-color-hover-primary mb-2">
                                                {{$record['title']}}
                                            </h4>
                                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary">
                                            {{__('More')}}
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
                            <div class="col-sm-12 ">
                            {{ $allProjects->links('front/project.custom.pagination') }}
                            </div>
                    @endif
                    </div>
                </div>
            </div>
        </section>
    </div> --}}
    {{-- @if ($category_selected != 'all')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Simulate click on the filter button with id "category_btn{{$category_selected}}"
            var btn = document.getElementById("category_btn{{$category_selected}}");
            if (btn) {
                btn.click();
            }
        });
    </script>
    @endif --}}
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/lazyload.js') }}" defer></script>
@endsection
