<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Commerce Project</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>

    <style>
        .custom_login {
            height: 600px;
            padding-top: 200px;
        }


        .carousel-inner > .item > a > img, .carousel-inner > .item > img, .img-responsive, .thumbnail a > img, .thumbnail > img {
            height: 400px;
        }

        .index-banner {

            {{--            background-image: url({{url("/public/image/Easybuy.jpg")}});--}}
            background-image: url("storage/image/Easybuy.jpg");
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: calc(100vh - 100px);
            width: 100%;
        }

        .index-banner h1 {
            text-align: center;
            text-shadow: 2px 2px #e1b12c;
            color:cadetblue;
            font-size: 40px;
            padding-top: 600px;
        }

        div.custom-product {
            height: 600px;
        }

        .carousel-caption {
            background-color: #77777759;
        }

        .trending-image {
            height: 100px;
        }

        .trending-item {
            float: left;
            width: 20%;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-image {
            height: 200px;
        }

        .navbar-form .form-control {
            width: 500px;
        }

        .search-image {
            height: 50px;
        }

        .search-item {
            float: left;
            width: 20%;
            margin-top: 40px;
        }

        .search-wrapper {
            margin: 30px;
        }

        .search-text {
            font-size: 30px;
        }

        .cartlist-image {
            height: 50px;
        }

        .cartlist-item {
            margin-top: 20px;
            border-bottom: 1px solid #4a5568;
        }

        .cartlist-text {
            color: black;
        }
        .checked {
            color: orange;
        }
        .star{color: #e1b12c}
        .category{
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>
<body>

{{\Illuminate\Support\Facades\View::make('header')}}

@yield('content')

{{\Illuminate\Support\Facades\View::make('footer')}}

</body>

</html>


