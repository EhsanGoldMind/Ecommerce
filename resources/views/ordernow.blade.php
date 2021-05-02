@extends('master')
@section('content')

    <div class="container ">
        <div class="row">
            <div class="col-sm-10">
                <table class="table table-striped">
                    <tbody>
                    <tr>
                        <td>Amount</td>
                        <td>$ {{$total}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>M</td>
                    </tr>
                    <tr>
                        <td>Delivery price</td>
                        <td>$ 20</td>
                    </tr>
                    <tr>
                        <td>How much to pay</td>
                        <td> $ {{$total+20}}</td>
                    </tr>
                    </tbody>
                </table>

                <div>
                    <hr><br><br><br>
                    <form action="/orderaction" method="get">
                        <div class="">
                            <textarea placeholder="Please Enter Your Address" class="form-control" name="claddress"></textarea>
                        </div>
                        <div style="line-height: 30px">
                            <br><br>
                            <label for="pwd">How want you to pay : </label><br><br>
                            <input type="checkbox" class=""  name="paymentmethod" value="Pay Online"><span>Pay Online </span><br>
                            <input type="checkbox" class=""  name="paymentmethod" value="Pay To Delivery Man"><span>Pay To Delivery Man</span><br>
                            <input type="checkbox" class=""  name="paymentmethod" value="Pay with your gift cart"><span>Pay with your gift cart</span><br><br><br>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
