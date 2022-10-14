<?php
function calculator(string $value): string
{
    $signArr = [];
    $numberArr = [];
    $numbers = '0123456789';
    $str = '';

    foreach (str_split($value) as $char) {
        if (strpos($numbers, $char)) {
            $str = $char;
            $numberArr[] = intval($str);
            $str = '';
        } else {
            $signArr[] = $char;
        }
    }

    $sum = 0;
    foreach ($signArr as $key => $sign) {
        if ($key === 0) {
            if ($sign === '+') {
                $sum += $numberArr[$key] + $numberArr[$key + 1];
            }
            if ($sign === '-') {
                $sum += $numberArr[$key] - $numberArr[$key + 1];
            }
        }
        if ($key === 1) {
            if ($sign === '+') {
                $sum += $numberArr[$key + 1];
            }
            if ($sign === '-') {
                $sum -= $numberArr[$key + 1];
            }
        }
        if ($key === 2) {
            if ($sign === '+') {
                $sum += $numberArr[$key + 1];
            }
            if ($sign === '-') {
                $sum -= $numberArr[$key + 1];
            }
        }
        if ($key === 3) {
            if ($sign === '+') {
                $sum += $numberArr[$key + 1];
            }
            if ($sign === '-') {
                $sum -= $numberArr[$key + 1];
            }
        }
    }
    return $sum;
}
echo calculator('5-5+5+5-5');
