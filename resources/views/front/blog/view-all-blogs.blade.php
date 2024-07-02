@php
    $languages = \App\Facades\UtilityFacades::languages();
    $lastBlogUser = App\Models\User::find($lastBlog->created_by);
@endphp
@extends('layouts.front.app')
@section('title', Utility::getsettings('blog_name'))
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
                        <h1 class="font-weight-bold text-color-dark text-10">{{@Utility::getsettings('blog_name')}}</h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="{{ route('homepage') }}">{{ __('Home') }}</a></li>
                            <li><a href="javascript:void(0)">{{@Utility::getsettings('blog_name')}}</a></li>
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
            <div class="container my-4" id="news">

                <div class="row row-gutter-sm justify-content-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
                    @if (isset($allBlogs))
                        @foreach ($allBlogs as $key=>$record)
                            <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0">
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
                            {{ $allBlogs->links('front/blog.custom.pagination') }}
                    @endif
                </div>
            </div>
        </section>
    </div>

@endsection

@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var bannerSection = document.querySelector(".blog-page-banner");
            var backgroundURL = bannerSection.getAttribute("data-bg-image");
            bannerSection.style.backgroundImage = "url(" + backgroundURL + ")";
        });

        $(document).ready(function() {
            $('body').on('change', '#search-category', function() {
                var categoryId = $('#search-category :selected').val();
                $.ajax({
                    type: 'GET',
                    url: '{{ route('see.all.blogs') }}',
                    data: {
                        category_id: categoryId
                    },
                    success: function(response) {
                        $('.append-blog-data').empty().html(response.appendedContent);
                    }
                });
            });
        });
    </script>
@endpush
