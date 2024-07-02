<section class="our-news section-margin">
    <div class="container">
        <div class="one-title" data-dsn-animate="up">
            <div class="title-sub-container">
                <p class="title-sub">{{@Utility::getsettings('blog_name')}}</p>
            </div>
            <h2 class="title-main">{{@Utility::getsettings('blog_detail')}}</h2>
        </div>
        <div class="custom-container">
            <div class="slick-slider">
                @if (isset($blogs))
                    @foreach ($blogs as $key=>$record)
                <div class="item-new slick-slide">
                    <div class="image" data-overlay="5">
                        <img src="{{ isset($record->images) ? Storage::url($record->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" alt="">
                    </div>
                    <div class="content">
                        <div class="background"></div>
                        <div class="cta">
                            <a href="{{ route('view.blog', $record->slug) }}">{{$record['title']}}</a>
                        </div>
                        <p>{{$record['short_description']}}</p>
                    </div>
                </div>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</section>