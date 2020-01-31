@extends('layouts.layout')
@section('content')
    <div class="row" align="center">
        @foreach($reviews as $review)
            <div class="col-md-4">
                <h2>{{$review->name}}</h2>
                <p>{{ $review->email }}</p>
                <p> {{$review->message}}
                <p><a href="/reviews/{{$review->id}}/edit" class="btn btn-primary btn-sm">Редактировать</a></p>
                <form action="/reviews/{{$review->id}}" method="post">
                    {{csrf_field()}}
                    {!! method_field('delete') !!}
                    <button type="submit" class="btn btn-danger btn-sm">Удалить</button>
                </form>

            </div>

        @endforeach
    </div>
    <br>
    <div style="position:fixed; top:89%; left:5%">
        <a href="{{route('admin.index')}}" class="button">Назад</a><br>
        <?php echo $reviews->render(); ?>
    </div>
@endsection