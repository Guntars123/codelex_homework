<?php declare(strict_types=1);

class SavingsAccount
{
    private float $balance;
    private float $interestRate;

    public function __construct(float $balance, float $interestRate)
    {
        $this->balance = $balance;
        $this->interestRate = $interestRate;
    }

    public function withdrawal(float $withdrawal): void
    {
        $this->balance -= $withdrawal;
    }

    public function addDeposit(float $deposit): void
    {
        $this->balance += $deposit;
    }

    public function addMInterestRate(): void
    {
        $monthlyMInterestRate = $this->interestRate / 12 / 100;
        $this->balance += $this->balance * $monthlyMInterestRate;
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}