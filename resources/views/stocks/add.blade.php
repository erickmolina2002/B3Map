<x-layout title="Add Stocks">
  <x-stocks.form :action="route('stocks.store')" :ticket="old('ticket')" :update="true"/>
</x-layout>
