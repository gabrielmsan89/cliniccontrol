<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ url('/usuarios') }}">
        @csrf

        Nome:<input name="name" type="text" /><br>
        CPF:<input name="cpf" type="text" /><br>
        RG:<input name="rg" type="text" /><br>
        Especialidade:<input name="job_role" type="text" /><br>
        Registro:<input name="registry" type="text" /><br>
        Chefe :<select name="boss" id="boss">
            <option value="chefe-1">Chefe 1</option>
            <option value="chefe-2">Chefe 2</option>
            <option value="chefe-3">Chefe 3</option>
            <option value="chefe-4">Chefe 4</option>
        </select><br>
        Telefone:<input name="phone" type="text" /><br>
        E-mail:<input name="email" type="text" /><br>
        Data de nascimento:<input name="birthday" type="text" /><br>
        Endereço:<input name="adress" type="text" /><br>

        <input type="submit" value="Salvar" class="button" /> <br>
    </form>
</x-layout>