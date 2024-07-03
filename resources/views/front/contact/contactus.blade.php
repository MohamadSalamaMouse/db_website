@php
    $languages = \App\Facades\UtilityFacades::languages();
    config([
        'captcha.sitekey' => Utility::getsettings('recaptcha_key'),
        'captcha.secret' => Utility::getsettings('recaptcha_secret'),
    ]);
@endphp
@extends('layouts.front.app')
@section('title', __('Contact us'))
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
    <header class="text-center" style="width: 100%">
        <div class="container header-hero">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contenet-hero">
                        <div class="contact-header">
                            <h1>Contact</h1>
                            <h5>{{ Utility::getsettings('contact_text') }}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="wrapper">
        <div class="root-contact">
            <div class="container section-margin">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="box-info-contact">
                            <h3>{{ strtoupper(Utility::getsettings('contact_city1')) }}</h3>
                            <h5>{{ Utility::getsettings('contact_address') }}</h5>

                            <ul>
                                <li>
                                    {{-- <a href="#">{{ Utility::getsettings('contact_phone1') }}</a> --}}
                                </li>
                                <li>
                                    {{-- <a href="#">{{ Utility::getsettings('contact_phone1') }}</a> --}}
                                </li>
                                <li>
                                    <a href="#">{{ Utility::getsettings('contact_phone1') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ Utility::getsettings('contact_email') }}</a>
                                </li>
                                {{-- <li>
                    <span>Address</span>
                    <a href="#">778 NE 84th St Miami, FL</a>
                  </li> --}}
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="box-info-contact">
                            <h3>{{ strtoupper(Utility::getsettings('contact_city2')) }}</h3>
                            <h5>{{ Utility::getsettings('contact_address2') }}</h5>

                            <ul>
                                <li>
                                    {{-- <a href="#">{{ Utility::getsettings('contact_phone1') }}</a> --}}
                                </li>
                                <li>
                                    {{-- <a href="#">{{ Utility::getsettings('contact_phone1') }}</a> --}}
                                </li>
                                <li>
                                    <a href="#">{{ Utility::getsettings('contact_phone2') }}</a>
                                </li>
                                <li>
                                    <a href="#">{{ Utility::getsettings('contact_email') }}</a>
                                </li>
                                {{-- <li>
                    <span>Address</span>
                    <a href="#">778 NE 84th St Miami, FL</a>
                  </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @if (Utility::getsettings('google_map_enable') == 'on')
        
                <div class="container" style="height: 400px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.728389857821!2d31.436841675390824!3d30.044649174923517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583d344b8d81f5%3A0x3c672e31d10f9896!2zRFMr!5e0!3m2!1sen!2seg!4v1713794195277!5m2!1sen!2seg" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            @endif

        <section class="contact-up  section-padding">
            <div class="container">
                <div class="c-wapp text-center">
                    <button class="btn btn-default">
                        <a href="/contact/">contact us</a>
                    </button>
                    <button class="btn btn-default">
                        <a href="/join/">join us</a>
                    </button>
                </div>
            </div>
        </section>


    </div>

@endsection
