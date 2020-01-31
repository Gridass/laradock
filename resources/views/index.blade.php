@extends('layouts.layout')
@section('content')
    <h1 align="center"><b>Posts</b></h1>
    <div class="row" align="center">
        @foreach($articles as $article)
            <div class="col-md-4">
                <h2>{{$article->title}}</h2>
                <img src="/images/{{ $article->image }}"  width=100%" height="100%" >
                <p> {{$article->description_short}}</p>
                <p align="left"><a href="/posts/{{$article->id}}" class="btn btn-primary" >Далее...</a></p>
            </div>
        @endforeach
    </div>
    <p><a href="/description" class="btn btn-default">Отзывы</a></p>
    <div>
        <?php echo $articles->render(); ?>
    </div>
@endsection