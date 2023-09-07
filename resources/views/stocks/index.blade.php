<x-layout title="Stocks">
    <a href="{{ route('stocks.index') }}">Add</a>
    @foreach($stocks as $stock => $value)
        <li> {{ "$stock => R$ $value"}} </li>
    @endforeach
</x-layout>
