@extends('admin.main')
@section('content2')
    <script>

        $('document').ready(function()
        {
            $('.del').click(function()
            {
                parent=$(this).parent().parent();//получаем родителя нашего span. parent будет содержать объект tr (строку нашей таблицы)
                id=parent.children().first().html(); //id будет содержать id нашей категории, которое берется из первой ячейки строки
                confirm_var=confirm('Удалить категорию?');//запрашиваем подтверждение на удаление
                if (!confirm_var) return false;
                $.ajax({
                    url:'/adminzone/categories/'+id, //url куда мы мы передаем delete запрос
                    method: 'DELETE',
                    data: {'_token':"{{csrf_token()}}" }, //не забываем передавать токен, или будет ошибка.
                    success: function(msg)
                    {
                        parent.remove(); // удаляем строчку tr из таблицы
                        alert('Category '+msg+' destroy');
                    },
                    error: function(msg)
                    {
                        console.log(msg); // в консоле  отображаем информацию об ошибки, если они есть
                    }
                });
            });
        });
    </script>
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Категории</small></h1>
    </div>
    <table class="table" style="font-size: 20px">
        <tr>
            <td><h3>Название</h3></td>
            <td><h3>Действие</h3></td>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->title}}</td>
                <td>
                    @if (Auth::user()->role == 1)
                    <a href="{{action('CategoriesController@edit',['categories'=>$category->id])}}">
                        <span class="glyphicon glyphicon-pencil" style="vertical-align: middle"></span>
                        Изменить
                    </a>
                    @else
                        <span style="color: #b94a48">Недостаточно прав для совершения действий</span>
                    @endif
                </td>
            </tr>
            @endforeach

            </ul>
    </table>

@endsection