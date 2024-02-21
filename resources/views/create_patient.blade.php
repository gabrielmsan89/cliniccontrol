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
    <h1 class="title">Cadastrar patient</h1>

    <form method="POST" action="{{ url('/pacientes') }}">
        @csrf
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Nome" name="name">
                    </div>
                </div>

                <div class="field">
                    <label class="label">CPF</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="CPF" name="cpf" id="cpf">
                    </div>
                </div>

                <div class="field">
                    <label class="label">RG</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="RG" name="rg">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome do pai</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Nome do pai" name="father_name">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Nome da mãe</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Nome da mãe" name="mother_name">
                    </div>
                </div>

                <div class="field">
                    <label class="label">CPF do pai</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="CPF do pai" name="father_cpf">
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">CPF da mãe</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="CPF da mãe" name="mother_cpf">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Telefone</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Telefone" name="phone">
                    </div>
                </div>

                <div class="field">
                    <label class="label">E-mail</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="E-mail" name="email">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Data de nascimento</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Data de nascimento" name="birthday">
                    </div>
                </div>

                <div class="field">
                    <label class="label">Endereço</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Endereço" name="address">
                    </div>
                </div>

                <br><input type="submit" value="Salvar" class="button" />
            </div>

        </div>
    </form>

</x-layout>