
<form method="POST">

    <h3><b>{{Auth::user()->name}}</b>, оставьте комментарий:</h3><br>
    <textarea name="content" id="content" class="form-control"></textarea><br>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="submit" class="btn-lg btn-primary" value="Отправить"/>
</form>

@if(Session::has('message'))
{{Session::get('message')}} <!-- здесь будем выводить сообщения об успешности добавления комментария -->
@endif