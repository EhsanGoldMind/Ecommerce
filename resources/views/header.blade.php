<?php

use App\Http\Controllers\ProductController;
$total=0;
    if(\Illuminate\Support\Facades\Session::has('user')){
$total=ProductController::cartitem();
}
?>
{{--navbar from bootstrap--}}

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Easy Buy</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li class=""><a href="/myorders">My Orders</a></li>
            </ul>
            <form class="navbar-form navbar-left " method="get" action="/search">
                <div class="form-group">
                    <input type="text" name="query" class="form-control search-box" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <div  class="nav navbar-nav">
                <div style="padding-top: 15px;padding-left: 40px">
                today is : {{date('Y-m-d H:i:s')}}
                </div>
            </div>


            <ul class="nav navbar-nav navbar-right">
                @if(\Illuminate\Support\Facades\Session::has('user'))
                <li><a href="/cartlist">Card ( {{$total}} )</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{\Illuminate\Support\Facades\Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">LogOut</a></li>
                    </ul>
                </li>
                @else
                    <li><a href="/login">LogIn</a></li>
                    <li><a href="/signup">Sign Up</a></li>
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
