@extends('layouts')
@section('content')
    <style>#text-code{opacity:0;}</style>

    <div class="container">
        <h5>
        1. Написать алгоритм решения задачи:
        В классе 28 учеников. 75% из них занимаются спортом. Сколько учеников в классе
        занимаются спортом и сколько всего учеников в классе?</h5><br>
        <h4>Decision:</h4>
        <?php
        echo "<h5>Студентов в классе - $array[0]"."<br> Спортивные студенты - $array[1]</h5><br><br>";
        ?>
        <div id="code">


                <ul class="collapsible popout">
                    <li>
                        <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>
                        <div class="collapsible-body"><h5>
                                public function <b>task1()</b>{<br><br>
                                $student=28;<br><br>
                                $sport_student=$student*(0.75);<br><br>
                                $array=array($student,$sport_student);<br><br>
                                return view('tasks.task1', compact('array'));}<br><br>
                                echo "Студентов в классе - $array[0]"."<br> Спортивные студенты - $array[1];"<br><br></h5></div>

                    </li>

                </ul>

            </div>

        </div>



    @endsection