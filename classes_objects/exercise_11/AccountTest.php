<?php declare(strict_types=1);

class AccountTest
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

