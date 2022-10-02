@extends('layouts.app')

@section('content')

<input type="text" class="text">
<button type="submit" class="addtext">追加</button>
<form action="MainController" method="post">
@csrf
    <ul class="ultext"></ul>
    <button type="submit">保存</button>
</form>

@endsection