<?php declare(strict_types=1);

class SavingsAccountTest
{
    public function main(): void
    {

        $balance = (float)readline("How much money is in the account? ");
        $interestRate = (float)readline("Enter the annual interest rate: ");
        $accountOpened = (int)readline("How long has the account been opened? ");

        $savingAccount = new SavingsAccount($balance, $interestRate);

        $totalDeposit = 0;
        $totalWithdrawn = 0;


        for ($i = 1; $i <= $accountOpened; $i++) {
            $deposit = (float)readline("Enter amount deposited for month $i: ");
            $totalDeposit += $deposit;
            $savingAccount->addDeposit($deposit);
            $withdrawal = (float)readline("Enter amount to withdrawn for month $i: ");
            if ($savingAccount->getBalance() < $withdrawal) {
                echo "Not enough money. Try again!" . PHP_EOL;
                return;
            }
            $totalWithdrawn += $withdrawal;
            $savingAccount->withdrawal($withdrawal);
            $savingAccount->addMInterestRate();

        }

        $endBalance = $savingAccount->getBalance();

        $totalInterestEarned = $endBalance - ($balance + $totalDeposit - $totalWithdrawn);

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