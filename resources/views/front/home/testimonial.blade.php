{{-- <section class="client-see section-margin">
    <div class="container">
        <div class="inner">
            <div class="left">
                <h2 class="title" data-dsn-grid="move-section" data-dsn-move="-60" data-dsn-duration="100%" data-dsn-opacity="1" data-dsn-responsive="tablet">
                    <span class="text"> {{@Utility::getsettings('testimonial_name')}}.</span>
                </h2>
                <p>{{@Utility::getsettings('testimonial_detail')}}</p>
            </div>

            <div class="items">
                <div class="bg"></div>
                <div class="slick-slider">
                    @if (isset($testimonials))
                        @foreach ($testimonials as $testimonial)
                    <div class="item">
                        <div class="quote">
                            <p>{{ $testimonial->desc }}</p>
                        </div>
                        <div class="bottom">
                            <div class="avatar">
                                <img src="{{ isset($testimonial->image) ? Storage::url($testimonial->image) : asset('vendor/landing-page2/image/blog-card-img.png') }}" alt="">
                            </div>
                            <div class="label">
                                <div class="cell">- {{ $testimonial->name }}</div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section> --}}