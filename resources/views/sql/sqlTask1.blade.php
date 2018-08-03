@extends('layouts')
@section('content')


<div class="container ">
    <h4 class="center">1. Сделать скрипты для подготовки базы данных(миграции)</h4><br>
<h5>Результат: При миграции создаются таблицы в базе данных</h5><br>
    <ul class="collapsible popout">
        <li>
            <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

            <div class="collapsible-body">
                <h4 >Table events</h4><h5>
                    public function up()<br><br>
                    {<br>
                    Schema::create('events', function (Blueprint $table) {<br><br>
                    $table->increments('id');<br><br>
                    $table->text('caption');<br><br>
                    });<br>
                    }
                </h5>
                <br>
                <h4 >Table bids</h4><h5>
                    public function up()<br><br>
                    {<br>
                    Schema::create('bids', function (Blueprint $table) {<br><br>
                    $table->increments('id');<br><br>
                    $table->integer('id_event')->unsigned();<br><br>
                    $table->text('name');<br><br>
                    $table->text('email');<br><br>
                    $table->integer('price');<br><br>
                    $table->foreign('id_event')->references('id')->on('events');

                    });
                    }</h5>
            </div>
        </li>
    </ul>

    </div>

@endsection