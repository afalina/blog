@extends('admin.main')

@section('content2')


    <div class="page-header">
        <h1>
            Личный блог<br>
            <small>Немного о моей жизни</small>
        </h1>
    </div>
    <table class="table" style="border:0; margin:0; padding: 0;">

        <tr>
            <td style="border-right: 1px solid #ddd;">
    <?php
    $i = 0;
    ?>
    @foreach($articles as $article)
        <?php if($i==0):?>
            <div class="row">
        <?php endif;?>
                <div class="col-sm-4 col-md-6">
                    <div class="thumbnail">
                        <img src="{{$article->preview}}">
                        <div class="caption">
                            <h3>
                                <a href="{{action('FrontController@show',['id'=>$article->id])}}">{{$article->title}}</a>
                            </h3>
                            <p class="blog-post-meta">Дата статьи: {{$article->updated_at}}</p>
                            <p>
                                <?=str_limit($article->content, 150) ?>
                                <p>
                                    <a class="btn btn-default" href="{{action('FrontController@show',['id'=>$article->id])}}" role="button">Читать дальше &raquo;</a>
                                </p>
                            </p>
                        </div>
                    </div>
                </div>
        <?php if($i==1):?>
            </div>
        <?php
            $i = 0;
        else:
            $i++;
        endif;?>

    @endforeach
        </td>
            <td style="width: 25%;">
                <h2>Категории:</h2>
        <div class="list-group" style="font-size: 17px;">
            <?php
            foreach($categories as $category):?>
            <a class="list-group-item" href="{{action('ArticlesController@category',['category' => $category->id])}}"><?=$category->title;?></a>
            <?php endforeach;?>
        </div>
            </td>
    </table>

@endsection