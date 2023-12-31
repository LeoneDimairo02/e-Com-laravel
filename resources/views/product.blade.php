@extends('master')
@section('content')
<div class="container custom-product">
    <div id="myCarousel" class="carousel  slide" data-bs-ride="carousel">
        <!--Indicators-->
        <div class="carousel-indicators">
            <button type = "button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type = "button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type = "button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type = "button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type = "button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <!--Wrapper for slides-->
        <div class="carousel-inner">
            @foreach($products as $item)
                <div class="carousel-item {{$item['id']==1?'active':''}}">
                    <img src="/img/img5.jpg" alt="Chania" class="d-block w-100">
                </div>
            @endforeach
            


        </div>

        <!--Left and right controls-->
        <!--<a href="#myCarousel" class="left carousel-control" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a href="#myCarousel" class="right carousel-control" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a> -->

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
  
</div>
@endsection
