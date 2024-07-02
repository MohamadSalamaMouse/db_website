@php
    $languages = \App\Facades\UtilityFacades::languages();
@endphp
@extends('layouts.front.app')
@section('title', $page->title)

@section('content')
    <div role="main" class="main">
        <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 lazyloaded"
                 data-bg-src="{{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }}"
                 style="background-size: cover; background-position: center center; background-image: url({{ Utility::getsettings('background_image') ? Storage::url(Utility::getsettings('background_image')) : asset('assets/front/img/business-consulting-3/backgrounds/background-5.jpg') }});">
            <div class="container pb-5 my-3">
                <div class="row mb-4">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="font-weight-bold text-color-dark text-10">{{$page->title}}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li class="active">{{ isset($page->title) ? $page->title : null }}</li>
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
        <style>
            {!! isset($page->css) ? $page->css : null !!}
        </style>
        <div class="container pt-3 mt-4">
        {!! isset($page->html) ? $page->html : null !!}
        </div>
    </div>
@endsection
