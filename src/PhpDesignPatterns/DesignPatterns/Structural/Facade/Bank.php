<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Facade;

/**
 * Class Bank
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Bank implements BankInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var BankAccountInterface[]
     */
    private $accounts = [];

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): BankInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getAccounts(): array
    {
        return $this->accounts;
    }

    /**
     * @inheritDoc
     */
    public function openAccount(BankAccountInterface $bankAccount): BankInterface
    {
        if (!$this->hasAccount($bankAccount)) {
            $this->accounts[] = $bankAccount;
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function closeAccount(BankAccountInterface $bankAccount): BankInterface
    {
        if ($this->hasAccount($bankAccount)) {
            $key = array_search($bankAccount, $this->getAccounts(), true);
            unset($this->accounts[$key]);
        }

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function hasAccount(BankAccountInterface $bankAccount): bool
    {
        return in_array($bankAccount, $this->getAccounts(), true);
    }


}
