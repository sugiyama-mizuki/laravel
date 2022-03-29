@extends('layouts.EC')

@section('title', 'sugizon')

@section('content')
<table>
    <form action="/sugizon" method="post">
        @csrf
    <input type="hidden" name="goods_id" value="{{$item->id}}">
    <tr><th>{{$item->category}}</th></tr>
    <tr><td>{{$item->name}} : {{$item->price}}円</td></tr>
    <tr><td><select name="quantity">
        <option value=1 selected>1</option>
        <option value=2>2</option>
        <option value=3>3</option>
    </select>
    <tr><td><input type="submit" value="カートに追加"></a></td>
</form>
</table>
@endsection