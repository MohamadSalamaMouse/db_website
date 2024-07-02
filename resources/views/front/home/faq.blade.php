<section id="faq" class="section border-0 m-0">
    <div class="container">
        <div class="row justify-content-center pt-3">
            <div class="col-lg-10 text-center">
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">
                    {{@Utility::getsettings('faq_name')}}
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12  mb-5 mb-md-0">
                <div class="accordion custom-accordion-style-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" id="accordion1" style="animation-delay: 250ms;">
                    @foreach($faqs as $key=>$record)
                        <div class="card card-default">
                            <div class="card-header" id="collapse{{$key}}Heading{{$key}}">
                                <h4 class="card-title m-0">
                                    <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse{{$key}}" aria-expanded="false" aria-controls="collapse{{$key}}">
                                        {{$record['questions']}}
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse{{$key}}" class="collapse" aria-labelledby="collapse{{$key}}Heading{{$key}}" data-bs-parent="#accordion{{$key}}" style="">
                                <div class="card-body">
                                    <p class="mb-0">{{$record['answer']}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>