@include('layouts.header')
@section('content')
    <h2 align="center">Коментарии</h2>
    <div class="row" align="center">
        @foreach($reviews as $review)
            <div class="col-md-4">
                <h2>{{$review->name}}</h2>
                <p>{{ $review->email }}</p>
                <p> {{$review->message}}
                <!--<p><a href="/reviews/{{$review->id}}/edit" class="btn btn-primary">Редактировать</a></p>
                <form action="/reviews/{{$review->id}}" method="post">
                    {{csrf_field()}}
                {!! method_field('delete') !!}
                        <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>-->

            </div>

        @endforeach
    </div>
    <footer>
        <div style="position:fixed; top:90%; left:5%">
            <p><a href="/reviews/create" class="btn btn-primary">Создать</a></p>
        </div>
        <div>
            <?php echo $reviews->render(); ?>
        </div>
    </footer>
@endsection