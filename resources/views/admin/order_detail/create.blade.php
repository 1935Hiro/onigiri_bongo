@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
<h1>商品詳細画面</h1>
<p><a href="{{ route('order_detail.index')}}">一覧画面</a></p>
 
<form action="{{ route('order_detail.store')}}" method="POST">
    @csrf
    <p>商品名<input type="text" name="product_name" value="{{ old('product_name') }}"></p>
    <p>値段<input type=“price” name=“price” value="{{ old('price') }}"></p>
    <p>
        <select name="product_id">
            @foreach($products as $product)
            <option value="{{ $product->id }}">{{ $product->product_name }}</option>
            @endforeach
        </select>
    </p>
    <input type="submit" value="登録する">
</form>
    </div>
@endsection