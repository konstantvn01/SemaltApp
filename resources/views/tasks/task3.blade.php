@extends('layouts')
@section('content')
    <div class="container">

        <h5>3. ​Как получить первый элемент массива ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5] ​?</h5><br>


        <h4>Decision:</h4>

        <h5>Если массив существует - он в переменной.<br> Пусть переменная называется $arr, тогда первый элемента массива $arr[0]</h5><hr>

        <h5><?php echo 'Первый элемент массива :'." $arr[0];"?><br><br></h5>

        <ul class="collapsible popout">
            <li>
                <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>

                <div class="collapsible-body">
                    <h5>
                        public function <b>task3()</b>{<br><br>
                        $arr=array(2,3,56,65,56,44,34,45,3,5,35,345,3,5);<br><br>

                        return view('tasks.task3',compact('arr'));}

                    </h5><hr>
                    <h5>
                        echo 'Первый элемент массива :'." $arr[0];"
                    </h5>
                </div>
            </li>
        </ul>


        </div>



@endsection
