@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Пользователи</small></h1>
    </div>
    <table class="table" style="font-size: 25px">
        <tr>
            <td>id</td>
            <td><b>Логин</b></td>
            <td><b>Email</b></td>
            <td><b>Роль</b></td>
            <td><b>Действие</b></td>
            <td><b>Действие</b></td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                    <?php switch ($user->role) {
                        case 1: echo "Администратор"; break;
                        case 2: echo "Редактор"; break;
                        case 3: echo "Подписчик"; break;
                    }
                    ?>

                </td>
                <td>
                    @if (Auth::user()->role == 1)
                    <a href="{{action('UsersController@edit',['users'=>$user->id])}}">
                        <span class="glyphicon glyphicon-pencil" style="vertical-align: middle">
                            Изменить
                        </span>
                    </a>
                    @else
                        <span style="color: #b94a48">Нет56 прав</span>
                    @endif
                </td>
                <td>
                    @if (Auth::user()->role == 1)
                    <form method="POST" action="{{action('UsersController@destroy',['users'=>$user->id])}}">
                        <input type="hidden" name="_method" value="delete"/>
                        <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                        <input type="submit" class="btn btn-default" value="Удалить"/>
                    </form>
                    @else
                        <span style="color: #b94a48">Нет прав</span>
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection