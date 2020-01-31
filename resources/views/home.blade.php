@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Вы прошли авторизацию</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <br>
                        <a href="/" class="btn btn-default">Перейти к новостям</a></p>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
