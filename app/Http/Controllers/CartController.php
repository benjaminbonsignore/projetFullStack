<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Product;
use App\Cart;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $userID = Auth::id();
        
        $carts = Cart::all()->where('user_id',$userID);
        
        return view('cart', compact('carts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addToCart($id)
    {
        $carts = Cart::where('product_id',$id)->first();
     
        if($carts === null)
        {
            $cart = new Cart;
            
            $cart->user_id = Auth::id();
            $cart->product_id = $id;
            $cart->quantity = 1;
            
            $cart->save();    
        }
        else
        { 
            $carts->quantity += 1;
            
            $carts->save();
        }   
        return redirect(route('cart'));
    }

    /**
     * Remove one iteration.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyOne($id)
    {
        $cart = Cart::find($id);
        
        $cart->quantity--;
        
        if($cart->quantity == 0) $cart->delete();
        else $cart->save();
        
        return redirect(route('cart'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        Cart::find($id)->delete();
        
        return redirect(route('cart'));
    }
          
}
