@extends('admin.main')
@section('content2')

    <div class="page-header">
        <h1>
            <a href="javascript:history.back(1)">
                <span class="glyphicon glyphicon-menu-left" style="vertical-align: middle" aria-hidden="true"></span>
                Назад
            </a><br>
            <small>Галлерея</small></h1>
    </div>
    <?php
    $i = 0;
    ?>
        @foreach ($articles as $article)
            <?php if($i==0):?>
            <div class="row">
                <?php endif;?>
                <div class="col-xs-4 col-md-4">
                    <a href="{{action('FrontController@show',['id'=>$article->id])}}" class="thumbnail">
                        <img src="{{$article->preview}}" alt="">
                    </a>
                </div>

            <?php if($i==2):?>
            </div>
            <?php
            $i = 0;
            else:
                $i++;
            endif;?>

        @endforeach
    </div>

    @if(Session::has('message'))
        {{Session::get('message')}}
    @endif
@endsection