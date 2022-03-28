<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
// use App\Http\Requests\HelloRequest; !!!!!!!!!!!!!!!!!!!!
use Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        $item = Person::find($id);
        return view('EC.show', ['item' => $item]);
    }

}
