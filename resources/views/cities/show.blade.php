<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>

    @foreach($cities as $city)
    @dump($city)
    @dump($city->country)
    @endforeach
</x-layoit>