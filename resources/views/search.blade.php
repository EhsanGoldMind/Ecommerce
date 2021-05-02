@extends('master')
@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-sm-4">
                <a href="#">Filter</a>
                <h4>Your Search Result is .... </h4><br><br>
            </div><div class="col-sm-8">
            <div class="search-wrapper">

                @foreach($product as $item)
                    <a href="/detail/{{$item->id}}">
                        <div class="search-item">
                            <img src="{{$item->gallery}}" class="search-image">
                            <div class="search-text">
                                <h6>{{$item->category}}</h6>
                                <h4>{{$item->name}}</h4>
                            </div>
                        </div>
                        @endforeach
                    </a>
            </div>
            </div>
        </div>
    </div>


@endsection
