<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;

/**
 * Class BankFacade
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BankFacade implements BankFacadeInterface
{

    /**
     * @var BankInterface
     */
    private $bank;

    /**
     * BankFacade constructor.
     *
     * @param BankInterface $bank
     */
    public function __construct(BankInterface $bank)
    {
        $this->bank = $bank;
    }

    /**
     * @inheritdoc
     */
    public function isAccountOfBank(BankAccountInterface $bankAccount): bool
    {
        return $this->bank->hasAccount($bankAccount);
    }

    /**
     * @inheritdoc
     */
    public function openAccount(BankAccountInterface $bankAccount): void
    {
        $this->bank->openAccount($bankAccount);
    }

    /**
     * @inheritdoc
     */
    public function closeAccount(BankAccountInterface $bankAccount): void
    {
        $this->bank->closeAccount($bankAccount);
    }

    /**
     * @inheritdoc
     */
    public function withdraw(BankAccountInterface $bankAccount, float $amount): void
    {
        if (!$this->isAccountOfBank($bankAccount)) {
            return;
        }

        $bankAccount->withdraw($amount);
    }

    /**
     * @inheritdoc
     */
    public function deposit(BankAccountInterface $bankAccount, float $amount): void
    {
        if (!$this->isAccountOfBank($bankAccount)) {
            return;
        }

        $bankAccount->deposit($amount);
    }

    /**
     * @inheritdoc
     */
    public function getBalance(BankAccountInterface $bankAccount): float
    {
        if (!$this->isAccountOfBank($bankAccount)) {
            return 0;
        }

        return $bankAccount->getBalance();
    }

}
