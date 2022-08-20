<?php
function binarySearch($array, $number) {
    if (!is_array($array) || empty($array)) {
        return 'Массив пустой или это не массив';
    }
    $length = count($array);
    $lower = 0;
    $high = $length - 1;
    while ($lower <= $high) {
        $middle = intval(($lower + $high) / 2);
        if ($array[$middle] > $number) {
            $high = $middle - 1;
        } else if ($array[$middle] < $number) {
            $lower = $middle + 1;
        } else {
            return $middle;
        }
    }
    return 'Такого элемента нет';
}