<x-layout title="Stocks">
    <a href="/stocks/add">Add</a>
    @foreach($stocks as $stock => $value)
        <li> {{ "$stock => R$ $value"}} </li>
    @endforeach
</x-layout>
