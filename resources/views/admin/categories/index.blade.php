@extends('layouts.app')

@section('content')

    <div class="container">
        <hr>
        <a href="{{route('admin.categories.create')}}" class="btn btn-primary pull-right"><i
                    class="fa fa-plus-square-o"></i> Создать категорию</a>
        <a href="{{route('admin.index')}}" class="btn btn-primary pull-left"><i class="fa fa-plus-square-o"></i>
            Назад</a>
        <table class="table table-striped">
            <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
            </thead>
            <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td>{{$category->title}}</td>
                    <td>{{$category->description}}</td>
                    <td class="text-right">
                        <form onsubmit=" if(confirm('Удалить?')){ return true } else { return false } "
                              action="{{ route('admin.categories.destroy', $category )}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{csrf_field() }}
                            <a class="btn btn-danger" href="{{route('admin.categories.edit', $category)}}">
                                Редактировать<i class="fa fa-edit"></i></a>
                            {{csrf_field()}}
                            {!! method_field('delete') !!}
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>

                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
            </tbody>
            <tfoot>
            <tr>
                <td colspan="3">
                    <ul class="pagination pull-right">
                        {{$categories->links()}}
                    </ul>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection