<?php
use App\User;
?>

@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="/adminzone">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Администрирование
            </a><br>
            <small>Отредактировать статью</small></h1>
    </div>

    <form method="POST" action="{{action('UsersController@update',['user'=>$user->id])}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        <table class="table" style="font-size: 25px">
            <tr>
                <td>id</td>
                <td><b>Логин</b></td>
                <td><b>Email</b></td>
                <td><b>Роль</b></td>
            </tr>
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>
                   <select name="role">
                       <option value="<?=User::ROLE_ADMINISTRATOR?>" <?php if($user->role == User::ROLE_ADMINISTRATOR) {echo 'selected="selected"';}?>>Администратор</option>
                       <option value="<?=User::ROLE_EDITOR;?>" <?php if($user->role == User::ROLE_EDITOR) {echo 'selected="selected"';}?>>Редактор</option>
                       <option value="<?=User::ROLE_SUBSCRIBER;?>" <?php if($user->role == User::ROLE_SUBSCRIBER) {echo 'selected="selected"';}?>>Подписчик</option>
                   </select>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <input type="submit" class="btn-lg btn-primary" value="Сохранить">
                </td>
            </tr>
        </table>
    </form>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection