<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class ProductController extends Controller
{
    //
    function index(){
        $data=Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id){
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        //check if user is login to continue or not then we will return him to login page
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
}
