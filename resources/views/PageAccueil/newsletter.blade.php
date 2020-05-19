<!-- Want To Work Start -->
<div id="newsletter" class="wantToWork-area wantToWork-area2 w-padding2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-8 col-lg-8 col-md-8">
                <div class="wantToWork-caption wantToWork-caption2">
                    <h2>Newsletter</h2>
                    @if (session()->has('new'))
					<div class="alert alert-success" role="alert">
						{{session('new')}}
					</div>
					@endif
                <form action="{{route('newsletter.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="newemail" class="form-control" onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Enter email'" placeholder='Enter email' required>

					@error('newemail')
					<div class="alert alert-danger" role="alert">{{$message}}</div>
					@enderror
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4">
                
                    <button class="button rounded-0 primary-bg w-100 btn_1 boxed-btn mt-2"
                        type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Want To Work End -->