@extends('layouts.helloapp')
@section('title', 'PersonAdd')
@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
    <form action="/hello/add" method="post">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name"></td></tr>
            <th>mail: </th><td><input type="text" name="mail"></td></tr>
            <th>age: </th><td><input type="text" name="age"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection