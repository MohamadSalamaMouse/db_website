@php
    $languages = \App\Facades\UtilityFacades::languages();
    config([
        'captcha.sitekey' => Utility::getsettings('recaptcha_key'),
        'captcha.secret' => Utility::getsettings('recaptcha_secret'),
    ]);
@endphp
@extends('layouts.front.app')
@section('title', __('Join us'))
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
                            <h1>Join Us</h1>
                            <h5>{{ Utility::getsettings('joinus_text') }}</h5>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="wrapper">
        <div class="root-contact">
            <div class="container joinUs-features section-margin">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-box">
                            {{-- <h3>Write A Comment</h3> --}}
                            <form id="" class="form" method="post" action="{{route('join.store')}}"
                                data-toggle="validator" novalidate="true" enctype="multipart/form-data">
                           

                                @csrf
                                <div class="messages mb-4">
                                  @if ($errors->any())
                                  <div class="alert alert-danger">
                                      <ul>
                                          @foreach ($errors->all() as $error)
                                              <li>{{ $error }}</li>
                                          @endforeach
                                      </ul>
                                  </div>
                              @endif
                                </div>
                                <div class="input__wrap controls">
                                    <div class="form-group">

                                        <div class="entry">
                                            <label>What's your name?</label>
                                            <input id="form_name" type="text" name="full_name"
                                                placeholder="Type your name" required="required"
                                                data-error="name is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="entry">
                                            <label>What's your email address?</label>
                                            <input id="form_email" type="email" name="email"
                                                placeholder="Type your Email Address" required="required"
                                                data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="entry">
                                            <label>What's your  address?</label>
                                            <input id="form_email" type="text" name="address"
                                                placeholder="Type your  Address" required="required"
                                                data-error="Valid address is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="entry">
                                            <label>What's your phone number?</label>
                                            <input id="form_phone" type="text" name="phone"
                                                placeholder="Type your phone " required="required"
                                                data-error="Valid phone number is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="entry" style="margin-bottom: 0px !important;">
                                            <label>Upload Your cv</label>
                                            <input id="form_cv" type="file" name="cv" placeholder=" "
                                                required="required" data-error="upload your cv.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="entry">
                                            <select style="color:#d7a3a3 !important;font-size:25px !important;font-wieght:bold !important;line-height:0px !important;"
                                                class="form-control" name="job_title" id="">
                                                <option value="" ><span style="color: #fff !important;" >select job title</span></option>
                                                <option value="{{ Utility::getsettings('joinus_feature1') }}">
                                                    <h5>{{ Utility::getsettings('joinus_feature1') }}</h5>
                                                </option>
                                                <option value="{{ Utility::getsettings('joinus_feature2') }}">
                                                    {{ Utility::getsettings('joinus_feature2') }}</option>
                                                <option value="{{ Utility::getsettings('joinus_feature3') }}">
                                                    {{ Utility::getsettings('joinus_feature3') }}</option>
                                                <option value="{{ Utility::getsettings('joinus_feature4') }}">
                                                    {{ Utility::getsettings('joinus_feature4') }}</option>
                                                <option value="{{ Utility::getsettings('joinus_feature5') }}">
                                                    {{ Utility::getsettings('joinus_feature5') }}</option>
                                                <option value="{{ Utility::getsettings('joinus_feature6') }}">
                                                    {{ Utility::getsettings('joinus_feature6') }}</option>
                                            </select>

                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>



                                    <div style="color:#000;">
                                        <button>Send Message</button>
                                        <div class=""></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

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
