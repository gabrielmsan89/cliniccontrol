<html>

<body>
    <x-menu />
    <h1>Novo Pagamento</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form method="POST" action="{{ url('/pagamentos') }}">
        @csrf

        Nome do paciente: <select name="pacient" id="pacient">
            <option value="pacient-name">{{$paciente["name"]}}</option>
        </select><br>
        Valor:<input name="amount" type="text" /><br>
        Data do pagamento:<input name="paid_at" type="text" /><br>
        Faturado em nome de:<select name="paid_by" id="pacient">
        <option value="pacient-1">{{$paciente["name"]}}</option>
            <option value="pacient-father-1">{{$paciente["pai"]}}</option>
            <option value="pacient-mother-1">{{$paciente["mae"]}}</option>
        </select><br>
        <input type="submit" value="Salvar" class="button" /> <br>
    </form>
</body>

</html>

