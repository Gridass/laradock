<form enctype="multipart/form-data" method="post">
    {{csrf_field()}}
    <label for="">Статус</label>
    <select class="form-control" name="published">
        @if (isset($article->id))
            <option value="0" @if ($article->published == 0) selected="" @endif>Не опубликовано</option>
            <option value="1" @if ($article->published == 1) selected="" @endif>Опубликовано</option>
        @else
            <option value="0">Не опубликовано</option>
            <option value="1">Опубликовано</option>
        @endif
    </select>

    <label for="">Заголовок</label>
    <input type="text" class="form-control" name="title" placeholder="Заголовок новости"
           value="{{$article->title ?? ""}}" required>

    <label for="">Slug (Уникальное значение)</label>
    <input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
           value="{{$article->slug ?? ""}}" readonly="">

    <label for="">Родительская категория</label>
    <select class="form-control" name="categories[]" multiple="">
        @include('admin.articles.partials.categories', ['categories' => $categories])
    </select>
    {{--
    {{Form::label('image','Загрузка изображения')}}
    {{Form::file('image')}}
    --}}

    <label for="">Краткое описание</label>
    <textarea class="form-control" id="description_short"
              name="description_short">{{$article->description_short ?? ""}}</textarea>

    <label for="">Полное описание</label>
    <textarea class="form-control" id="description" name="description">{{$article->description ?? ""}}</textarea>
    <input type="file" name="image">

<hr/>
<input class="btn btn-primary" type="submit" value="Сохранить">
</form>
{{--
@isset($path)
    <img class="img-fluid" src="{{asset('/storage/'. $path)}}">
@endisset--}}
