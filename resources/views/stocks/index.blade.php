<x-layout title="Stocks">
    @foreach($stocks as $stock => $value)
        <li> {{ "$stock => R$ $value->price"}} </li>
    @endforeach
</x-layout>
