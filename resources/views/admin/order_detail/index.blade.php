@extends('layouts.front')

@section('content')
    <div class="container">
            <h1>商品詳細画面</h1>
    <p><a href="{{ route('order_detail.create') }}">新規追加</a></p>
 
    <table border="1">
    <tr>
        <th>product_name</th>
        <th>price</th>
        <th>image_path</th>
        <th>編集</th>
    </tr>
    @foreach ($members as $member)
    <tr>
        <td>{{ $order_detail->product_name }}</td>
        <td>{{ $order_detail->price }}</td>
        <td>{{ $order_detail->image_path}}</td>
        <th><a href="{{ route('order_detail.edit',$order_detail->id)}}">編集</a></th>
    </tr>
    @endforeach
    </table>
    </div>
@endsection