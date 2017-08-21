<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;

/**
 * Class BankAccount
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BankAccount implements BankAccountInterface
{

    /**
     * @var float
     */
    private $balance;

    /**
     * @inheritDoc
     */
    public function withdraw(float $amount): void
    {
        $this->balance -= $amount;
    }

    /**
     * @inheritDoc
     */
    public function deposit(float $amount): void
    {
        $this->balance += $amount;
    }

    /**
     * @inheritDoc
     */
    public function getBalance(): float
    {
        return $this->balance;
    }

}
