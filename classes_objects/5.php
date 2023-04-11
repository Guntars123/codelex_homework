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

class DateTest
{
    public function test(): void
    {
        $date1 = new Date(10, 12, 1992);
        $date2 = new Date(02, 10, 1988);

        $date1->displayDate();
        $date1->setMonth(11);
        $date1->setDay(31);
        $date1->setYear(2023);
        $date1->displayDate();

        echo $date2->getDay() . PHP_EOL;
        echo $date2->getMonth() . PHP_EOL;
        echo $date2->getYear() . PHP_EOL;


    }

}


(new DateTest)->test();

