@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>注文画面</h2>
                <p><a href="{{ route('order.index')}}">一覧画面</a></p>
                 
                <form action="{{ route('order.store')}}" method="POST">
                    @csrf
                    <p>商品名<input type="text" name="product_name" value="{{ old('product_name') }}"></p>
                    <p>値段<input type="number" name="price_total" value="{{ old('price_total') }}"></p>
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
        </div>
    </div>
@endsection