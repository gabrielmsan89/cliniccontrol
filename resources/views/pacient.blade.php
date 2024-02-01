<x-layout>

    <h1 class="title">Pacientes</h1>
    <div style="text-align:right">
        <a href="{{ url('/pacientes/cadastrar') }}"><input type="button" value="Criar paciente" class="button is-primary" /></a>
    </div>

    <table class="table is-striped">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Dt de nascimento</th>
            <th>Nome do pai</th>
            <th>Nome da mãe</th>
            <th>Ações</th>
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
            <td>
                <a href="{{ url('/pagamentos/'.$paciente["name"])}}"><i class="large material-icons">attach_money</i></a>
            </td>
        </tr>
        @endforeach

    </table>
</x-layout>