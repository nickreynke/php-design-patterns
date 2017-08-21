<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Facade;

use PhpDesignPatterns\DesignPatterns\Structural\Facade\Bank;
use PhpDesignPatterns\DesignPatterns\Structural\Facade\BankAccount;
use PhpDesignPatterns\DesignPatterns\Structural\Facade\BankFacade;
use PHPUnit\Framework\TestCase;

/**
 * Class FacadePatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class FacadePatternTest extends TestCase
{

    public function testFacadePattern(): void
    {
        $bank = new Bank();
        $bank->setName('Bank Ltd.');

        $bankAccount = new BankAccount();
        $bankAccount->deposit(1000);

        $bankFacade = new BankFacade($bank);
        self::assertFalse($bankFacade->isAccountOfBank($bankAccount));

        $bankFacade->openAccount($bankAccount);
        self::assertTrue($bankFacade->isAccountOfBank($bankAccount));

        $bankFacade->withdraw($bankAccount, 600);
        self::assertEquals(400, $bankFacade->getBalance($bankAccount));
    }

}
