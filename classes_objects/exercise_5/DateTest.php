<?php declare(strict_types=1);

class DateTest
{
    public function main(): void
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
