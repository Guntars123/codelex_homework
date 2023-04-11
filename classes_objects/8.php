<?php declare(strict_types=1);

class SavingsAccount
{
    private float $balance;
    private float $interestRate;

    public function __construct($balance, $interestRate)
    {
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function withdrawal($withdrawal): void
    {
        $this->balance -= $withdrawal;
    }

    public function addDeposit($deposit): void
    {
        $this->balance += $deposit;
    }

    public function addMInterestRate(): void
    {
        $monthlyMInterestRate = $this->interestRate / 12 / 100;
        $this->balance += ($this->balance * $monthlyMInterestRate);
    }

    public function earnedInterest()
    {
        $monthlyMInterestRate = $this->interestRate / 12 / 100;
        return $this->balance * $monthlyMInterestRate;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }

}

class Test
{
    public function main(): void
    {

        $balance = (float)readline("How much money is in the account? ");
        $interestRate = (float)readline("Enter the annual interest rate: ");
        $accountOpened = (int)readline("How long has the account been opened? ");

        $savingAccount = new SavingsAccount($balance, $interestRate);

        $totalDeposit = 0;
        $totalWithdrawn = 0;
        $totalInterestEarned = 0;

        for ($i = 1; $i <= $accountOpened; $i++) {
            $deposit = (float)readline("Enter amount deposited for month $i: ");
            $totalDeposit += $deposit;
            $savingAccount->addDeposit($deposit);
            $withdrawal = (float)readline("Enter amount to withdrawn for month $i: ");
            $totalWithdrawn += $withdrawal;
            $savingAccount->withdrawal($withdrawal);
            $savingAccount->addMInterestRate();
            $totalInterestEarned += $savingAccount->earnedInterest();
        }

        $endBalance = $savingAccount->getBalance();
        //this equation is for wrong task given:
        // $totalInterestEarned = $endBalance - ($balance + $totalDeposit - $totalWithdrawn);

        function moneyFormat($number): string
        {
            return number_format($number, 2, '.', ',');
        }

        echo "Total deposited: $" . moneyFormat($totalDeposit) . PHP_EOL;
        echo "Total withdrawn: $" . moneyFormat($totalWithdrawn) . PHP_EOL;
        echo "Total interest earned: $" . moneyFormat($totalInterestEarned) . PHP_EOL;
        echo "Ending balance: $" . moneyFormat($endBalance) . PHP_EOL;

    }
}

(new Test)->main();
