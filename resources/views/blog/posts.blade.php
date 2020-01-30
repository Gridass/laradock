@extends('layouts.app')

@section('content')
    <div class="card-header">All posts:</div>

    <table>
        @foreach($data as $pst)
        <tr>
            <td>{{$pst->id}}</td>
            <td>{{$pst->title}}</td>
            <td>{{$pst->created_at}}</td>
        </tr>
        @endforeach
    </table>

@endsection
