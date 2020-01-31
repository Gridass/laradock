@extends('layouts.layout')
@section('content')
    <h2>Edit a review</h2>

    <form action="/reviews/{{$review->id}}" method="post">
        {{csrf_field()}}
        {!! method_field('patch') !!}
        <div class="form-group">
            <label for="title">Name</label>
            <input class="form-control" pattern="^[a-zA-Z]+$" type="text" name="name" id="name" required value="{{$review->name}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" id="email" required value="{{$review->email}}">
        </div>

        <div class="form-group">
            <label for="message">Text</label>
            <textarea class="form-control" type="text" name="message" id="message" required>{{$review->message}}</textarea>
        </div>

        <div class="form-group" style="position:fixed; top:83%; left:5%">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
        @include('layouts.errors')
    </form>


@endsection