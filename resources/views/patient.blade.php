<x-layout>

    <h1 class="title">patients</h1>
    <div style="text-align:right">
        <a href="{{ url('/pacientes/cadastrar') }}"><input type="button" value="Criar patient" class="button is-primary" /></a>
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
        
        @foreach ($patients as $patient)
        <tr>
            <td>{{$patient["name"]}}</td>
            <td>{{$patient["cpf"]}}</td>
            <td>{{$patient["phone"]}}</td>
            <td>{{$patient["email"]}}</td>
            <td>{{$patient["birthday"]}}</td>
            <td>{{$patient["pai"]}}</td>
            <td>{{$patient["mae"]}}</td>
            <td>
                <a href="{{ url('/extratos/getbypatient/'.$patient["name"])}}"><i class="large material-icons">attach_money</i></a>
            </td>
        </tr>
        @endforeach

    </table>
</x-layout>