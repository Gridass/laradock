@extends('layouts.layout')

@section('content')

    <div class="container">
        <hr />
        <form class="form-horizontal" action="{{route('admin.articles.store')}}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}

            {{-- Form include --}}
            @include('admin.articles.partials.form')

            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>

@endsection