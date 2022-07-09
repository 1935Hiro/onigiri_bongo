@extends('layouts.front')

@section('content')
    <div class="container">
    @php 
        $count=1
    @endphp
    
    @foreach($posts as $post)
        @if ($count==1)
            <div class="row justify-content-center row-cols-1 row-cols-md-3 g-3">
        @endif
        <div class="col">
            <div class="card  h-80">
                    <div class="card-img-top">
                        @if ($post->image_path)
                            <img src="{{ asset('storage/image/' . $post->image_path) }}">
                        @endif
                    </div> 
                <form action="{{ action('Admin\OrderController@create') }}" method="post">
                    @csrf
                    <div class="card-body">
                        <div class="card-title">
                            <p class="body mx-auto">{{ \Str::limit($post->product_name, 100) }}</p>
                        </div>
                    
                        <p class="card-text">{{ \Str::limit($post->price, 100) }}</p>
                            <input type="submit" class="btn btn-primary" value="注文">
                    </div>
                </from>
            </div>
        </div>
        @php
            $count +=1
        @endphp
        
        @if ($count>3)
            @php
                $count=1
            @endphp
            </div>
        @endif
        
    @endforeach  
    
    </div>
@endsection