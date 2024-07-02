@php
    $languages = \App\Facades\UtilityFacades::languages();
@endphp

@extends('layouts.front.app')
@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
@endsection
@section('title', __('FAQs'))

{{-- <section id="faq" class="section border-0 m-5 p-5">
    <div class="container">
        <div class="row justify-content-center pt-3">
            <div class="col-lg-10 text-center">
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500"
                    style="animation-delay: 500ms;">
                    {{ @Utility::getsettings('faq_name') }}
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12  mb-5 mb-md-0">
                <div class="accordion custom-accordion-style-1 appear-animation animated fadeInUpShorter appear-animation-visible"
                    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" id="accordion1"
                    style="animation-delay: 250ms;">
                    @foreach ($faqs as $key => $record)
                        <div class="card card-default">
                            <div class="card-header" id="collapse{{ $key }}Heading{{ $key }}">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}"
                                        aria-expanded="false" aria-controls="collapse{{ $key }}">
                                        {{ $record['questions'] }}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{ $key }}" class="collapse"
                                aria-labelledby="collapse{{ $key }}Heading{{ $key }}"
                                data-bs-parent="#accordion{{ $key }}" style="">
                                <div class="card-body">
                                    <p class="mb-0">{{ $record['answer'] }}</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}

<section id="faq" class="section border-0 m-5 p-5">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                    Accordion Item #1
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">
                    <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    overflow.
                </div>
            </div>
        </div>
    </div>
</section>


@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@endsection