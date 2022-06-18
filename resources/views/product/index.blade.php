@extends('layouts.front')

@section('content')
    <div class="container">
        @if (!is_null($headline))
            <div class="row">
                <div class="posts col-md-8 mx-auto mt-3">
                    <div class="row">
                        <div class="text col-md-6">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <p class="body mx-auto">{{ \Str::limit($headline->product_name, 100) }}</p>
                                </div>
                                <div class="image">
                                    @if ($headline->image_path)
                                        <img src="{{ asset('storage/image/' . $headline->image_path) }}">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">{{ \Str::limit($headline->price, 100) }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
        <hr>

        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                <div class="title">
                                    {{ \Str::limit($post->product_name, 100) }}
                                </div>
                                <div class="body mt-3">
                                    {{ \Str::limit($post->price, 100) }}
                                </div>
                            </div>
                            <div class="image col-md-6 text-right mt-4">
                                @if ($post->image_path)
                                    <img src="{{ asset('storage/image/' . $post->image_path) }}">
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        
        <hr>
        
    </div>
@endsection