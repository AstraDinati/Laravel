<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    @dump($role)
    @dump($role->users)
</x-layoit>