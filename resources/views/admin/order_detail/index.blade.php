@extends('layouts.front')

@section('content')
    <div class="container">
        <div class="row">
            <h2>注文詳細テーブル一覧</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <a href="{{ action('Admin\Order_detialController@add') }}" role="button" class="btn btn-primary">新規作成</a>
            </div>
            <div class="col-md-8">
                <form action="{{ action('Admin\Order_detialController@index') }}" method="get">
                    <div class="form-group row">
                        <label class="col-md-2">絞り込み検索</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="cond_title" value={{ $cond_title }}>
                        </div>
                        <div class="col-md-2">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="検索">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="admin-news col-md-12 mx-auto">
                <div class="row">
                        <table class="table table-white">
                        <thead>
                            <tr>
                                <th width="20%">顧客ID</th>
                                <th width="20%">予約日時</th>
                                <th width="20%">合計金額</th>
                                <th width="20%">受け取り名</th>
                                <th width="10%">操作</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $order)
                                <tr>
                                    <th>{{ $order->user_id }}</th>
                                    <td>{{ \Str::limit($order->reserve) }}</td>
                                    <td>{{ \Str::limit($order->price_total) }}</td>
                                    <td>{{ \Str::limit($order->recipient_name) }}</td>
                                    <td>
                                        <div>
                                            <a href="{{ action('Admin\Order_detialController@edit', ['id' => $order->id]) }}">編集</a>
                                        </div>
                                        
                                        <div>
                                            <a href="{{ action('Admin\Order_detialController@delete', ['id' => $order->id]) }}">削除</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection