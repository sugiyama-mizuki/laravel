
@extends('layouts.jissyu')

@section('title', 'Jissyu')

@section('menu_title')
Laravelについて
 @parent

@section('menu_content')
    <ul>
    <li>特徴</li>
    <li>バージョン</li>
</ul>
 @endsection

@section('content')
   <p>開発元：Taylor Otwell</p>
   <p>初版：2011年6月</p>
<p>プログラミング言語：PHP</p>
<p>対応OS：クロスプラットフォーム</p>
<p>公式サイト：laravel.com</p>
@endsection

@section('footer')
copyright 2020 東京情報クリエイター工学院専門学校
@endsection

}
