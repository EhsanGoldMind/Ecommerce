@extends('master')
@section('content')

    <div class="container custom_login">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <form class="form-horizontal" action="signsup" method="post">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Username: </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="email">Email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Enter email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="pwd">Password:</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter password">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Sign up</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
