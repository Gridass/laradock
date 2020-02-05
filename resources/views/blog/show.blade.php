@extends('layouts.layout')

@section('content')
    <div class="row"  >
        <div class="col-sm-12 blog-main">
            <div class="blog-post ">

                <h2 class="blog-post-title" align="center">{{$article->title}}</h2>
                <p><img src="/images/{{ $article->image }}" width="100%"></p>
                <div style="word-wrap: break-word"><font size="4">{{$article->description}}</font></div>
            </div>
        </div>
    </div>

@endsection