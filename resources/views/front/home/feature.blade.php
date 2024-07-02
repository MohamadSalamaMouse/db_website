<section class="features-sec pt pb">
    <div class="container">
        <div class="section-title text-center">
            <h2>{{ Utility::getsettings('feature_name') ? Utility::getsettings('feature_name') : 'Stunning with' }}
                <b>{{ Utility::getsettings('feature_bold_name') ? Utility::getsettings('feature_bold_name') : 'lots of features' }}</b>
            </h2>
        </div>
        <div class="feature-sec-content text-center">
            <p>{{ Utility::getsettings('feature_detail')
                            ? Utility::getsettings('feature_detail')
                            : "Optimize your manufacturing business with Prime laravel, offering a seamless user interface for
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    streamlined operations, one convenient platform." }}
            </p>
        </div>
        @if (isset($features))
            <div class="features-card-slide">
                @foreach ($features as $key => $feature)
                    <div class="features-card">
                        <div class="features-card-inner">
                            <div class="features-card-image">
                                <a href="javascript:void(0);">
                                    <img src="{{ Storage::url($feature->feature_image) }}"
                                         alt="home-banner-image" width="60" height="60">
                                </a>
                            </div>
                            <div class="features-card-content">
                                <div class="features-top-content">
                                    <h3>
                                        <a href="javascript:void(0);">{{ isset($feature) ? $feature->feature_name : 'Warehouse Powerful' }}<br><b>
                                                {{ isset($feature) ? $feature->feature_bold_name : 'Reporting Tools' }}</b></a>
                                    </h3>
                                </div>
                                <div class="features-bottom-content">
                                    <p>{{ isset($feature) ? $feature->feature_detail : 'The capability to clean, transform, and manipulate data to make it suitable for reporting and analysis.' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        <img src="{{ asset('vendor/landing-page2/image/features-bg-image') }}.png" alt="background-image"
             class="features-bg">
    </div>
</section>