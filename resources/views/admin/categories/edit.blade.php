@extends('layouts.layout')

@section('content')

    <div class="container">
        <hr />
        <form class="form-horizontal" action="{{route('admin.categories.update', $category)}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="put">
            {{-- Form include --}}
            @include('admin.categories.partials.form')

        </form>
    </div>

@endsection