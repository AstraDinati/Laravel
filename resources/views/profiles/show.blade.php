<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    @dump($profile)
    @dump($profile->user->login)
    </x-layoit>