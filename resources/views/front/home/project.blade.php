<section id="projects" class="section section-height-4 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
        </svg>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10 text-center">
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                    {{@Utility::getsettings('project_name')}}
                </h3>
                <p class="text-3-5 pb-3 mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">
                    {{@Utility::getsettings('project_detail')}}
                </p>
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
            @if (isset($projects))
                @foreach ($projects as $key=>$record)
                    <div class="col-sm-9 col-md-6 col-lg- mb-4">
                        <a href="{{ route('view.project', $record->slug) }}" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                            <div class="card box-shado`w-4">
                                <div class="card-img-top position-relative overlay overlay-show">
                                    <div class="position-absolute bottom-0 left-0 w-100 py-3 px-4 z-index-3">
                                        <h4 class="font-weight-semibold text-color-light text-6 mb-1">
                                            {{$record['title']}}
                                        </h4>
                                        <div class="custom-crooked-line">
                                            <div class="animated-icon animated fadeIn svg-fill-color-primary">
                                                <svg version="1.1" id="icon_241706221512169" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1196.9 92" style="enable-background:new 0 0 1196.9 92;" xml:space="preserve" data-filename="infinite-crooked-line.svg" width="154" height="26">
                                                            <g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
                                                                <path d="M1620.4,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326L0,169.6l87.8-82.2l85-85L505.4,335l245,245
                                                                    l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290l290-290l290,290l290,290
                                                                    l290-290l290-290l291,291l291,291l247-243L5983.3,0.1l85,84l84.4,85.6L5723.4,592l-333,327l-290-289l-290-290l-290,290l-290,290
                                                                    l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L1620.4,630z"></path>
                                                            </g>
                                                    <g transform="translate(0.000000,92.000000) scale(0.100000,-0.100000)">
                                                        <path d="M7432.8,630l-290-290l-286,286c-250,249-289,285-305,276c-11-6-161-153-334-326l-405.4-406.4l84.4-84.3l86.5-85.2
                                                                    L6317.8,335l245,245l285-285c157-157,289-285,295-285c5,0,138,128,295,285l285,285l290-290l290-290l290,290l290,290l290-290
                                                                    l290-290l290,290l290,290l290-290l290-290l291,291l291,291l247-243l343.9-338.9l85,84l88.6,81.4L11535.8,592l-333,327l-290-289
                                                                    l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290l-290-290l-290-290l-290,290l-290,290L7432.8,630z"></path>
                                                    </g>
                                                            </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="{{ isset($record->images) ? Storage::url($record->images) : asset('vendor/landing-page2/image/blog-card-img.png') }}" class="img-fluid h-100 w-100" alt="">
                                </div>
                                <div class="card-body d-flex align-items-center custom-view-more px-4">
                                    <p class="card-text w-100 mb-0">
                                        {{$record['title']}}
                                    </p>
                                    <div class="animated-icon animated fadeIn svg-fill-color-primary"><svg viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" transform="matrix(-1,1.2246467991473532e-16,-1.2246467991473532e-16,-1,0,0)" id="icon_171706221512185" data-filename="arrow-right.svg" width="50" height="50">
                                            <path d="M1 26h43.586l-6.293 6.293 1.414 1.414L48.414 25l-8.707-8.707-1.414 1.414L44.586 24H1z"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</section>