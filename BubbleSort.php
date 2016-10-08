<?php

function bsort(array $toSort)
{
    $nbOfElements = count($toSort);

    for ($i = 1; $i < $nbOfElements; $i++) {
        $max = $nbOfElements - $i + 1;

        for ($j = 1; $j < $max; $j++) {
            $keyToCompare = $j - 1;

            if ($toSort[$keyToCompare] > $toSort[$j]) {
                swap($toSort, $keyToCompare, $j);
            }
        }
    }

    return $toSort;
}

function swap(&$array, $firstKey, $secondKey) {
    $temp = $array[$secondKey];

    $array[$secondKey] = $array[$firstKey];
    $array[$firstKey] = $temp;
}

$toSort = [5, 1, 9, 10, 2, 3, 7, 4, 8,];

$sorted = bsort($toSort);