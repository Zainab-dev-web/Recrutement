
        <!-- Our Services Start -->
        <div class="our-services  pt-50 py-150">
            <div class="container">
                <div class="row">
                    @foreach ($service as $item)
                        
                    <div class=" col-lg-4 col-md-6 col-sm-6">
                        <div class="single-services text-center mb-30">
                            <div class="services-ion">
                            <span class="{{$item->icone}}"></span>
                            </div>
                            <div class="services-cap">
                            <h5>{{$item->titre}}</h5>
                            <p>{{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
        <!-- Our Services End -->
        <!-- Want To Work Start -->
        <div class="wantToWork-area pt-50 pb-100">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="wantToWork-caption">
                        <p>{{$works->titre}}</p>
                        <h2>{{$works->description}}</h2>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5 col-md-4">
                       <div class="wantToWork-btn f-right pb-5">
                            <a href="#" class="btn btn-ans">view more</a>
                       </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Want To Work End -->