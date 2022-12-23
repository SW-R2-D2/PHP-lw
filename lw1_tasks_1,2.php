<?php
class Calculator
{
    private float $result = 0.0;
    public function sum(float $sum): self
    {
        $this->result += $sum;
        return $this;
    }
    public function minus(float $minus): self
    {
        $this->result -= $minus;
        return $this;
    }
    public function product(float $product): self
    {
        $this->result *= $product;
        return $this;
    }
    public function division(float $division): self
    {
        if ($division !== 0.0) {
            $this->result /= $division;
        } else {
            $this->result = 0.0;
        }
        return $this;
    }
    public function getResult(): string
    {
        return $this->result;
    }
}

$calculator = new Calculator();

echo $calculator->sum(1)->sum(2)->product(3)->division(3)->getResult() . "\n";
?>

<?php
class Date
{
    private int $day, $month, $year;
    public static array $Week = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    public function __construct(int $day, int $month, int $year)
    {
        if ($day >= 1 && $day <= 31) {
            $this->day = $day;
        } else {
            $this->day = 1;
        }
        if ($month >= 1 && $month <= 12) {
            $this->month = $month;
        } else {
            $this->month = 1;
        }
        if ($year >= 1 && $year <= 3000) {
            $this->year = $year;
        } else {
            $this->year = 1;
        }
    }

    public function date_diff(Date $dateTwo): void
    {
        $seconds1 = $seconds2 = $diff = 0;
        $seconds1 = ($this->year * 31536000) + ($this->month * 2629746) + ($this->day * 86400);
        $seconds2 = ($dateTwo->year * 31536000) + ($dateTwo->month * 2629746) + ($dateTwo->day * 86400);
        $diff = $seconds1 - $seconds2;
        $diff = abs($diff);
        $diff_day = intval($diff / (3600 * 24));
        echo $diff_day . "\n";
    }

    public function minusDay(int $remove)
    {
        $this->day = $this->day - $remove;
        while ($this->day < 1) {
            $this->month--;
            $this->day = $this->day + 31;
        }
        while ($this->month < 1) {
            $this->year--;
            $this->month = $this->month + 12;
        }
        $this->format('rus');
    }

    public function getWeek(): void
    {
        $dateSum = $dateName = 0;
        $dateSum = ($this->year * 365) + ($this->month * 31) + $this->day;
        $dateName = $dateSum % 7;
        echo self::$Week[$dateName] . "\n";
    }

    public function format(string $selection): void
    {
        switch ($selection) {
            case 'rus':
                echo "$this->day.$this->month.$this->year \n";
                break;
            case 'eng':
                echo "$this->year-$this->month-$this->day \n";
                break;
            default:
                echo "Напишите rus или eng \n";
        }
    }
}

$date1 = new Date(1, 2, 2001);
$date2 = new Date(1, 4, 2001);
$date1->format('rus');
$date1->format('eng');
$date1->date_diff($date2);
$date1->getWeek();
$date1->minusDay(4);
?>