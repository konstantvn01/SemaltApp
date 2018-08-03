@extends('layouts')
@section('content')
    <script type="text/javascript" src="{{asset('js/swap.js')}}"></script>
    <div class="container">
        <h5>5. Нужно поменять 2 переменные местами без использования третьей:<br>
            $а = [1,2,3,4,5];<br>
            $b = ‘Hello world’;</h5><br>
        <h4>Decision:</h4>


        <h5><script type="text/javascript">document.write("<h5>Variable a ="+a+"<br><br>Variable b ="+b+"</h5><br>");</script></h5>
        <div>

            <ul class="collapsible popout">
                <li>
                    <div class="collapsible-header hoverable"><h4 style="font-weight: normal"><i class="material-icons" style="font-size: 25px">view_column</i>VIEW CODE</h4></div>
                    <div class="collapsible-body">
                        <h4>JavaScript</h4>
                        <h5>
                            let a = [1,2,3,4,5], b = 'Hello world';<br><br>
                            [a, b] = [b, a];

                        </h5>
                    </div>
                </li>

            </ul>
        </div>

    </div>

@endsection