@extends('layouts/master')
@section('content')
@include('components/nav')

        <div class="container border border-rounded my-5 py-5 bg-info">
            <div class="text-center">
                <h3 class="text-white"><strong>Vous êtes ...</strong></h3>
            </div>
            <div class="row">
                <div class=" col-lg-4 col-md-6 col-sm-6  border border-rounded mx-auto my-5 bg-white">
                    <a href="#">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-experience fa-5x"></span>
                        </div>
                        <div class="services-cap">
                        
                            <h5>Un futur "Talent"</h5>
                        
                        </div>
                    </div>
                </a>
                </div>
                <div class=" col-lg-4 col-md-6 col-sm-6 border border-rounded mx-auto my-5 bg-white">
                    <a href="#">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-pay fa-5x"></span>
                        </div>
                        <div class="services-cap">
                            
                            <h5>Une entreprise</h5>
                        </div>
                    </div>
                </a>
                </div>
            </div>
        </div>
    </div>
@include('components/footer')
@endsection