@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Добавить категорию</small></h1>
    </div>
    <form method="POST" action="{{action('CategoriesController@store')}}"/>
        <div class="input-group">
            <input type="text" name="title" class="form-control" style="font-size: 20px;" placeholder="Название категории">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
            <span class="input-group-btn">
                <input class="btn btn-primary" type="submit" value="Добавить новую категорию">
            </span>
        </div>
    <div style="font-size: 20px;">
        <br>
        @if(Session::has('message'))
            {{Session::get('message')}}
        @endif
    </div>
    </form>
@endsection