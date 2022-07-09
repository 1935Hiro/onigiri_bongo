@extends('layouts.front')

@section('content')
    <div class="container">
        
@foreach($posts as $post)
        <div class="row justify-content-center row-cols-1 row-cols-md-3 g-3">
        <div class="col">
            <div class="card  h-80">
                    <div class="card-img-top">
                        @if ($post->image_path)
                            <img src="{{ asset('storage/image/' . $post->image_path) }}">
                        @endif
                    </div> 
                    
                    <div class="card-body">
                        <div class="col-md-4 col-form-label">
                            <p class="body mx-auto">{{ \Str::limit($post->product_name, 100) }}</p>
                        </div>
                        
                        <p class="card-text">{{ \Str::limit($post->price, 100) }}</p>
                        
                        <p class="card-text">{{ \Str::limit($post->option, 100) }}</p>
                        
                        <p class="card-text">{{ \Str::limit($post->order, 100) }}</p>
                        
                        <a class="btn btn-primary">購入</a>
                    </div>
            </div>
        </div>
@endforeach  

    
    </div>
@endsection