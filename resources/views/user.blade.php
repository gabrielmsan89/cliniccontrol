<style>
    td {
        border: 1px solid black;
    }

</style>


<html>

<body>
    <x-menu />
    <h1>Usuários</h1>
    <a href="{{ url('/usuarios/cadastrar') }}"><input type="button" value="Criar usuário" class="button" /></a> <br>
    

    <table>
        <tr>
            <th>Nome</th>
            <th>CPF</th>
            <th>RG</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Dt de nascimento</th>
            <th>Especialidade</th>
            <th>Registro</th>
            <th>Subordinado a</th>
        </tr>

        @foreach ($usuarios as $usuario)
        <tr>
            <td>{{$usuario["name"]}}</td>
            <td>{{$usuario["cpf"]}}</td>
            <td>{{$usuario["rg"]}}</td>
            <td>{{$usuario["phone"]}}</td>
            <td>{{$usuario["email"]}}</td>
            <td>{{$usuario["birthday"]}}</td>
            <td>{{$usuario["especialidade"]}}</td>
            <td>{{$usuario["registro"]}}</td>
            <td>{{$usuario["chefe"]}}</td>
        </tr>
        @endforeach

    </table>
</body>

</html>