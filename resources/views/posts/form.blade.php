<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <a href="/post/add/">добавить пост</a>
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