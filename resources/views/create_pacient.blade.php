<html>

<body>
    <x-menu />
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ url('/pacientes') }}">
        @csrf

        Nome:<input name="name" type="text" /><br>
        CPF:<input name="cpf" type="text" /><br>
        RG:<input name="rg" type="text" /><br>
        Nome do pai:<input name="father_name" type="text" /><br>
        Nome da mãe:<input name="mother_name" type="text" /><br>
        CPF do pai:<input name="father_cpf" type="text" /><br>
        CPF da mãe :<input name="mother_cpf" type="text" /><br>
        Telefone:<input name="phone" type="text" /><br>
        E-mail:<input name="email" type="text" /><br>
        Data de nascimento:<input name="birthday" type="text" /><br>
        Endereço:<input name="adress" type="text" /><br>

        <input type="submit" value="Salvar" class="button" /> <br>
    </form>
</body>

</html>