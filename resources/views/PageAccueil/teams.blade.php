
        <!-- Our Services Start -->
        <div class="our-services all-starups-area pt-50 py-150">
            <div class="starups2">
                <div class="container no-gutter text-center">
                    <div class='text-center my-5'>
                        <h1><b>Team</b></h1>
                        
                    </div>
                <div class="row starups-details2 text-center">
                    @foreach ($UserSecondaire as $position =>$item)
                @if($position != 1) 
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <div class="single-services text-center mb-10">
                            <div class="startup-img"><img class="w-75"src="{{asset('storage/'.$item->photo)}}" alt=""></div>
                            <div class="services-cap2">
                                <h5>{{$item->role->role}}</h5>
                                <p>{{$item->nom}}</p>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="col-lg-4 col-md-6 col-sm-4">
                        <div class="single-services text-center mb-10">
                            <div class="startup-img"><img  class="w-75"src="
                                {{asset('storage/'.$userPrincipal->photo)}}" alt=""></div>
                            <div class="services-cap2">
                                <h5>{{$userPrincipal->role->role}}</h5>
                                <p>{{$userPrincipal->nom}}</p>
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
