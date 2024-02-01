<x-layout>

<h1>Pagamentos</h1>

    <a href="{{ url('/pagamentos/'.$paciente["name"].'/novo')}}"><input type="button" value="Novo pagamento" class="button" /></a><br>    
    

    <table>
        <tr>
            <th>Nome</th>
            <th>Valor pago</th>
            <th>Data de pagamento</th>
            <th>Pago por</th>
        </tr>

        @foreach ($pagamentos as $pagamento)
        <tr>
            <td>{{$pagamento["pacient"]}}</td>
            <td>{{$pagamento["amount"]}}</td>
            <td>{{$pagamento["paid_at"]}}</td>
            <td>{{$pagamento["paid_by"]}}</td>
        </tr>
        @endforeach

    </table>

</x-layout>
