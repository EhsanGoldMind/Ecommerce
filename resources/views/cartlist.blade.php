@extends('master')
@section('content')

    <div class="container ">
        <div class="row">

            <div class="col-sm-10">
                <div class="cartlist-wrapper">
                    <a href="/ordernow" class="btn btn-success">Order Now</a><br><br>
                    @foreach($products as $item)
                        <a href="/detail/{{$item->id}}">
                            <div class="row cartlist-item">
                                <div class="col-sm-2">
                                    <img src="{{$item->gallery}}" class="cartlist-image">
                                </div>
                                <div class="col-sm-3">
                                    <div class="cartlist-text">
                                        <h6>{{$item->category}}</h6>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="cartlist-text">
                                        <h4>{{$item->name}}</h4>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="cartlist-text">
                                        <h3>${{$item->price}}</h3>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <div class="cartlist-text">
                                        <a href="/remove/cartlist/{{$item->cart_id}}" class="btn btn-warning">Remove
                                            from my list!</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </a>
                </div>
            </div>
        </div>
    </div>


@endsection
