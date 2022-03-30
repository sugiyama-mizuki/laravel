<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\Http\Requests\HelloRequest; !!!!!!!!!!!!!!!!!!!!
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Goods;
use App\Cart;
class ECController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        $items = Goods::paginate(5);
        $param = ['items' => $items, 'user' => $user];   //
        return view('EC.index', $param);
    }

    public function show($id) 
    {
        $item = DB::table('goods')->where('id', $id)->first();
        return view('EC.show', ['item' => $item]);
    }

    public function store(Request $request){
        $validate_rule = [
            'goods_id' => 'exists:goods,id',
            'quantity' => 'required|min:1|integer',
        ];
        
        $cart = new Cart;
        $cart->id = 1;
        $cart->goods_id = $request->goods_id;
        $cart->quantity = $request->quantity;
        $cart->save();
        return redirect('/sugizon');
    }

    public function look(){
        $items = Goods::paginate(5);
        return view('EC.cart', ['items' => $items]);
    }

    public function destroy($id){
        Cart::find($id)->delete();
        return redirect('/sugizon');
    }
}
