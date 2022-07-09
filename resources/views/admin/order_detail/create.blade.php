@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>注文詳細テーブル</h2>
                <form action="{{ action('Admin\Order_detailController@create') }}" method="post" enctype="multipart/form-data">


                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="reserve">予約日時</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="reserve" value="{{ old('reserve') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="price_total">合計金額</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price_total" rows="20" value="{{ old('price_total') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="recipient_name">受け取り名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="recipient_name" rows="20" value="{{ old('recipient_name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="token">トークン</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="token" rows="20" value="{{ old('token') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection