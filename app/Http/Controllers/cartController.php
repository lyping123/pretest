<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\cartid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class cartController extends Controller
{
    public function add_to_cart(Request $request,$id){
        $formFields=$request->validate([
            "p_mass"=>"required|numeric:100"
        ]);

        $cart=new cart();
        $cart->p_id=$id;
        $cart->p_mass=$formFields['p_mass'];
        $cart->u_id=Auth::id();
        $cart->cart_id=0;
        $cart->c_status="pending";
        $cart->save();
        return redirect("/home")->with("success","add to cart successfully");
    }

    public function cart_list(){
        $carts=cart::selectRaw("*,carts.p_mass as total_mass")->join("products","carts.p_id","=","products.id")
        ->where('u_id',Auth::id())->where('c_status','pending')
        ->get();
        return view('cart_list',compact('carts'));
    }

    public function checkout(){
        $cartid=cartid::selectRaw("MAX(id) as id")->first();
        if($cartid==null){
            $cart_id=1;
        }else{
            $cart_id=$cartid->id+1;
        }

        $cart=cart::where("u_id",auth::id())->where("cart_id",0)->where("c_status","pending")
        ->update([
            "cart_id"=>$cart_id,
            "c_status"=>"checkout"
        ]);
        
        
        if($cart){
            $newcartid=new cartid();
            $newcartid["c_id"]=$cart_id;
            $newcartid->save();
            return redirect("/home")->with("success","checkout success");
        }
        return back()->with("error","checkout failed");

    }

}
