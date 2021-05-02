@extends('master')
@section('content')


    <div class="custom-product">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                @foreach($products as $item)
                    <div class="item {{$item['id']==1 ? 'active ': ''}}">
                        <a href="/detail/{{$item->id}}">
                            <img src="{{$item->gallery}}">
                            <div class="carousel-caption">
                                <h3>{{$item->name}}</h3>
                                <p>{{$item->description}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <div class="trending-wrapper">
            <h4>Trending Product</h4>
            <?php
//            \App\Http\Controllers\ProductController::trending();
            ?>
            @foreach($products as $item)
                <a href="/detail/{{$item->id}}">
                <div class="trending-item">
                    <img src="{{$item->gallery}}" class="trending-image">
                    <p>{{$item->category}}</p>
                    <div class="">
                        <h4>{{$item->name}}</h4>
                    </div>
                </div>
            @endforeach
            </a>
        </div>

    </div>
<br>
<br>
<br>
    <section style="background-color: #e1b12c">
        <br>
        <br>
    </section>
    <section class="index-banner" >
        <h1 class="index-banner">Thanks for selecting us for your shopping</h1>
    </section>
    <br>
    <section style="background-color: #e1b12c">
<br>
<br>
    </section>
    <section class="category">
       <hr><h2><i>different Categorys</i></h2><hr>

    </section>
@endsection
