<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Transaction;
use Auth;

class CheckoutController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function store(){
        $carts = Cart::where('user_id', Auth::user()->id);
        //  ini untuk menampilkan di view, dan untuk perbedaan variabel $cartUser untuk melempar
        $cartUser = $carts->get();

        $transaction = Transaction::create([
            'user_id' => Auth::user()->id
        ]);

        foreach($cartUser as $cart){
            $transaction->detail()->create([
                'product_id' => $cart->product_id,
                'qty' => $cart->qty
            ]);
        }

        $carts->delete();
        return redirect('/');
    }
}
