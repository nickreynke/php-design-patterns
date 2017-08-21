<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;

/**
 * Interface BankInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface BankInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return BankInterface
     */
    public function setName(string $name): BankInterface;

    /**
     * @return BankAccountInterface[]
     */
    public function getAccounts(): array;

    /**
     * @param BankAccountInterface $bankAccount
     *
     * @return BankInterface
     */
    public function openAccount(BankAccountInterface $bankAccount): BankInterface;

    /**
     * @param BankAccountInterface $bankAccount
     *
     * @return BankInterface
     */
    public function closeAccount(BankAccountInterface $bankAccount): BankInterface;

    /**
     * @param BankAccountInterface $bankAccount
     *
     * @return bool
     */
    public function hasAccount(BankAccountInterface $bankAccount): bool;

}
