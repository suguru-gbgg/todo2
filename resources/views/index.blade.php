@extends('layouts.app')

@section('content')

<input type="text" class="text">
<button type="submit" class="addtext">追加</button>
<form action="MainController" method="post">
@csrf
<ul class="ultext">
@foreach($texts as $text)
    <li class="del_li">
        {{ $text->text }}
        <input type="text" value="{{ $text->id }}">
        <button type="submit" class="deltext">削除</button>
    </li>
@endforeach
</ul>
    <button type="submit">保存</button>
</form>

@endsection