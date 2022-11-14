<?php
//Task 1.3.
function calculator($value)
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
echo calculator(readLine($value));
?>

<?php
//Task 2,3.
function sumTime($time1, $time2)
{
    $seconds = 0;

    $total = [$time1, $time2];

    foreach ($total as $time) {
        list($hour, $minute, $second) = explode(':', $time);
        $seconds += $hour * 3600;
        $seconds += $minute * 60;
        $seconds += $second;
    }
    $hours = floor($seconds / 3600);
    $seconds -= $hours * 3600;
    $minutes = floor($seconds / 60);
    $seconds -= $minutes * 60;

    while ($hours > 24)
        $hours -= 24;

    return sprintf('%02d:%02d:%02d', $hours, $minutes, $seconds);
}
echo sumTime(readLine($time1), readLine($time2));
?>