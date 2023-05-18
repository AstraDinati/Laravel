<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <a href="/post/add/">добавить пост</a>
    <x-test :count="$paginate"  class="my-10">
        <x-slot name="header" class="my-10">
            I'm header
        </x-slot>

            Количество объектов на странице:
        
        <x-slot name="footer">
            I'm footer
        </x-slot>
    </x-test> 
    <br>
    <a href="{{ route('index') }}">сессия</a><br>
    <a href="{{ route('counter') }}">счетчик</a><br>
    <a href="{{ route('timer') }}">таймер</a><br>

    <a href="{{ route('circ1') }}">установить</a><br>
    <a href="{{ route('circ2') }}">вывести и удалить</a><br>
    <a href="{{ route('circ3') }}">удалить все данные из сессии</a><br>
    <a href="{{ route('circ4') }}">вывести все данные из сессии</a>
    <x-alert type="error" message="text" /> 
    <br>
    <table>
        <tr>
            <th>id</th>
            <th>text</th>
            <th>delete</th>
            <th>update</th>
        </tr>
        @foreach($paginate as $post)
        <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->text }}</td>
            <td>
                <a href="{{ route('delete', ['id' => $post->id, 'page' => $paginate->currentPage()]) }}">Удалить</a>
            </td>
            <td>
                <a href="{{ route('update', ['id' => $post->id, 'page' => $paginate->currentPage()]) }}">Изменить</a>
            </td>
        </tr>
        @endforeach
    </table>
    {{ $paginate->links() }}
</x-layoit>