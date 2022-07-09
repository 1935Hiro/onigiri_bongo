@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>商品テーブル</h2>
                <form action="{{ action('Admin\ProductController@create') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="product_name">商品名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="price">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" rows="20" value="{{ old('price') }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="category">カテゴリー</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" rows="20" value="{{ old('category') }}">
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