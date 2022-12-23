<?php
require_once __DIR__ . '/../PHP lw/lw4_tasks_1.php';

use PHPUnit\Framework\TestCase;

class DateTests extends TestCase
{
    private Date $date;

    protected function SetUp(): void
    {
        $this->date = new Date(1, 12, 2022);
    }

    public function testNewObjectInvalidInput(): void
    {
        $this->expectException(Exception::class);
        $date = new Date(44, 11, 2022);
    }
    public function testDiffDay(): void
    {
        $secondDate = new Date(30, 12, 2022);
        $this->assertEquals('29', $this->date->diffDay($secondDate));
    }
    public function testGetDayOfWeek(): void
    {
        $this->assertEquals('Thursday', $this->date->getDayOfWeek());
    }
    public function testMinusDays(): void
    {
        $this->assertEquals('06.11.2022', $this->date->minusDay(25, 'ru'));
    }

    public function testInvalidFormatInput(): void
    {
        $this->expectException(InvalidArgumentException::class);
        echo $this->date->format('kz');
    }

    public function testAmericanDateFormat(): void
    {
        $this->assertEquals('2022-12-1', $this->date->format('en'));
    }
}
