@extends('layouts.EC')

@section('title', 'sugizon')

@section('content')
<table>
@foreach($items as $item)
            <tr>
                <td><a href="/sugizon/{{$item->id}}">{{$item->name}}</a></td>
            </tr>
            @endforeach
</table>
{{ $items->links()}}
@endsection