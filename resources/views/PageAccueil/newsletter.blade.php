<!-- Want To Work Start -->
<div class="wantToWork-area wantToWork-area2 w-padding2">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-xl-4 col-lg-8 col-md-8">
                <div class="wantToWork-caption wantToWork-caption2">
                    <h2>Newsletter</h2>
                </div>
            </div>
            <div class="col-xl-8 col-lg-4 col-md-4">
                <form action="" class="nl-form" method="POST">
					@csrf
					@if (session()->has('news'))
                    <div class="alert alert-success" role="alert">
                        {{session('news')}}
                    </div>
                    @endif
						<input class="w-100" name="mail" type="text" placeholder="Your e-mail here">
						<button class="button rounded-0 primary-bg w-100 btn_1 boxed-btn mt-2"
                        type="submit">Subscribe</button>
					</form>
            </div>
        </div>
    </div>
</div>
<!-- Want To Work End -->