@extends('layouts.app')
@section('title', '商品テーブル')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>商品テーブル</h2>
                <form action="{{ action('Admin\ProductController@update') }}" method="post" enctype="multipart/form-data">
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
                            <input type="text" class="form-control" name="product_name" value="{{ $product_form->product_name }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="price">値段</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" rows="20" value="{{ $product_form->price }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="category">カテゴリー</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="category" rows="20" value="{{ $product_form->category }}">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-md-2" for="image">画像</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image">
                            <div class="form-text text-info">
                                設定中: {{ $product_form->image_path }}
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" name="remove" value="true">画像を削除
                                </label>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-md-10">
                            <input type="hidden" name="id" value="{{ $product_form->id }}">
                            @csrf
                            <input type="submit" class="btn btn-primary" value="更新">
                        </div>
                    </div>
                </form>
                
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h5>編集履歴</h5>
                        <ul class="list-group">
                            @if ($product_form->histories != NULL)
                                @foreach ($product_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection