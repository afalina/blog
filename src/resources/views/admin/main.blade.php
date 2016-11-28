@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
    <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/tinymce/tinymce.min.js')}}"></script>
    <script>
        tinymce.init({
            plugins: "image",
            selector: '#editor',
            file_browser_callback : elFinderBrowser
        });
        function elFinderBrowser (field_name, url, type, win) {
            tinymce.activeEditor.windowManager.open({
                file: '/adminzone/elfinder/',// use an absolute path!
                title: 'elFinder 2.0',
                width: 900,
                height: 450,
                resizable: 'yes'
            }, {
                setUrl: function (url) {
                    win.document.getElementById(field_name).value = url;
                }
            });
            return false;
        }
    </script>
    <div class="jumbotron">
        <div class="container">
            <h1>Чудеса в решетове</h1>
            <p><b>И не только</b></p>
            <p>
                <br>Ветер осенний
                <br>Гонит облака в вышине.
                <br>Сквозь летучие клочья
                <br>Так ярок, так чист прольётся
                <br>Ослепительный лунный луч.
            </p>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div id="content">
                        @yield('content2')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection