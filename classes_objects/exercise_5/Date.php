<?php declare(strict_types=1);

class Date
{
    private int $month;
    private int $day;
    private int $year;

    public function __construct(int $month, int $day, int $year)
    {
        if ($month > 0 && $month <= 12) {
            $this->month = $month;
        } else {
            echo "Invalid month provided to constructor" . PHP_EOL;
            exit;
        }
        if ($day > 0 && $day <= 31) {
            $this->day = $day;
        } else {
            echo "Invalid day provided to constructor" . PHP_EOL;
            exit;
        }

        if ($year > 1920 && $year <= date("Y")) {
            $this->year = $year;
        } else {
            echo "Invalid year provided to constructor" . PHP_EOL;
            exit;
        }
    }


    public function setMonth(int $month): void
    {
        if ($month > 0 && $month <= 12) {
            $this->month = $month;
        } else {
            echo "You are trying to set invalid month" . PHP_EOL;
            exit;
        }
    }

    public function setDay(int $day): void
    {
        if ($day > 0 && $day <= 31) {
            $this->day = $day;
        } else {
            echo "You are trying to set invalid day" . PHP_EOL;
            exit;
        }

    }

    public function setYear(int $year): void
    {
        if ($year > 1920 && $year <= date("Y")) {
            $this->year = $year;
        } else {
            echo "You are trying to set invalid year" . PHP_EOL;
            exit;
        }
    }


    public function getDay(): int
    {
        return $this->day;
    }


    public function getMonth(): int
    {
        return $this->month;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function displayDate(): void
    {
        echo "$this->month / $this->day / $this->year " . PHP_EOL;
    }
}
