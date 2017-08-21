<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;


/**
 * Interface BankFacadeInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface BankFacadeInterface
{

    /**
     * @param BankAccountInterface $bankAccount
     *
     * @return bool
     */
    public function isAccountOfBank(BankAccountInterface $bankAccount): bool;

    /**
     * @param BankAccountInterface $bankAccount
     */
    public function openAccount(BankAccountInterface $bankAccount): void;

    /**
     * @param BankAccountInterface $bankAccount
     */
    public function closeAccount(BankAccountInterface $bankAccount): void;

    /**
     * @param BankAccountInterface $bankAccount
     * @param float $amount
     */
    public function withdraw(BankAccountInterface $bankAccount, float $amount): void;

    /**
     * @param BankAccountInterface $bankAccount
     * @param float $amount
     */
    public function deposit(BankAccountInterface $bankAccount, float $amount): void;

    /**
     * @param BankAccountInterface $bankAccount
     *
     * @return float
     */
    public function getBalance(BankAccountInterface $bankAccount): float;

}
