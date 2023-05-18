<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    {{ $timer }}
    <br>
    <a href="{{ route('index') }}">сбросить таймер</a>
</x-layoit>