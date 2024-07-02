<section class="our-work work-under-header light p-4 " data-dsn-col="3">
    <div class="container-fluid">
        <div class="row">
            <h3 class="" style="text-align:center;width:100%;font-family:Britanica;margin-bottom:20px !important;">Clients</h3>
            <div class="col-lg-12 ">
                <div class="work-container">
                  <div id="mixedSlider" class="exampleSlider">
                    <div class="MS-content" style="overflow: hidden; max-height: 190px;">
                        @foreach ($clients as $index => $client)
                        <div class="item {{ $index < 5 ? 'active' : 'hidden' }}">
                            <img class="has-top-bottom" src="{{ Storage::url($client->cover) }}" alt="">
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
