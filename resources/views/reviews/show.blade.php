@extends('layouts.layout')

@section('content')
    <div class="row" align="center">

        <div class="col-sm-12 blog-main">
            <div class="blog-post" >

                <p class="blog-post-title">{{$review->name}}</p>
                <p>{{$review->email}}</p>
                <p>{{$review->message }}</p>
            </div>
        </div>
    </div>
@endsection