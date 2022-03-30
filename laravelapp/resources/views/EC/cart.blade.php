@extends('layouts.EC')

@section('title', 'sugizon')

@section('content')
<form action="../sugizon/1" method="post">
    @method('DELETE')

<table>
    @csrf
@foreach($items as $item)
@if ($item->cart != null)
            <tr><td>{{$item->name}}</td></tr>
            <tr><td>{{$item->price}}円</td></tr>
            <tr><td>{{$item->cart->quantity}}個</td></tr>
            <tr><td><input type="submit" value="購入"></td></tr>
            <tr><td><input type="submit" value="削除"></td></tr>
            @endif
            @endforeach
            
</table>
</form>
{{ $items->links()}}
@endsection