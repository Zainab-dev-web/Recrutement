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
        <form class="form-contact contact_form" action="{{route('contact.store')}}" method="post" novalidate="novalidate">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <textarea class="form-control w-100" name="msg" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="nom" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <input class="form-control" name="sujet" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                    </div>
                </div>
            </div>
            <div class="form-group mt-3">
                <button type="submit" class="button button-contactForm boxed-btn">Send</button>
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