<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index(Request $request){
        $hasItems = Person::has('boards')->get();
        $noItems = Person::doesntHave('boards')->get();
        $param = ['hasItems' => $hasItems, 'noItems' => $noItems];
        return view('person.index', $param);
    }

    public function find(Request $request){
        return view('person.find', ['input' => '']);
    }

    public function search(Request $request){
        $min = $request->input * 1;
        $max = $min + 10;
        $item = Person::ageGreaterThan($min)
            ->ageLessThan($max)
            ->first();
        $param = ['input' => $request->input, 'item' => $item];
        return view('person.find', $param);
    }
    
}
