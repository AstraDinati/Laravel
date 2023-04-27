<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <p style="{{ $color }}">Name: <input name="name" value="{{ $data['name'] }}"></p>
    <p style="{{ $color }}">Age: <input name="age" value="{{ $data['age'] }}"></p>
    <p style="{{ $color }}">Salary: <input name="salary" value="{{ $data['salary'] }}"></p>
    <p style="{{ $color }}"><a href="{{ $href }}">{{ $text }}</a></p>
    <p style="{{ $color }}"> current date: {{ date('d-m-Y') }}</p>
    <p style="{{ $color }}"> {{ count($data) }}</p>
    <p style="{{ $color }}"> {{ $location['country'] ?? 'Russia' }}</p>
    <p style="{{ $color }}"> {{ $location['city'] ?? 'Moscow' }}</p>
    <p style="{{ $color }}">
        {{ $year ?? date('Y') }}-{{ $month ?? date('m') }}-{{ $day ?? date('d') }}
    </p>
    {{-- <p style="{{ $color }}"> {{ $str }}</p> --}}
    <p style="{{ $color }}"> {!! $str !!}</p>
    @if($age > 18)
    <p style="{{ $color }}"> Вам больше 18 лет</p>
    @elseif($age === 18)
    <p style="{{ $color }}"> Вам 18 лет</p>
    @else
    <p style="{{ $color }}"> Вам меньше 18 лет</p>
    @endif
    @unless ($age1 >= 18)
    <p style="{{ $color }}"> Вам ещё меньше 18</p>
    @endunless
    @if(count($arr) > 0)
    <p style="{{ $color }}"> {{ array_sum($arr) }}</p>
    @else
    <p style="{{ $color }}"> Массив пуст </p>
    @endif
    <ul>
        @foreach ($arr as $elem)
        <li style="{{ $color }}">{{ sqrt($elem) }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($arr1 as $key => $elem)
        <li style="{{ $color }}">{{ $key + 1 }} {{ $elem }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach ($arr3 as $elem)
        @if($elem % 2 === 0)
        <li style="{{ $color }}">{{ $elem }}</li>
        @endif
        @endforeach
    </ul>
    @if(is_array($data1))
    <ul>
        @foreach ($data1 as $elem)
        <li style="{{ $color }}">{{ $elem }}</li>
        @endforeach
    </ul>
    @else
    <p style="{{ $color }}"> {{ $data1 }} </p>
    @endif
    <table>
        <tr>
            <th>aaa</th>
            <th>bbb</th>
            <th>ccc</th>
        </tr>
        @foreach($arr4 as $subArr)
        <tr>
            @foreach ($subArr as $elem)
            <td>{{ $elem }}</td>
            @endforeach
        </tr>
        @endforeach
    </table>
    <ul>
        @foreach ($employees as $emp)
        <li>{{ $emp['name'] }} {{ $emp['surname'] }} {{ $emp['salary'] }}</li>
        @endforeach
    </ul>
    <table>
        <tr>
            <th>name</th>
            <th>surname</th>
            <th>salary</th>
        </tr>
        @foreach($employees as $emp)
        <tr>
            <td>{{ $emp['name'] }}</td>
            <td>{{ $emp['surname'] }}</td>
            <td>{{ $emp['salary'] }}</td>
        </tr>
        @endforeach
    </table>
    @forelse ($users as $user)
    <p>{{ $user }}</p>
    @empty
    <p>Массив пуст</p>
    @endforelse
    <ul>
        @foreach($users as $user)
        <li>{{ $loop->index }} {{ $user }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($users as $user)
        <li>{{ $loop->iteration }} {{ $user }}</li>
        @endforeach
    </ul>
    <ul>
        @foreach($users as $user)
        @if($loop -> first)
        <li style="class: first">{{ $user }} first</li>
        @elseif($loop -> last)
        <li style="class: last">{{ $user }} last</li>
        @else
        <li>{{ $user }}</li>
        @endif
        @endforeach
    </ul>
    <ul>
        @foreach($numbers as $number)
        @if(($loop-> remaining) === 2 or ($loop-> remaining) === 1 or ($loop-> remaining) === 0)
        <i>{{ $number }}</i>
        @else
        <b>{{ $number }}</b>
        @endif
        @endforeach
    </ul>
    @foreach($numbers as $num)
    @break($num === 0)
    {{ $num }}
    @endforeach
    <ul>
        @foreach($numbers as $num)
        @continue($num === 0)
        <li>{{ $num }}</li>
        @endforeach
    </ul>
    @for ($i = 1; $i <= 10; ++$i) <p style="{{ $color }}"> {{ $i }}</p>
        @endfor
        @php
        echo '!!!';
        @endphp
        <ul>
            @foreach($links as $link)
            <li><a href="http://{{ $link['href'] }}">{{ $link['text'] }}</a></li>
            @endforeach
        </ul>
        <table>
            @foreach ($employees1 as $emp)
            @continue($emp['salary'] < 2000) @if($loop -> first)
                <tr>
                    <th>id</th>
                    <th>{{ $emp['name'] }}</th>
                    <th>{{ $emp['surname'] }}</th>
                    <th>{{ $emp['salary'] }}</th>
                </tr>
                @else
                <tr>
                    <td>{{ $loop->index }}</td>
                    <td>{{ $emp['name'] }}</td>
                    <td>{{ $emp['surname'] }}</td>
                    <td>{{ $emp['salary'] }}</td>
                </tr>
                @endif
                @endforeach
        </table>
        <table>
            <tr>
                <th>имя</th>
                <th>фамилия</th>
                <th>статус</th>
            </tr>
            @foreach($users9 as $user)
            @php
            if($user['banned']){
            $bann = 'забанен';
            } else {
            $bann = 'активен';
            }
            @endphp
            @if ($user['banned'])
            <tr style="color: red">
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $bann }}</td>
            </tr>
            @else
            <tr style="color: green">
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                <td>{{ $bann }}</td>
            </tr>
            @endif
            @endforeach
        </table>
        <p style="{{ $color }}">Name: <input name="name" value="{{ $arr10['0'] }}"></p>
        <p style="{{ $color }}">Surname: <input name="surname" value="{{ $arr10['1'] }}"></p>
        <p style="{{ $color }}">Age: <input name="age" value="{{ $arr10['2'] }}"></p>
        <p style="{{ $color }}">Salary: <input name="salary" value="{{ $arr10['3'] }}"></p>
        <select>
            @foreach($arr10 as $elem)
            <option>{{ $elem }}</option>
            @endforeach
        </select>
        <ul>
            @foreach($arrMonth as $day)
            @if (($loop->iteration) == $today)
            <li>{{ $day }} today</li>
            @else
            <li>{{ $day }}</li>
            @endif
            @endforeach
        </ul>
</x-layout>