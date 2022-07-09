@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>注文テーブル</h2>
                <p><a href="{{ route('order.index')}}">一覧画面</a></p>
 
                    @if ($message = Session::get('success'))
                    <p>{{ $message }}</p>
                    @endif
                     
                    <form action="{{ route('order.update',$order->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <p>商品名<input type="text" name="product_name" value="{{ $member->product_name }}"></p>
                        <p>値段<input type="number" name="price" value="{{ $member->price_total}}"></p>
                        <p>
                            <select name="product_id">
                                @foreach($products as $product)
                                <option value="{{ $product->id }}" @if($product->id === $order->product_id) selected='selected' @endif>{{ $product->name }}</option>
                                @endforeach
                            </select>
                        </p>
                        <input type="submit" value="編集する">
                    </form>
            </div>
        </div>
    </div>
@endsection