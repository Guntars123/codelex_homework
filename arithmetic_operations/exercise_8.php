<?php

$minBasePay = 8;
$standardHours = 40;
$maxHours = 60;
$overtimePayConst = 1.5;

$employees = [
    createEmployee("Employee 1", 7.5, 35),
    createEmployee("Employee 2", 8.2, 47),
    createEmployee("Employee 3", 10, 73),
];

wagesPayout($employees, $standardHours, $maxHours, $minBasePay, $overtimePayConst);

function wagesPayout(array $employees, int $standardHours, int $maxHours, float $minBasePay, float $overtimePayConst): void
{
    foreach ($employees as $employee) {
        if ($employee->basePay < $minBasePay) {
            echo "Error: $employee->name base pay " . number_format($employee->basePay, 2);
            echo "$ is smaller than minimum wage!" . PHP_EOL;
        } else if ($employee->hoursWorked > $maxHours) {
            echo "Error: $employee->name worked hours: $employee->hoursWorked is greater than maximum allowed hours";
            echo PHP_EOL;
        } else {
            $standardCash = $standardHours * $employee->basePay;
            $overtimeCash = ($employee->hoursWorked - $standardHours) * $employee->basePay * $overtimePayConst;
            if ($overtimeCash > 0) {
                $payout = $overtimeCash + $standardCash;
            } else {
                $payout = $standardCash;
            }
            echo "$employee->name payout this week - " . number_format($payout, 2) . "$" . PHP_EOL;
        }
    }
}

function createEmployee(string $name, float $basePay, int $hoursWorked): stdClass
{
    $employee = new stdClass();
    $employee->name = $name;
    $employee->basePay = $basePay;
    $employee->hoursWorked = $hoursWorked;
    return $employee;
}