<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\Http\Requests\HelloRequest; !!!!!!!!!!!!!!!!!!!!
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Cart;
// use Gloudemans\Shoppingcart\ShoppingcartServiceProvider;

class ECController extends Controller
{
    public function index(Request $request){
        // $user = Auth::user();
        $items = DB::table('goods')->paginate(5);
        $param = ['items' => $items];   //, 'user' => $user
        return view('EC.index', $param);
    }

    public function show($id) 
    {
        $item = DB::table('goods')->where('id', $id)->first();
        return view('EC.show', ['item' => $item]);
    }

    public function store(Request $request){
        $cart = new Cart;
        $cart->goods_id = $request->goods_id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect('/sugizon');
    }



    // public function cart($id){
    //     $items = DB::table('goods')->where('id', $id)->first();

    //     Cart::add([
    //         [
    //             'id' => $items->id,
    //             'name' => $items->name,
    //             'qty' => 1,
    //             'price' => $items->price,
    //             ]
    //         ]);

    //         $cart = Cart::content();
    //         return view('EC.index')->with(compact('cart'));
    // }

}
