<style>
    td {
        border: 1px solid black;
    }

</style>


<html>

<body>
    <x-menu />
    <h1>Pacientes</h1>
    <a href="{{ url('/pacientes/cadastrar') }}"><input type="button" value="Criar paciente" class="button" /></a> <br>
    

    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Dt de nascimento</th>
            <th>Nome do pai</th>
            <th>Nome da mãe</th>
            <th>Pagamentos</th>
        </tr>

        @foreach ($pacientes as $paciente)
        <tr>
            <td>{{$paciente["name"]}}</td>
            <td>{{$paciente["cpf"]}}</td>
            <td>{{$paciente["phone"]}}</td>
            <td>{{$paciente["email"]}}</td>
            <td>{{$paciente["birthday"]}}</td>
            <td>{{$paciente["pai"]}}</td>
            <td>{{$paciente["mae"]}}</td>
            <td><a href="{{ url('/pagamentos/'.$paciente["name"])}}"><input type="button" value="Ver pagamentos" class="button" /></a><br></td>
        </tr>
        @endforeach

    </table>
</body>

</html>


