@extends('layouts.layout')
@section('content')

    <h2>Create a review</h2>

    <form action="/reviews" method="post">
        {{csrf_field()}}

        <div class="form-group">
            <label for="nema">Name</label>
            <input class="form-control" pattern="^[a-zA-Z]+$" type="text" name="name" id="name" required>
        </div>

        <div class="form-group">
            <label for="alias">email</label>
            <input class="form-control" type="text" name="email" id="email" required>
        </div>

        <div class="form-group">
            <label for="message">Text</label>
            <textarea class="form-control" pattern="^[A-Za-zА-Яа-яЁё\s]+$" type="text" name="message" id="message" required></textarea>
        </div>

        <div class="form-group" style="position:fixed; top:85%; left:6%">
            <button class="btn btn-primary" type="submit">Create</button>
        </div>
        <div class="form-group" style="position:fixed; top:85%; left:13%">
            <p><a href="{{(route('reviews.index'))}}" class="btn btn-primary pull-left"><i class="fa fa-plus-square-o"></i>Back</a><p/><br>
        </div>

    </form>


@endsection