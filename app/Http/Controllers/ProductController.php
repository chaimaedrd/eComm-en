<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session; // to get the data from the session in the function: cartItem

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
    static function cartItem(){ // static function cz when we dont use it we have a problem of non static methode to be called statically
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count(); // count the items in our table 'cart' in DB to show the number of items in the header
    }
}
