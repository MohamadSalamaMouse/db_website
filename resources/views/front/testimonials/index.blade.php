@php
    $languages = \App\Facades\UtilityFacades::languages();
@endphp

@extends('layouts.front.app')
@section('css')
    <style>
        .carousel-fixed-height {
            height: 100% !important;
            /* Adjust based on your needs */
            overflow: hidden;
            /* This will add scrollbars if content exceeds 500px */
        }
    </style>
@endsection

@section('title', __('Testimonials'))

<!-- Testimonials Section -->
<section id="testimonials"
    class="section p-5 m-5 section-height-1 section-with-shape-divider position-relative border-0 m-0">
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="gradient-custom rounded-3 p-5 m-5 bg-dark">
                    <div class="text-center mb-4 pb-2">
                        <i class="fas fa-quote-left fa-3x text-white"></i>
                    </div>
                    <div class="card bg-dark text-white">
                        <div class="card-body px-4 py-5">
                            <!-- Carousel wrapper -->
                            <div id="carouselDarkVariant" class="carousel slide carousel-dark" data-bs-ride="carousel">
                                <!-- Indicators -->
                                {{-- <div class="carousel-indicators mb-0">
                                            @foreach ($testimonials as $index => $testimonial)
                                                <button type="button" data-bs-target="#carouselDarkVariant"
                                                    data-bs-slide-to="{{ $index }}"
                                                    class="{{ $index == 0 ? 'active' : '' }}" aria-current="true"
                                                    aria-label="Slide {{ $index + 1 }}"></button>
                                            @endforeach
                                        </div> --}}

                                <!-- Inner -->
                                <div class="carousel-inner carousel-fixed-height pb-3">
                                    @foreach ($testimonials as $index => $testimonial)
                                        <!-- Single item -->
                                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="{{ asset('storage/app/' . $testimonial->image) }}"
                                                                class="rounded-circle shadow-1 mb-4 mb-lg-0"
                                                                alt="testimonial avatar" width="200"
                                                                height="200" />
                                                        </div>
                                                        <div
                                                            class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">{{ $testimonial->name }}</h4>
                                                            <p class="mb-0 pb-3">{{ $testimonial->desc }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <!-- Inner -->

                                <!-- Controls -->
                                <div class="w-100 d-flex justify-content-between">
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>

                            </div>
                            <!-- Carousel wrapper -->
                        </div>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <i class="fas fa-quote-right fa-3x text-white"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
