<footer class="footer vh-100 min-vh-100">
    <div class="container">
        <div class="footer-links p-relative">
            <div class="row">
                <div class="col-md-3 dsn-col-footer">


                    <div class="footer-block">
                        <div class="footer-logo">
                            <a href="/" title="{{ config('app.name') }}"><img style="height: 37px;"
                                    src="{{ asset('storage/app/app-logo/app-logo.png') }}"
                                    alt="{{ config('app.name') }}"></a>
                        </div>

                        <div class="footer-social">
                            <ul>
                                @if (Utility::getsettings('contact_facebook'))
                                    <li>
                                        <a href="{{ Utility::getsettings('contact_facebook') }}" target="_blank"
                                            title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                @endif
                                {{-- @if (Utility::getsettings('contact_twitter'))
                                <li>
                                    <a href="{{ Utility::getsettings('contact_twitter')}}" target="_blank" title="twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                            @endif --}}
                                @php
                                    $channelUrl = Utility::getsettings('contact_youtube');
                                    // Remove non-printable or invisible characters from the URL
                                    $cleanedChannelUrl = preg_replace('/[^\P{C}\n]+/u', '', $channelUrl);
                                @endphp
                                @if (Utility::getsettings('contact_instagram'))
                                    <li>
                                        <a href="{{ Utility::getsettings('contact_instagram') }}" target="_blank"
                                            title="instagram"><i class="fab fa-instagram"></i></a>
                                    </li>
                                @endif
                                @if ($cleanedChannelUrl)
                                    <li>
                                        <a href="{{ $cleanedChannelUrl }}" target="_blank" title="youtube">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                @endif
                                @if (Utility::getsettings('contact_linkedin'))
                                    <li>
                                        <a href="{{ Utility::getsettings('contact_linkedin') }}" target="_blank"
                                            title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-menu">
                        <h4 class="footer-title">Navigation</h4>
                        <nav>
                            <ul>
                                <li><a href="/projects/">Portfolio</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="/contact/">Contact</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="footer-block col-contact">
                        <h4 class="footer-title">Contact</h4>
                        @if (Utility::getsettings('contact_phone1'))
                            <p>{{ Utility::getsettings('contact_phone1') }}</p>
                        @endif
                        @if (Utility::getsettings('contact_phone2'))
                            <p><span
                                    style="font-size: 7px !important;">{{ Utility::getsettings('contact_facebook') }}</span>
                            </p>
                        @endif
                        @if (Utility::getsettings('contact_email'))
                            <p class="over-hidden"><a class="link-hover"
                                    data-hover-text="{{ Utility::getsettings('contact_email') }}"
                                    href="mailto:{{ Utility::getsettings('contact_email') }}">{{ Utility::getsettings('contact_email') }}</a>
                        @endif
                        </p>
                    </div>
                </div>

                <div class="col-md-3 dsn-col-footer">
                    <div class="col-address">
                        <h4 class="footer-title">Address</h4>
                        <p>{{ Utility::getsettings('contact_address') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="text-center">
                <p>© {{ date('Y') }} {{ config('app.name') }}</p>
                <div class="copright-text over-hidden">Designed by <a class="link-hover" data-hover-text="Think"
                        href="#" target="_blank"><span style="color: #fff;">Think</span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
</main>

<!-- Wait Loader -->
<div class="wait-loader">
    <div class="loader-inner">
        <div class="loader-circle">
            <div class="loader-layer"></div>
        </div>
    </div>
</div>
<!-- // Wait Loader -->


<!-- cursor -->
<div class="cursor"
    style="text-align: center;background: url({{ asset('assets/front/img/ds-plus.png') }});background-size:cover;background-position:center center;">
    <div class="cursor-helper cursor-view">
        <span></span>
    </div>

    <div class="cursor-helper cursor-close">
        <span>Close</span>
    </div>

    {{-- <span style="color: #fff; font-size: 90px; display: block; margin: 0 auto;">{{asset('assets/front/img/ds-plus.png') }}</span> --}}

    <div class="cursor-helper cursor-link"></div>
</div>

<!-- End cursor -->
{{-- 
@if (Utility::getsettings('cookie_setting_enable') == 'on')
    @include('layouts.cookie-consent')
@endif --}}

<script src="{{ asset('assets/front/js/jquery-3.1.1.min.js') }}"></script>
<script src="{{ asset('assets/front/js/plugins.js') }}"></script>
<script src="{{ asset('assets/front/js/dsn-grid-update.js') }}?v=<?=time()?>"></script>
<script src="{{ asset('assets/front/js/custom.js') }}"></script>

@if (Utility::getsettings('google_map_enable') == 'on')
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script>
  function initMap() {
    let map_div  =document.getElementById('map');
    if(map_div){
        var map = new google.maps.Map(map_div, {
      center: {lat: -34.397, lng: 150.644},
      zoom: 8
    });
    }
   
  }
</script> --}}
@endif
@yield('scripts')
