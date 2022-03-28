@extends('layouts.EC')

@section('title', 'sugizon')

@section('content')
<table>
            <tr>
                <td>{{$item->category}}</td>
                <td>{{$item->name}}</td>
            </tr>
</table>
@endsection