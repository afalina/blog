@extends('admin.main')
@section('content2')
    <div class="page-header">
        <h1>
            <a href="javascript:history.back(1)">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Назад
            </a><br>
            <small>Архив</small></h1>
    </div>
    <table class="table" style="font-size: 25px">
        <tr>
            <td><b>Год</b></td>
            <td><b>Месяц</b></td>
            <td><b>Статей</b></td>
            <td><b>Просмотреть статьи</b></td>
        </tr>
        @foreach ($articles as $article)
            <tr>
                <td>{{$article->year}}</td>
                <td>
                    <?php
                    switch ($article->month) {
                        case 12: echo 'Декабрь'; break;
                        case 1:  echo 'Январь';  break;
                        case 2:  echo 'Февраль'; break;
                        case 3:  echo 'Март';    break;
                        case 4:  echo 'Апрель';  break;
                        case 5:  echo 'Май';     break;
                        case 6:  echo 'Июнь';    break;
                        case 7:  echo 'Июль';    break;
                        case 8:  echo 'Август';  break;
                        case 9:  echo 'Сентябрь';break;
                        case 10: echo 'Октябрь'; break;
                        case 11: echo 'Ноябрь';  break;
                    };
                    ?>

                </td>
                <td>{{$article->count}}</td>
                <td><a href="{{action('ArticlesController@month',['month'=>$article->month, 'year' => $article->year])}}">Перейти<span class="glyphicon glyphicon-menu-right"></a></td>
            </tr>
        @endforeach
    </table>
    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection