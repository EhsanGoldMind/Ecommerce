@extends('master')
@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-image" src="{{$product->gallery}}">
            </div>
            <div class="col-sm-6">
                <a href="/">Go Back</a>
                <h3>{{$product->name}}</h3><br>
                <div>
                    <form action="/rating/{{$product->id}}" method="get">
                        @csrf
                        <input type="radio" class="star-input" name="rating" id="star-1" value="1">
                        <label for="star-1" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" class="star-input" name="rating" id="star-2" value="2">
                        <label for="star-2" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" class="star-input" name="rating" id="star-3" value="3">
                        <label for="star-3" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" class="star-input" name="rating" id="star-4" value="4">
                        <label for="star-4" class="star"><i class="fas fa-star"></i></label>
                        <input type="radio" class="star-input" name="rating" id="star-5" value="5">
                        <label for="star-5" class="star"><i class="fas fa-star"></i></label>
                        {{--                        <button type="button" class="btn btn-info">Submit rating</button>--}}
                        <button class="btn btn-success">Rate</button>
                    </form>
                </div>
                <h5><b>Category : </b>{{$product->category}} category</h5><br>
                <p><b>Description : </b>{{$product->description}}</p>
                <h6><b>Price : </b>${{$product->price}}</h6><br>
                <h6><b>Rates
                        : </b>{{\Illuminate\Support\Facades\DB::table('ratings')->where('product_id','=',$product->id)->sum('rating')}}
                </h6>
                <h6><b>How many people Rate
                        : </b>{{\Illuminate\Support\Facades\DB::table('ratings')->where('product_id','=',$product->id)->count()}}
                </h6><br>
                <h6><b>Its available at : </b>{{$product->created_at->format('d/m/Y')}}</h6>
                <br>
                <div class="">
                    <form action="/add_to_cart" method="post">
                        @csrf
                        <input type="hidden" name="product_id" value="{{$product->id}}">
                        <button class="btn btn-primary">Add To Cart</button>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
