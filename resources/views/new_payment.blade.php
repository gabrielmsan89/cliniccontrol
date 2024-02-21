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

    <h1 class="title">Novo Pagamento</h1>

    <form method="POST" action="{{ url('/extratos/') }}">
        @csrf

        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Nome do paciente</label>
                    <div class="control">
                        <select name="patient" id="patient">
                            <option value="{{$patient['name']}}">{{$patient['name']}}</option>
                        </select>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Valor</label>
                    <div class="control">
                        <input name="amount" type="text" />
                    </div>
                </div>
                <div class="field">
                    <label class="label">Pago por</label>
                    <div class="control">
                        <input name="paid_by" type="text" />
                    </div>
                </div>
                <div class="field">
                    <label class="label">CPF do pagador</label>
                    <div class="control">
                        <input name="paid_by_cpf" type="text" />
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" value="Salvar" class="button" /> <br>
    </form>
</x-layout>