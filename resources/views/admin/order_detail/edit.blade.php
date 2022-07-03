@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
<h1>商品詳細画面</h1>
<p><a href="{{ route('order_detail.index')}}">一覧画面</a></p>
 
@if ($message = Session::get('success'))
<p>{{ $message }}</p>
@endif
 
<form action="{{ route('order_detail.update',$order_detail->id)}}" method="POST">
    @csrf
    @method('PUT')
    <p>商品名<input type="text" name="product_name" value="{{ $order_detail->product_name }}"></p>
    <p>値段<input type="price" name="price" value="{{ $member->price }}"></p>
    <p>
        <select name="procudt_id">
            @foreach($procudts as $procudt)
            <option value="{{ $procudt->id }}" @if($procudt->id === $order_detail->procudt_id) selected='selected' @endif>{{ $procudt->name }}</option>
            @endforeach
        </select>
    </p>
    <input type="submit" value="編集する">
</form>
    </div>
@endsection