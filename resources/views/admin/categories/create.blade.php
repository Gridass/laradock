@extends('layouts.app')
<div class="container">
    <hr/>
    <form class="form-horizontal" action="{{route('admin.categories.store')}}" method="post">
        {{ csrf_field() }}

        {{-- Form include --}}
        @include('admin.categories.partials.form')

    </form>
</div>