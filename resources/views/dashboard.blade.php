<x-layout>
    <x-slot:title>Dashboard</x-slot:title>

    <h1>{{ request()->user()->name }}</h1>
</x-layout>
