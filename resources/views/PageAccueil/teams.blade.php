
        <!-- Our Services Start -->
        <div class="our-services all-starups-area my-5 pt-50 py-150">
            <div class="starups2">
                <div class="container no-gutter text-center">
                    <div class='text-center my-5'>
                        <h3 class="text-white bold">OUR TEAM</h3> 
                    </div>
                <div class="row starups-details2 text-center">
                    @foreach ($UserSecondaire as $position =>$item)
                @if($position != 1) 
                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="single-services2 text-center mb-10">
                            <div class="startup-img mt-4"><img class="w-75"src="{{asset('storage/'.$item->photo)}}" alt=""></div>
                            <div class="services-cap2">
                                <h5>{{$item->role->role}}</h5>
                                <p>{{$item->nom}} {{$item->prénom}}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4 col-md-6 col-sm-4 col-xs-4">
                        <div class="single-services2 text-center mb-10">
                            <div class="startup-img mt-4"><img  class="w-75"src="
                                {{asset('storage/'.$userPrincipal->photo)}}" alt=""></div>
                            <div class="services-cap2">
                                <h5>{{$userPrincipal->role->role}}</h5>
                                <p>{{$userPrincipal->nom}} {{$userPrincipal->prénom}}</p>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
                </div>
            </div>
        </div>
        </div>
        <!-- Our Services End -->
