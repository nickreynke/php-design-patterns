<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\AxeInterface;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadAxe;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadSword;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadWeaponFactory;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodAxe;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodSword;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodWeaponFactory;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\SwordInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class AbstractFactoryPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class AbstractFactoryPatternTest extends TestCase
{

    public function testAbstractFactoryPattern(): void
    {
        // Make good weapons! >:D
        self::assertInstanceOf(SwordInterface::class, GoodWeaponFactory::makeSword());
        self::assertInstanceOf(GoodSword::class, GoodWeaponFactory::makeSword());
        self::assertInstanceOf(AxeInterface::class, GoodWeaponFactory::makeAxe());
        self::assertInstanceOf(GoodAxe::class, GoodWeaponFactory::makeAxe());

        // Make bad weapons! >:(
        self::assertInstanceOf(SwordInterface::class, BadWeaponFactory::makeSword());
        self::assertInstanceOf(BadSword::class, BadWeaponFactory::makeSword());
        self::assertInstanceOf(AxeInterface::class, BadWeaponFactory::makeAxe());
        self::assertInstanceOf(BadAxe::class, BadWeaponFactory::makeAxe());
    }

}
