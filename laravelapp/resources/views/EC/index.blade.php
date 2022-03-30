@extends('layouts.EC')

@section('title', 'sugizon')

@section('content')
@if (Auth::check())
    <p><a href="/home"><img src="storage/images-kouka/user.png" title="{{$user->name}}"></a></p>
@else
<p><a href="/login">ログイン</a>|<a href="/register">登録</a></p>
@endif

<a href="/SUGIZON/look">カート</a>

<table>
@foreach($items as $item)
            <tr>
                <td><a href="/sugizon/{{$item->id}}">{{$item->name}}</a></td>
            </tr>
            @endforeach
</table>
{{ $items->links()}}
@endsection