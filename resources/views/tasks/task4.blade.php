@extends('layouts')
@section('content')
    <div class="container">
        <h5>4. Как вычислить остаток от деления 10/3</h5><br>
        <h4>Decision:</h4>
        <h5>Нужно использовать оператор %, который сохраняет остаток от деления.</h5><br>
        <h5><?php  echo "10%3 = "."$rest"?></h5><br><br>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>
                <div class="collapsible-body">
                    <h4>Model</h4>
                    <h5>
                        public static function <b>task4()</b>{<br>
                        $a=10;<br>
                        $b=3;<br>
                        return $a%$b;
                        }
                    </h5><hr>
                    <h4>Controller</h4>
                    <h5>
                        public function <b>task4()</b>{<br><br>
                        $rest=Posts::task4();<br><br>
                        return view('tasks.task4', compact('rest'));
                        }</h5>
                </div>
            </li>

        </ul>



        </div>

@endsection