<section id="contactus" class="contact-section container">
<div class="row">
    <div class="col-12">
        <h2 class="contact-title">Get in Touch</h2>
        @if (session()->has('send'))
	                <div class="alert alert-success" role="alert">
	                    {{session('send')}}
	                </div>
	                @endif
    </div>
    

    <div class="col-lg-8">
        <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post" >
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100 @error('msg') is-invalid @enderror" name="msg" id="message" cols="30" rows="9" type='text 'placeholder=" Enter Message" value="@if($errors->first('msg')) 
                            @else">{{old('msg')}}</textarea>@endif
                            <div class="validation"></div>
                    </div>
                     @error('msg')  
              <div class="text-danger">{{ $message }}</div>  
              @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control @error('nom') is-invalid @enderror"  name="nom" id="name" type="text" placeholder="Enter your name" value="@if($errors->first('nom')) 
                        @else{{old('nom')}}@endif"/>
                        <div class="validation"></div>
                    </div>
                    @error('nom')  
                    <div class="text-danger">{{ $message }}</div>  
                    @enderror
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control @error('email') is-invalid @enderror" name="email" id="email" type="email" placeholder="Email" value="@if($errors->first('email')) 
                        @else{{old('email')}}@endif"/>
                        <div class="validation"></div>
                    </div>
                @error('email')  
                    <div class="text-danger">{{ $message }}</div>  
                @enderror
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control @error('sujet') is-invalid @enderror" name="sujet" id="subject" type="text" placeholder="Enter Subject" value="@if($errors->first('sujet')) 
                        @else{{old('sujet')}}@endif"/>
                        <div class="validation"></div>
                    </div>
                    @error('sujet')  
                    <div class="text-danger">{{ $message }}</div>  
                    @enderror
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
            </div>
        </form>
    </div>
    <div class="col-lg-3 offset-lg-1">
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
                <h3>{{$contact->adresse}}, {{$contact->ville}}.</h3>
            <p>{{$contact->rue}},{{$contact->code}}</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
            <div class="media-body">
            <h3>{{$contact->numero}}</h3>
            <p>{{$contact->Ndispo}}</p>
            </div>
        </div>
        <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
            <h3>{{$contact->email}}</h3>
            <p>{{$contact->Edispo}}</p>
            </div>
        </div>
    </div>
</div>
</section>