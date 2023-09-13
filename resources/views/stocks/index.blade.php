<x-layout title="Stocks">
    <table class="gridview">
        <thead>
        <tr>
            <th>Ticket</th>
            <th>Preço</th>
            <th>Quantidade</th>
            <th>Data</th>
            <th>Deletar</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($stocks as $stock)
            <tr>
                <td>{{ $stock->ticket }}</td>
                <td>{{ $stock->sum('price') }}</td>
                <td>{{ $stock->number }}</td>
                <td>{{ $stock->date }}</td>
                <form action="{{ route('stocks.destroy',$stock->id) }}" method="post">
                    @csrf
                    @method("DELETE")
                    <td><button class="btn btn-danger">X</button></td>
                </form>
            </tr>
        @endforeach
        </tbody>
    </table>

</x-layout>
