<x-layout>

    <h1 class="title">Extrato</h1>

    <div style="text-align:right">
        <a href="{{ url('/extratos/getbypatient/'.$patient["name"].'/novo')}}"><input type="button" value="Novo pagamento" class="button is-primary" /></a><br>
    </div>

    <table class="table is-striped">
        <tr>
            <th>Nome</th>
            <th>Valor pago</th>
            <th>Data de pagamento</th>
            <th>Pago por</th>
        </tr>

        @foreach ($ledger_entries as $ledger_entry)
        <tr>
            <td>{{$ledger_entry["patient"]}}</td>
            <td>{{$ledger_entry["amount"]}}</td>
            <td>{{$ledger_entry["paid_at"]}}</td>
            <td>{{$ledger_entry["paid_by"]}}</td>
        </tr>
        @endforeach

    </table>

</x-layout>