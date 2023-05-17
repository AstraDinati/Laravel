<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    Оригинал: {{ $post }}
    <form action="" method="POST">
        @csrf
        Изменить пост: <textarea name="text"></textarea>
        <input type="submit" value="отправить в бд">
    </form>
    <a href="/form">назад к постам</a>
</x-layoit>