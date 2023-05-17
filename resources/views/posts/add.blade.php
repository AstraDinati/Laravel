<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <form action="" method="POST">
        @csrf
        Текст поста: <textarea name="text"></textarea>
        <input type="submit" value="отправить в бд">
    </form>
    <a href="/form">посмотреть все посты</a>
    </x-layoit>