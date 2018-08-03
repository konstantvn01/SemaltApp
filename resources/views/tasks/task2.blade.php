@extends('layouts')
@section('content')
    <div class="container" id="try">
        <h5>2. Реализовать алгоритм извлечения числовых значений со строки:
            This server has 386 GB RAM and 5000 GB storage</h5><br>


            <h4>Decision:</h4>
            <h5>
        <?php
        $count_of_values=count($newstring[0]);
        for ($i=0; $i <$count_of_values ; $i++) {
            echo "Value - ".$newstring[0][$i]." GB<br>";
            }
        ?></h5><br><br>


            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

                    <div class="collapsible-body"><h5>
                            public function <b>task2()</b>{<br><br>

                            $string="This server has 386 GB RAM and 5000 GB storage";<br><br>

                            preg_match_all('!\d+!', $string, $newstring);<br><br>

                            return view('tasks.task2',compact('newstring'));
                            }</h5>
                            <hr>
                            <h5>
                            $count_of_values=count($newstring[0]);<br><br>
                            for ($i=0; $i <$count_of_values ; $i++) {<br><br>
                            echo "Value - ".$newstring[0][$i]." GB<br>";
                            }
                            ?>
                        </h5></div>
                </li>
            </ul>


    </div>

@endsection


