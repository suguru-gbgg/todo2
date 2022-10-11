@extends('layouts.app')

@section('content')

<input type="text" class="text">
<button type="submit" class="addtext">追加</button>
<form action="MainController" method="post">
@csrf
@foreach($texts as $text)
<ul class="parent">
    <li class="child">
        {{ $text->text }}
        <button type="button" class="delbtn">削除</button>
    </li>
</ul>
@endforeach
    <button type="submit">保存</button>
</form>

@endsection