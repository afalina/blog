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
    <table class="table" style="font-size: 25px">
        <tr>
            <td><b>Месяц</b></td>
            <td><b>Год</b></td>
            <td><b>Количество</b></td>
            <td><b>Ссылка</b></td>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td><a href="{{action('ArticlesController@month',['month'=>$article->month, 'year' => $article->year])}}">ссылка</a></td>
            </tr>
        @endforeach
    </table>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection