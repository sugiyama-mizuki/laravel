<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Jissyu3_2Controller extends Controller
{
    public function index()
    {
        $data = [
            'msg'=>'必要事項を入力してください',
        ];
        return view('jissyu3_2.input', $data);
    }

    public function post(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'age'=>$request->age
        ];
        // 連想配列でわたすときは[POSTされたときの['POST先の渡される変数名'=>$渡したいコントローラの変数名]]
        return view('jissyu3_2.output', ['data'=>$data]);
    }

}
