@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Комментарии</small></h1>
    </div>
    <table class="table">
        <tr>
            <td>Статья</td>
            <td>Автор</td>
            <td>Email</td>
            <td>Комментарий</td>
            <td>Дата</td>
            <td>Статус</td>
            <td>Действие</td>
        </tr>
        @foreach($comments as $comment)
            <tr>
                <td>{{$comment->article}}</td>
                <td>{{$comment->author}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->content}}</td>
                <td>{{$comment->created_at}}</td>
                <td>{{$comment->public}}</td>
                <td><a href="{{action('CommentsController@delete',['id'=>$comment->id])}}">Удалить</a>
                    <a href="{{action('CommentsController@published',['id'=>$comment->id])}}">Опубликовать</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection