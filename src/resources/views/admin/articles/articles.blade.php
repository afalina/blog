@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Статьи</small></h1>
    </div>
    <table class="table" style="font-size: 20px">
        <tr>
            <td>id</td>
            <td><b>Превью</b></td>
            <td><b>Название</b></td>
            <td><b>Действие</b></td>
            <td><b>Действие</b></td>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->id}}</td>
                <td><img width=40 height=40 src="{{$article->preview}}"></td>
                <td><a href="{{action('FrontController@show',['id'=>$article->id])}}">
                        {{$article->title}}
                    </a></td>
                <td><a href="{{action('ArticlesController@edit',['articles'=>$article->id])}}">
                        <span class="glyphicon glyphicon-pencil"></span>Изменить

                    </a></td>
                <td>
                    <form method="POST" action="{{action('ArticlesController@destroy',['articles'=>$article->id])}}">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" class="btn btn-danger" value="Удалить"/>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection