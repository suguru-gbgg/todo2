@extends('layouts.app')

@section('content')

<input type="text" class="text">
<button type="submit" class="addtext">追加</button>
<form action="MainController" method="post">
@csrf
<?php $list = 0; ?>
    <ul class="parent">
        @foreach($texts as $text)
            <li class="child">
                {{ $text->text }}
                <input type="hidden" value="{{ $text->text }}" name="htext{{ $list }}" class="name">
                <input type="hidden" value="{{ $list }}" class="list" name='list'>
                <button type="button" class="delbtn">削除</button>
            </li>
            <?php $list++ ?>
        @endforeach
    </ul>
    <button type="submit">保存</button>
</form>

@endsection