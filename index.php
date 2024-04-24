<?php

// Для проверки использую не 100 элементов,
// но главное ведь чтобы работало с массивом из 100 элементов.
$array = [1, 1, 2, 3, 3, 3, 5, 6, 8, 10, 10, 11, 12, 14, 15, 18, 19, 23, 23, 23, 25, 25, 26, 27, 29];

// количество одинаковых последовательностей (2 и более)
// PS: воможно это имелось ввиду в задании
function seriesCounter($arr): int
{
    $seriesCount = 0;
    $isStreak = false;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === 0) continue;
        if ($arr[$i - 1] === $arr[$i] && !$isStreak) {
            $seriesCount++;
            $isStreak = true;
        } else {
            $isStreak = false;
        }
    }
    return $seriesCount;
}

echo seriesCounter($array); // 5

echo '<br>';

// количество последовательных ПАР как указано в задании
// PS: пара - это 2 элемента в моем понимании
function seriesCounter2($arr): int
{
    $seriesCount = 0;
    for ($i = 0; $i < count($arr); $i++) {
        if ($i === 0) continue;
        if ($arr[$i - 1] === $arr[$i]) {
            $seriesCount++;
        }
    }
    return $seriesCount;
}

echo seriesCounter2($array); // 7