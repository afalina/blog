@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="javascript:history.back(1)">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                Назад
            </a><br>
            <small>Отредактировать статью</small></h1>
    </div>

    <form method="POST" action="{{action('ArticlesController@update',['articles'=>$article->id])}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        <h4><span class="glyphicon glyphicon-upload"></span>Превью:</h4>
        @if(!empty($article->preview))
            <img src="{{$article->preview}}" style="max-width: 80%;">
        @endif
        <input type="file" name="preview"><br>

        <input type="text" class="form-control" width="100%" name="title" style="font-size: 20px; font-weight: bold" value="{{$article->title}}" required>

        <br>
        <textarea name="content" rows="10" style="width: 100%; padding: 20px;" required>{{$article->content}}</textarea><br>



        <table class="table" style="border: 0">
            <tr>
                <td>
                    <h4>Категория:<br>
                        <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    @if($article->category_id==$category->id)
                                        <option value="{{$category->id}}" selected>{{$category->title}}</option>
                                    @else
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endif
                                @endforeach
                            </h4>
                </td>
                <td>
                    <h4>Комментарии<br>
                        <select name="comments_enable" class="form-control">
                                <option value="1">Вкл</option>
                                <option value="0">Выкл</option>
                            </small></h4>
                </td>
                <td>
                    <h4>Опубликовать?<br>
                        <select name="public" class="form-control">
                                <option value="1">Да</option>
                                <option value="0">Нет</option>
                            </select></h4>
                </td>
            </tr>
        </table>


        <h4>Мета</h4>
        description:
        <input type="text" name="meta_description" class="form-control" value="{{$article->meta_description}}">
        &nbsp;&nbsp;&nbsp;&nbsp;keywords:
        <input type="text" name="meta_keywords" class="form-control" value="{{$article->meta_keywords}}"><br>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <input type="submit" class="btn-lg btn-primary" value="Сохранить">

    </form>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection