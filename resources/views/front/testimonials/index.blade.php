@php
    $languages = \App\Facades\UtilityFacades::languages();
@endphp

@extends('layouts.front.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

{{-- <section id="testimonials" class="section section-height-1 section-with-shape-divider position-relative border-0 m-0">
    <div class="container">
        <div class="gradient-custom">
            <div class="container my-5 py-5">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12">
                        <div class="text-center mb-4 pb-2">
                            <i class="fas fa-quote-left fa-3x text-white"></i>
                        </div>

                        <div class="card bg-dark text-white">
                            <div class="card-body px-4 py-5">
                                <!-- Carousel wrapper -->
                                <div id="carouselDarkVariant" data-mdb-carousel-init
                                    class="carousel slide carousel-dark" data-mdb-ride="carousel">
                                    <!-- Indicators -->
                                    <div class="carousel-indicators mb-0">
                                        <button data-mdb-button-init data-mdb-target="#carouselDarkVariant"
                                            data-mdb-slide-to="0" class="active" aria-current="true"
                                            aria-label="Slide 1"></button>
                                        <button data-mdb-button-init data-mdb-target="#carouselDarkVariant"
                                            data-mdb-slide-to="1" aria-label="Slide 1"></button>
                                        <button data-mdb-button-init data-mdb-target="#carouselDarkVariant"
                                            data-mdb-slide-to="2" aria-label="Slide 1"></button>
                                    </div>

                                    <!-- Inner -->
                                    <div class="carousel-inner pb-5">
                                        <!-- Single item -->
                                        <div class="carousel-item active">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                                                                class="rounded-circle shadow-1 mb-4 mb-lg-0"
                                                                alt="woman avatar" width="150" height="150" />
                                                        </div>
                                                        <div
                                                            class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">Maria Smantha - Web Developer</h4>
                                                            <p class="mb-0 pb-3">
                                                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                                                elit. A
                                                                aliquam amet animi blanditiis consequatur debitis dicta
                                                                distinctio, enim error eum iste libero modi nam natus
                                                                perferendis possimus quasi sint sit tempora voluptatem.
                                                                Est,
                                                                exercitationem id ipsa ipsum laboriosam perferendis.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single item -->
                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                                                                class="rounded-circle shadow-1 mb-4 mb-lg-0"
                                                                alt="woman avatar" width="150" height="150" />
                                                        </div>
                                                        <div
                                                            class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">Lisa Cudrow - Graphic Designer</h4>
                                                            <p class="mb-0 pb-3">
                                                                Sed ut perspiciatis unde omnis iste natus error sit
                                                                voluptatem
                                                                accusantium doloremque laudantium, totam rem aperiam,
                                                                eaque
                                                                ipsa quae ab illo inventore veritatis et quasi
                                                                architecto
                                                                beatae vitae dicta sunt explicabo. Nemo enim ipsam
                                                                voluptatem
                                                                quia voluptas sit aspernatur.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Single item -->
                                        <div class="carousel-item">
                                            <div class="row d-flex justify-content-center">
                                                <div class="col-lg-10 col-xl-8">
                                                    <div class="row">
                                                        <div class="col-lg-4 d-flex justify-content-center">
                                                            <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                                                                class="rounded-circle shadow-1 mb-4 mb-lg-0"
                                                                alt="woman avatar" width="150" height="150" />
                                                        </div>
                                                        <div
                                                            class="col-9 col-md-9 col-lg-7 col-xl-8 text-center text-lg-start mx-auto mx-lg-0">
                                                            <h4 class="mb-4">John Smith - Marketing Specialist</h4>
                                                            <p class="mb-0 pb-3">
                                                                At vero eos et accusamus et iusto odio dignissimos qui
                                                                blanditiis praesentium voluptatum deleniti atque
                                                                corrupti quos
                                                                dolores et quas molestias excepturi sint occaecati
                                                                cupiditate
                                                                non provident, similique sunt in culpa qui officia
                                                                mollitia
                                                                animi id laborum et dolorum fuga.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Inner -->

                                    <!-- Controls -->
                                    <button data-mdb-button-init class="carousel-control-prev" type="button"
                                        data-mdb-target="#carouselDarkVariant" data-mdb-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button data-mdb-button-init class="carousel-control-next" type="button"
                                        data-mdb-target="#carouselDarkVariant" data-mdb-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
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
    </div>
</section> --}}

<!-- Testimonials Section -->
<section id="testimonials"
    class="section p-5 m-5 position-relative border-0">
    <div class="container">
        <div class="gradient-custom bg-dark">
            <div class="container d-flex justify-content-center m-5 p-5">
                <div class="row">
                    <div class="col-md-12">
                        <div class="text-center mb-4 pb-2">
                            <i class="fas fa-quote-left fa-3x text-white"></i>
                        </div>

                        <div class="card bg-dark text-white">
                            <div class="card-body px-4 py-5">
                                <!-- Carousel wrapper -->
                                <div id="carouselDarkVariant" class="carousel slide carousel-dark"
                                    data-bs-ride="carousel">
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
                                    <div class="carousel-inner carousel-fixed-height pb-5">
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
    </div>
</section>

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
