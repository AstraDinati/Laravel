<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    public function show()
    {
        $coll = collect([
            [
                'name' => 'Regena', 'age' => null,
                'attr' => [
                    'some' => 'value'
                ]
            ],
            [
                'name' => 'Linda', 'age' => 14,
                'attr' => [
                    'some' => 'value'
                ]
            ],
            [
                'name' => 'Diego', 'age' => 23,
                'attr' => [
                    'some' => 'value'
                ]
            ],
            [
                'name' => 'Linda', 'age' => 84,
                'attr' => [
                    'some' => 'value'
                ]
            ],
        ]);
        $arrDiff1 = collect(['one' => 'Vad', 'two' => 'Lebe']);
        $arrDiff2 = collect(['one' => 'im', 'three' => 'dev']);
        $arrDiff3 = collect(['one' => 'Vad', 'two' => 'Lebe']);
        $arrA = collect(['Vad', 'Lebe']);
        $arrB = collect(['im', 'dev']);
        $collection99 = collect()->range(5,10);
        $collectionA = collect([1, 2, 3, 1, 2, 4, 5, '1', 6]);
        $collection11 = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);
        $collection = collect([
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9],
        ]);
        $collects = collect([1, 3, 5, 2, 4, 6, 7, 9, 11]);
        $collects5 = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com', 1, 3, 5]);
        $all = collect([1, 2, 3])->all();
        $average = collect([1, 2, 3])->avg();
        $chunk = collect(['2' => 1, 2, 3, 4, 5, 6])->chunk(2);
        $chunkWhile = $collects->chunkWhile(function ($value, $key, $chunk) {
            if (!$chunk) {
                return $value % 2 === 1;
            }
            return $value % 2 === $chunk->first() % 2;
        })->toArray();
        $collapse = $collection->collapse();
        $collect = $collectionA->collect();
        $combain = $arrA->combine($arrB);
        $concat = $arrA->concat($collectionA);
        $contains1 = $arrA->contains('Vad');
        $contains2 = $arrA->contains('im');
        $containsOneItem = $arrA->containsOneItem();
        $count = $collectionA->count();
        $collection11 = collect(['alice@gmail.com', 'bob@yahoo.com', 'carlos@gmail.com']);
        $countBy = $collection11->countBy(function ($email) {
            return substr(strrchr($email, "@"), 1);
        });
        $crossJoin = $arrA->crossJoin($arrB);
        // $dd = $arrA->dd(); ломает скрипт
        $diff = $collects->diff($collectionA);
        $diffAssoc = $collects->diffAssoc($collectionA);
        $diffKeys = $arrDiff1->diffKeys($arrDiff2);
        $dump = $arrA->dump();
        $duplicates = $collectionA->duplicates();
        $duplicatesStrict = $collectionA->duplicatesStrict();
        $each = $collectionA->each(function ($item, $key) {
            if ($item === 4) {
                return false;
            }
        });
        $every = $collectionA->every(function ($value, $key) {
            return is_int($value);
        });
        $except = $arrDiff1->except(['one']);
        $filter = $collectionA->filter(function ($value, $key) {
            return $value % 2 === 0;
        });
        $firstWhere = $coll->firstWhere('age', '>=', 18);
        $flatMap = $coll->flatMap(function ($values) {
            return [
                [
                    'new_name' => $values['name'],
                    'new_age' => $values['age']
                ]
            ];
        });
        $flatten = $coll->flatten();
        $flip = $arrDiff1->flip();
        $forget = $arrDiff1->forget('one');
        $forPage = $collects->forPage(3, 3);
        $get = $arrDiff2->get('one');
        $groupBy = $coll->groupBy('name');
        $has = $arrDiff2->has('one');
        $hasAny = $arrDiff2->hasAny('one', 'three');
        $implode = $coll->implode('name', ', ');
        $intersect = $collectionA->intersect($collects);
        $intersectByKeys = $collectionA->intersectByKeys($collects);
        $isEmpty = $coll->isEmpty();
        $join = $collection11->join(', ', ' and ');
        $keyBy = $coll->keyBy('name');
        $keys = $arrDiff2->keys();
        Collection::macro('toUpper', function () {
            return $this->map(function ($value) {
                return strtoupper($value);
            });
        });
        $macro = $collection11->toUpper();
        $map = $coll->map(function ($value, $key) {
            return strtoupper($value['name']) . ', ' . $value['age'];
        });
        $mapSpread = $collection->mapSpread(function ($a, $b, $c) {
            return $a + $c . ' ' . $b;
        });
        $mapToGroups = $coll->mapToGroups(function ($values) {
            return [
                $values['name'] => [
                    'name' => $values['name'],
                    'age' => $values['age']
                ]
            ];
        });
        $mapWithKeys = $coll->mapWithKeys(function ($values) {
            return [
                $values['name'] => $values['age']
            ];
        });
        $median = $collects->median();
        $merge = $arrDiff1->merge($arrDiff2);
        $mergeRecursive = $arrDiff3->mergeRecursive($arrDiff2);
        [$partition_int, $partition_str] = $collects5->partition(function ($value) {
            return is_int($value);
        });
        $pipeThrough = $collects5->pipeThrough([
            function ($values) {
                return $values->filter(function ($item) {
                    return is_int($item);
                });
            },
            function ($values) {
                return $values->map(function ($value) {
                    return $value ** 2;
                });
            }
        ]);
        $pluck = $coll->pluck('attr.some');
        [$reduceSpread_even, $reduceSpread_odd] = $collects->reduceSpread(function($even, $odd, $value) {
            if ($value % 2 === 0){
                $even += $value;
            } else {
                $odd += $value;
            }

            return [$even, $odd];
        }, 0, 0);
        $times = Collection::times(10, function ($number) {
            return $number * 8;
        });
        $where = $coll->where('age', '>=', 23);


        return view('collection.show', [
            'title' => 'this title',
            'all' => $all, 'avg' => $average, 'chunk' => $chunk,
            'chunkWhile' => $chunkWhile, 'collapse' => $collapse,
            'collect' => $collect, 'combain' => $combain, 'concat' => $concat,
            'contains1' => $contains1, 'contains2' => $contains2,
            'containsOneItem' => $containsOneItem, 'count' => $count,
            'countBy' => $countBy, 'crossJoin' => $crossJoin, 'diff' => $diff,
            'diffAssoc' => $diffAssoc, 'diffKeys' => $diffKeys, 'dump' => $dump,
            'duplicates' => $duplicates, 'duplicatesStrict' => $duplicatesStrict,
            'each' => $each, 'every' => $every, 'except' => $except, 'filter' => $filter,
            'firstWhere' => $firstWhere, 'flatMap' => $flatMap, 'flatten' => $flatten,
            'flip' => $flip, 'forget' => $forget, 'forPage' => $forPage, 'get' => $get,
            'groupBy' => $groupBy, 'has' => $has, 'hasAny' => $hasAny, 'implode' => $implode,
            'intersect' => $intersect, 'intersectByKeys' => $intersectByKeys, 'isEmpty' => $isEmpty,
            'join' => $join, 'keyBy' => $keyBy, 'keys' => $keys, 'macro' => $macro, 'map' => $map,
            'mapSpread' => $mapSpread, 'mapToGroups' => $mapToGroups, 'mapWithKeys' => $mapWithKeys,
            'median' => $median, 'merge' => $merge, 'mergeRecursive' => $mergeRecursive,
            'partition_int' => $partition_int, 'partition_str' => $partition_str, 'pipeThrough' =>
            $pipeThrough, 'pluck' => $pluck, 'reduceSpread_even' => $reduceSpread_even,
            'reduceSpread_odd' => $reduceSpread_odd, 'times' => $times, 'where' => $where
        ]);
    }
}
