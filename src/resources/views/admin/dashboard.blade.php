@extends('admin.main')

@section('content2')
    <div class="page-header">
        <h1>Администрирование</h1>
    </div>
    <table class="table" style="font-size: 20px">
        <tr>
            <td><h2>Статьи</h2></td>
            <td><h2>Категории</h2></td>
            <td><h2>Комментарии</h2></td>
            <td><h2>Страницы</h2></td>
        </tr>
        <tr>
            <td><a href="/adminzone/articles">Все статьи</a></td>
            <td><a href="/adminzone/categories">Все категории</a></td>
            <td><a href="/adminzone/comments">Все комментарии</a></td>
            <td><a href="/adminzone/users">Пользователи</a></td>
        </tr>
        <tr>
            <td><a href="/adminzone/articles/create">Добавить статью</a></td>
            <td>
                @if (Auth::user()->role == 1)
                    <a href="/adminzone/categories/create">Добавить категорию</a>
                @endif
            </td>
            <td>
                @if (Auth::user()->role == 1)
                    <a href="{{action('CommentsController@show')}}">Управление комментариями</a>
                @endif
            </td>
            <td></td>
        </tr>

    </table>
@endsection