<?php declare(strict_types=1);

class BankAccount
{
    private string $name;
    private float $balance;

    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }

    function showUserNameAndBalance(): void
    {
        $ifNegative = "";
        if ($this->balance < 0) {
            $ifNegative = "-";
        }
        echo "$this->name, $ifNegative$" . number_format(abs($this->balance), 2, '.', ',') . PHP_EOL;
    }
}

(new BankAccount("John", -1200.5))->showUserNameAndBalance();