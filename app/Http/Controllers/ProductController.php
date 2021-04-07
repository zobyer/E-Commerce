<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\cart;
use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function show_prod(){
        //return product::all();
        $products_data = product::all();
        return view('product',['products'=>$products_data]);
    }
    function details($id, Request $req){
        $data = product::find($id);
        return view('details',['product_detail'=>$data]);
    }
    
    function add_to_cart(Request $req){
        echo $req->session()->has('user')['id'];
        if ($req->session()->has('user')){
            $cart_data = new cart;
            $cart_data->user_id = $req->session()->get('user')['id'];
            $cart_data->product_id = $req->product_id;
            $cart_data->save();
            return redirect('/');
            //echo $req->session()->get('user')['id'];
        }else{
            return redirect('/login');
        }
    }

    static function cartitem(){
        $data = Session::get('user')['id'];
        return cart::where('user_id', $data)->count();
    }

    function cartlist(){
        $user_id = Session::get('user')['id'];
        $products = DB::table('cart')->join('products','cart.product_id','products.id')
        ->where('cart.user_id', $user_id)
        ->select('products.*','cart.id as cart_id')
        ->get();

        return view('cart',['products'=>$products]);
    }

    function removecart($id){
        //echo "Called";
        cart::destroy($id);
        return redirect('/cartlist');
    }

}
