@extends('admin.main')

@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Создать статью</small></h1>
    </div>

    <form method="POST" action="{{action('ArticlesController@store')}}" enctype="multipart/form-data">
        <h4><span class="glyphicon glyphicon-upload" style="vertical-align: middle"></span>Превью:</h4>
        <input type="file" name="preview" required><br>

        <input type="text" class="form-control" width="100%" name="title" style="font-size: 20px; font-weight: bold" placeholder="Название статьи" required>
        <br>
        <textarea name="content" rows="10" style="width: 100%; padding: 20px;" required></textarea><br>
        <table class="table" style="border: 0">
            <tr>
                <td>
                    <h4>Категория:<br>
                        <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->title}}</option>
                                @endforeach
                            </select></h4>
                </td>
                <td>
                    <h4>Комментарии<br>
                        <select name="comments_enable" class="form-control">
                                <option value="1">Вкл</option>
                                <option value="0">Выкл</option>
                            </select></h4>
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
        <input type="text" class="form-control" name="meta_description">
        &nbsp;&nbsp;&nbsp;&nbsp;keywords:
        <input type="text" class="form-control" name="meta_keywords"><br>
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <br>
        <input type="submit" class="btn-lg btn-primary" value="Сохранить">
    </form>
@endsection