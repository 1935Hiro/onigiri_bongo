@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <h2>注文テーブル一覧</h2>
        </div>
        <div class="row">
            <p><a href="{{ route('order.create') }}">新規追加</a></p>
 
                @if ($message = Session::get('success'))
                <p>{{ $message }}</p>
                @endif
                 
                <table border="1">
                    <tr>
                        <th>商品名</th>
                        <th>金額</th>
                        <th>id</th>
                        <th>編集</th>
                    </tr>
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->product_name }}</td>
                        <td>{{ $order->price_total }}</td>
                        <td>{{ $order->product->product_id }}</td>
                        <th><a href="{{ route('order.edit',$order->id)}}">編集</a></th>
                    </tr>
                    @endforeach
                </table>
        </div>
    </div>
@endsection