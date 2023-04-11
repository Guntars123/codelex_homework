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

    public function deposit($depositAmount): void
    {
        $this->balance += $depositAmount;
    }

    public function withdraw($withdrawAmount): void
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

    public static function transfer(Account $from, Account $to, int $howMuch): void
    {
        $from->withdraw($howMuch);
        $to->deposit($howMuch);
    }

}

class Test
{
    public function main(): void
    {
        $bartAccount = new Account("Bart account", 100);
        $bartAccount->deposit(20);
        $bartAccount->printBalance();
        echo "---------------------------------------------------------------------------------------------" . PHP_EOL;

        $mattAccount = new Account("Matt's account", 100);
        $myAccount = new Account("My account", 0);
        $mattAccount->withdraw(100);
        $myAccount->deposit(100);
        $mattAccount->printBalance();
        $myAccount->printBalance();
        echo "---------------------------------------------------------------------------------------------" . PHP_EOL;
        $a = new Account("A", 100);
        $b = new Account("B", 0);
        $c = new Account("C", 0);
        Account::transfer($a, $b, 50);
        Account::transfer($a, $c, 25);
        $a->printBalance();
        $b->printBalance();
        $c->printBalance();

    }

}

(new Test)->main();