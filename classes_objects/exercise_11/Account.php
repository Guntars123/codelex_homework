<?php declare(strict_types=1);

class Account
{
    private string $accountTitle;
    private float $balance;

    public function __construct(string $accountTitle, float $balance)
    {
        $this->accountTitle = $accountTitle;
        $this->balance = $balance;
    }

    public function deposit(float $depositAmount): void
    {
        $this->balance += $depositAmount;
    }

    public function withdraw(float $withdrawAmount): void
    {
        $this->balance -= $withdrawAmount;
    }

    public function printBalance(): void
    {
        $ifNegative = "";
        if ($this->balance < 0) {
            $ifNegative = "-";
        }
        echo "$this->accountTitle balance: $ifNegative$" . number_format(abs($this->balance), 2, '.', ',') . PHP_EOL;
    }

    public static function transfer(Account $from, Account $to, float $howMuch): void
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }
}
