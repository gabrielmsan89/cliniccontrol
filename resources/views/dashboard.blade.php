<x-layout>

    <div class="dashboard">
        <h1>Hello {{$name}}</h1>
        <div class="allboxes">
            <div class="consultas box">
                <h2>Consultas de hoje</h2>
                <ul>
                    @foreach ($consultas as $consulta)
                    <li>{{$consulta["patient"]}} | {{$consulta["nomeMedico"]}} | {{$consulta["horario"]}} | Dermatologia</li>
                    @endforeach
                </ul>
            </div>
            <div class="aniversariantes box">
                <h2>patients aniversariantes de hoje</h2>
                <ul>
                    @foreach ($aniversariantes as $aniversariante)
                    <li>{{$aniversariante["patient"]}} | {{$aniversariante["idade"]}}</li>
                    @endforeach
                </ul>
            </div>
            <div class="fila-de-espera box">
                <h2>Fila de espera</h2>
                <ul>
                    @foreach ($consultas as $consulta)
                    <li>{{$consulta["patient"]}} | {{$consulta["nomeMedico"]}} | Dermatologia</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-layout>
