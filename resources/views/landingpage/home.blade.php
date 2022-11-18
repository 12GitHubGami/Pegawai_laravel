@extends('landingpage.index')
@section('content')
<section class="section about">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 align-self-center">
                <div class="image-block bg-about">
                    <img class="img-fluid" src="{{ url('images/speakers/toni.jpg') }}" alt="">
                </div>
            </div>
            <div class="col-lg-8 col-md-6 align-self-center">
                <div class="content-block">
                    <h2>Welcome To <span class="alternate">Simpeg Kampus Merdeka</span></h2>
                    <div class="description-one">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt ut
                            labore dolore magna aliqua enim ad minim veniam quis nostrud exercitation ullamco.
                        </p>
                    </div>
                    <div class="description-two">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmtempor incididunt ut
                            labore et dolore magna aliq enim ad minim veniam quis nostrud exercitation ullamco laboris
                            nisi ut aliquip ex ea.</p>
                    </div>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#" class="btn btn-main-md">Read More</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection