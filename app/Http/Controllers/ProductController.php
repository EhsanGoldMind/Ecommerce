<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\order;
use App\Models\Product;
use App\Models\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ProductController extends Controller
{
    public function index()
    {
        $data=Product::all();
        return view('product',['products'=>$data]);
    }

    public function detail($id)
    {
        $data= Product::find($id);
        return view('detail',['product'=>$data]);
    }

    public function search(Request $request)
    {
        $data=DB::table('products')->where('name','like','%'.$request->input('query').'%')->get();
        return view('search',['product'=>$data]);

    }

    public function cart(Request $request)
    {

//        $user = Auth::user();
//            $cart->user_id=$user->id;
        if($request->session()->has('user')) {
            $user = Auth::user();
            $cart= new cart;
            $cart->user_id=$request->session()->has('user');
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect()->back();
        }else{
            return redirect('/login');
        }
    }

    static public function cartitem(){
        $user_id=Session::get('user')['id'];
//        return $user_id;
        return cart::where('user_id',$user_id)->count();
    }

    public function cartlist()
    {
        $user_id=Session::get('user')['id'];
        $products = DB::table('carts')->join('products','carts.product_id','=','products.id')->where('carts.user_id',$user_id)
            ->select('products.*','carts.id as cart_id')->get();
        return view('cartlist',['products'=>$products]);
    }


    public function removecartlist($id)
    {
        cart::destroy($id);
        return redirect()->back();
    }

    public function ordernow(){
        $user_id=Session::get('user')['id'];
        $total= $products = DB::table('carts')
            ->join('products','carts.product_id','=','products.id')
            ->where('carts.user_id',$user_id)
            ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    public function orderaction(Request $request)
    {
        $user_id=Session::get('user')['id'];
        $final=cart::where('user_id',$user_id)->get();
        foreach ($final as $f){
            $order = new order();
            $order->product_id=$f->product_id;
            $order->user_id=$f->user_id;
            //status means is delivered or returned
            $order->status='its not staybale always';
            $order->payment_method=$request->paymentmethod;
            $order->payment_status='its not staybale always';
            $order->address=$request->claddress;
            $order->save();
            cart::where('user_id',$user_id)->delete();
        }
        return redirect()->to('/');
    }

    public function myorders()
    {
        $user_id=Session::get('user')['id'];
        $products = DB::table('orders')
            ->join('products','orders.product_id','=','products.id')
            ->where('orders.user_id',$user_id)
            ->get();
        return view('myorders',['products'=>$products]);
    }

    public function rating(Request $request,$id)
    {

        if($request->session()->has('user')) {
            $user_id=Session::get('user')['id'];
            $rate = $request->rating;
            $datas= Product::find($id);
            $data=$datas->id;
            if($rate){
                if(!DB::table('ratings')->where([['user_id', $user_id], ['product_id', $data]])->exists()) {
                    $user_id = Session::get('user')['id'];
                    $rateings = new rating();
                    $rateings->user_id = $user_id;
                    $rateings->product_id = $data;
                    $rateings->rating = $rate;
                    $rateings->save();
                    return redirect()->back();
                }else{
                    return 'you send your view before';
                }
            }else{
                return 'you must select the mount of star';
            }
        }else{
           return redirect()->to('/login');
        }
    }
}
