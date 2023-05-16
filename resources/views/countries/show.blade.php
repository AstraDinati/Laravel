<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    @foreach($countries as $country)
    <div>
        <h2>{{ $country->name }}: </h2>
        <ul>
        @foreach($country->cities as $cities)
            <li>{{ $cities->name }}</li>
        @endforeach
        </ul>
    </div>
    @endforeach

    @dump($country1)
    @dump($country2)
    @dump($country3)
</x-layoit>