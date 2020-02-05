<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Admin</title>

</head>
<body>
<div class="navbar">
    <div class="row">
        <div class="column column-30">
            <div class="user-section"><a href="#">
                    <div class="username">
                        <h4>John Dou</h4>
                        <p>Administrator</p>
                    </div>
                </a></div>
        </div>
    </div>
</div>
<div class="row">
    <div id="sidebar" class="column">
        <h5>Navigation</h5>
        <ul>
            <li><a href="/"><em class="fa fa-home"></em>Blog</a></li>
            <li><a href="/reviews"><em class="fa fa-bar-chart"></em> Reviews</a></li>
        </ul>
    </div>
    <section id="main-content" class="column column-offset-20">
        <!--Buttons-->
        <h5 class="mt-2">Menu</h5><a class="anchor" name="buttons"></a>
        <div class="row grid-responsive">
            <div class="column">
                <!-- Default Button -->
                <a class="button" href="{{route('admin.categories.create')}}">Создать категорию</a>
                <a class="button" href="{{route('admin.categories.index')}}">Список категорий</a>
                <a class="button" href="{{route('admin.articles.create')}}">Создать пост</a>
                <a class="button" href="{{route('admin.articles.index')}}">Список постов</a>
                <a class="button" href="{{route('admin.reviews.index')}}">Отзывы</a>

            </div>
        </div>
    </section>
</div>
</body>
</html>
{{--@extends('layouts.layout')--}}

{{--@section('content')--}}

{{--<div class="container">--}}
{{--<div class="row">--}}
{{--<div class="col-sm-6">--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Создать категорию</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.category.index')}}">Список категорий</a>--}}
{{--</div>--}}
{{--<div class="col-sm-6">--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Создать пост</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.article.index')}}">Список постов</a>--}}
{{--<a class="btn btn-block btn-default" href="{{route('admin.reviews.index')}}">Отзывы</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--@endsection--}}