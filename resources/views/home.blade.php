@extends('layouts.app')

@section('content')
    <div class="container" id="home-element">
        <div class="row">
            {{-- Left Content --}}
            <div class="col-lg-3">
                @include('layouts._typebar')
            </div>
            {{-- Right Content --}}
            <div class="col-lg-9" id="home-responsive">
                {{-- Movies Carousel --}}
                <div id="movies-carousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#movies-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#movies-carousel" data-slide-to="1"></li>
                        <li data-target="#movies-carousel" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" alt="First Slide" src="https://mdbootstrap.com/img/Photos/Slides/img%20(35).jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Second Slide" src="https://mdbootstrap.com/img/Photos/Slides/img%20(33).jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" alt="Third Slide"  src="https://mdbootstrap.com/img/Photos/Slides/img%20(31).jpg">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#movies-carousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#movies-carousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                {{-- Search Bar --}}
                @include('layouts._searchbar')
                {{-- Movies List --}}
                <div class="row" id="movies-list">
                    @for ($item = 0; $item < 9; $item++)
                    <div class="col-4" id="movie-item">
                        <div class="card h-100">
                            <a href="#"><img class="card-img-top" src="{{ url('http://placehold.it/400x500') }}"></a>
                            <div class="card-body"><h6>EXAMPLE</h6></div>
                            <div class="card-footer">
                                @for ($i = 0; $i < 5; $i++)
                                <i class="fa fa-star"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
@endsection
