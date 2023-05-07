<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>salary</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->age }}</td>
            <td>{{ $user->salary }}</td>
            <td>{{ $user->created_at }}</td>
            <td>{{ $user->updated_at }}</td>
        </tr>
        @endforeach
    </table>
    @dump($example)
    @dump($example1)
    @dump($example2)
    @dump($example3)
    @dump($example4)
    <p>{{ $example5->name }}</p>
    <p>{{ $example5->age }}</p>
    <p>{{ $example5->email }}</p>
    <p>{{ $email }}</p>
    @dump($names)
    @dump($whereBetween)
    @dump($whereNotBetween)
    @dump($whereIn)
    @dump($whereNotIn)
    @dump($where)
    @dump($whereCreated_at)
    @dump($whereIdOrCreated_at)
    @dump($orderBy)
    @dump($latest)
    @dump($inRandomOrder)
    @dump($take)
    @dump($skip)
    @dump($increment)
    @dump($leftJoin)
    @dump($modelstry)
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>age</th>
            <th>salary</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>cities_id</th>
        </tr>
        @foreach($modelstry as $modeltry)
        <tr>
            <td>{{ $modeltry->id }}</td>
            <td>{{ $modeltry->name }}</td>
            <td>{{ $modeltry->email }}</td>
            <td>{{ $modeltry->age }}</td>
            <td>{{ $modeltry->salary }}</td>
            <td>{{ $modeltry->created_at }}</td>
            <td>{{ $modeltry->updated_at }}</td>
            <td>{{ $modeltry->cities_id }}</td>
        </tr>
        @endforeach
    </table>
    @dump($modelWhere)
    @dump($modelFind)
    </x-layoit>