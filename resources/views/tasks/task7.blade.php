@extends('layouts')
@section('content')
    <div class="container">
        <h5>7. Чем отличается <b>require</b> от <b>include</b> ?</h5>
        <h4>Decision:</h4>
        <h5>Require и include отвечают за подключение файла в состав другого файла.<br><br>
            При отсутствии подключаемого файла - include выводит предупреждение, и <b>НЕ</b> останавливает работу скрипта.<br><br>
            Require в такой же ситуации аварийно завершает работу приложения.</h5><br>

    </div>
@endsection