@extends('master')
@section('content')

    <div class="container ">
    <div class="row">

        <div class="col-sm-10">
            <div class="cartlist-wrapper">
               <p>Your perivous orders</p>
                @foreach($products as $item)
                    <a href="/detail/{{$item->id}}">
                        <div class="row cartlist-item">
                            <div class="col-sm-3">
                                <img src="{{$item->gallery}}" class="cartlist-image">
                            </div>
                            <div class="col-sm-8 ">
                                <div class="cartlist-text">
                                    <h6>Category : {{$item->category}}</h6>
                                    <h5>Product Name: {{$item->name}}</h5>
                                    <h5>Price for that time : ${{$item->price}}</h5>
                                    <h5>Delivery Address : {{$item->address}}</h5>
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
