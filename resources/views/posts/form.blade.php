<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    id: {{ $id }} <br>
    login: {{ $login }}
    @if(isset($data))
    <ul>
        @foreach($data as $keys => $index)
        <li>{{ $keys }} - {{ $index }}</li>
        @endforeach
    </ul>
    @endif
    <form action="" method="POST">
        @csrf
        Имя: <input name="name">
        <br>
        Фамилия: <input name="surname">
        <br>
        Зарплата: <input name="salary">
        <br>
        <input type="submit">
    </form>
</x-layoit>