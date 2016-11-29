<?php
use App\User;
?>
@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="javascript:history.back(1)">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                Назад
            </a><br>
            </h1>
    </div>
    <h2 class="blog-post-title">{{$article->title}}</h2>
    <p class="blog-post-meta">Дата статьи: {{$article->updated_at}}</p>
    <p>
        <img src="{{$article->preview}}" style="max-width: 80%;"><br>
        <?=$article->content?>
    @if (Auth::guest())
    @elseif(in_array(Auth::user()->role,[User::ROLE_ADMINISTRATOR, User::ROLE_EDITOR]))
        <div style="float: right; display: block">
            <form method="POST" action="{{action('ArticlesController@destroy',['articles'=>$article->id])}}">
                <input type="hidden" name="_method" value="delete"/>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <h3><input type="submit" class="btn-lg btn-danger" value="Удалить"/>
                    &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
                    <a href="{{action('ArticlesController@edit',['articles'=>$article->id])}}">
                        Изменить&#160;<span class="glyphicon glyphicon-pencil" style="vertical-align: middle"></span>
                    </a><h3>
            </form>
        </div>
        @endif

    </p>
<br><br><br><br>
    <hr>
    <div class="comments" style="display:block;">
        <h2>Комментарии</h2>
        <table class="table" style="border: 0;">
            @foreach($comments as $comment)
                <tr style="border-bottom: 1px solid #ddd">
                <td>
                <h4>
                    {{$comment->author}} написал:<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$comment->content}}<br>
                    <small> в {{$comment->created_at}}<small>
                </h4>
                </td>
                </tr>
            @endforeach
        </table>
    </div>
    <hr>
    @if(!Auth::guest() & $article->comments_enable==1)
        @include('site.comment')
        @endif
    @if(Auth::guest())
        <h3>Чтобы добавлять комментарии <a href="/login">войдите</a> или <a href="/register">зарегистрируйтесь</a></h3>
    @endif

    @if($article->comments_enable==0)
        <h3>Автор не захотел, чтобы этот пост комментировали.</h3>
    @endif
@endsection
