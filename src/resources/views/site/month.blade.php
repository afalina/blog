@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="javascript:history.back(1)">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Назад
            </a><br>
            <small>Статьи</small></h1>
    </div>
    <ul>
        @foreach ($articles as $article)
                <li style="font-size: 25px; margin-bottom: 2px;">
                    <a href="{{action('FrontController@show',['id'=>$article->id])}}">
                        <img width="40" height="40" src="{{$article->preview}}">
                        {{$article->title}}
                    </a>
                </li>
        @endforeach
    </ul>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection