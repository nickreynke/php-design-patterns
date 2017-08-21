<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;

/**
 * Interface BankAccountInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface BankAccountInterface
{

    /**
     * @param float $amount
     */
    public function withdraw(float $amount): void;

    /**
     * @param float $amount
     */
    public function deposit(float $amount): void;

    /**
     * @return float
     */
    public function getBalance(): float;

}
