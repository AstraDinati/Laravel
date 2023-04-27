<x-layout>
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    all:
    <ul>
        @foreach($all as $elem)
        <li>{{ $elem }}</li>
        @endforeach
    </ul>
    avg:
    {{ $avg }}
    <br>
    chunk:
    <ul>
        @foreach($chunk as $elems)
        <li>{{ $elems }}</li>
        @endforeach
    </ul>
    chunkWhile:
    <ul>
        @foreach($chunkWhile as $elems)
        @php
        $str = '';
        foreach($elems as $elem){
        $str .= $elem . ' ';
        }
        @endphp
        <li>{{ $str }}</li>
        @endforeach
    </ul>
    chunkWhile:
    @php
    echo '
    <pre>';
    print_r($chunkWhile);
    echo '</pre>';
    @endphp
    collapse: {{ $collapse }}
    <br>
    {{ $collect }}
    <br>
    combain: {{ $combain }}
    <br>
    concat: {{ $concat }}
    <br>
    contains(1,2) & containsOneItem:
    @php
    var_dump($contains1);
    echo '<br>';
    var_dump($contains2);
    echo '<br>';
    var_dump($containsOneItem);
    @endphp
    <br>
    count: {{ $count }}
    <br>
    countBy: {{ $countBy }}
    <br>
    crossJoin: {{ $crossJoin }}
    <br>
    diff:
    @dump($diff)
    <br>
    diffAssoc: {{ $diffAssoc }}
    <br>
    diffKeys: {{ $diffKeys }}
    <br>
    dump: {{ $dump }}
    <br>
    duplicates: {{ $duplicates }}
    <br>
    duplicatesStrict: {{ $duplicatesStrict }}
    <br>
    each: {{ $each }}
    <br>
    every: 
    @dump($every)
    <br>
    except: {{ $except }}
    <br>
    filter: {{ $filter }}
    <br>
    <br>
    firstWhere:
    @dump($firstWhere) 
    flatMap:
    @dump($flatMap)
    flatten:
    @dump($flatten)
    flip:
    @dump($flip)
    forget:
    @dump($forget)
    forPage:
    @dump($forPage)
    get:
    @dump($get)
    groupBy:
    @dump($groupBy)
    has:
    @dump($has)
    hasAny:
    @dump($hasAny)
    implode:
    @dump($implode)
    intersect:
    @dump($intersect)
    intersectByKeys:
    @dump($intersectByKeys)
    isEmpty:
    @dump($isEmpty)
    join:
    @dump($join)
    keyBy:
    @dump($keyBy)
    keys:
    @dump($keys)map
    macro:
    @dump($macro)
    map:
    @dump($map)
    mapSpread:
    @dump($mapSpread)
    mapToGroups:
    @dump($mapToGroups)
    mapWithKeys:
    @dump($mapWithKeys)
    median:
    @dump($median)
    merge:
    @dump($merge)
    mergeRecursive:
    @dump($mergeRecursive)
    partition:
    @dump($partition_int, $partition_str)
    pipeThrough:
    @dump($pipeThrough)
    pluck:
    @dump($pluck)
    reduceSpread:
    @dump($reduceSpread_even, $reduceSpread_odd)
    times:
    @dump($times)
    where:
    @dump($where)
</x-layout>