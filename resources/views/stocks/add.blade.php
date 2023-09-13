<x-layout title="Add Stocks">
    <form action="{{ route('stocks.store') }}" method="post" >
        @csrf
        <label for="ticket">Ticket:</label>
        <input type="text" id="ticket" name="ticket">

        <label for="price">Valor:</label>
        <input type="text" id="price" name="price">

        <label for="number">Quantidade:</label>
        <input type="number" id="number" name="number">

        <label for="date">Data:</label>
        <input type="date" id="date" name="date">

        <button class="btn-info" type="submit">enviar</button>
    </form>
</x-layout>
