@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Отредактировать категорию</small></h1>
    </div>
    <form method="POST" action="{{action('CategoriesController@update',['categories'=>$category->id])}}"/>
    Название категории<br>
    <input type="text" class="form-control" style="font-size: 20px" name="title" value="{{$category->title}}"/><br>
    <input type="hidden" name="_method" value="put"/>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="submit" class="btn-lg btn-primary" value="Сохранить">
    @if(Session::has('message'))
    {{Session::get('message')}}
    @endif
    </form>
@endsection