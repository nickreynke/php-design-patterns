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
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\WeaponFactoryInterface;
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
        /** @var WeaponFactoryInterface $weaponFactory */
        $weaponFactory = new GoodWeaponFactory();

        // Make good weapons! >:D
        self::assertInstanceOf(SwordInterface::class, $weaponFactory->makeSword());
        self::assertInstanceOf(GoodSword::class, $weaponFactory->makeSword());
        self::assertInstanceOf(AxeInterface::class, $weaponFactory->makeAxe());
        self::assertInstanceOf(GoodAxe::class, $weaponFactory->makeAxe());

        /** @var WeaponFactoryInterface $weaponFactory */
        $weaponFactory = new BadWeaponFactory();

        // Make bad weapons! >:(
        self::assertInstanceOf(SwordInterface::class, $weaponFactory->makeSword());
        self::assertInstanceOf(BadSword::class, $weaponFactory->makeSword());
        self::assertInstanceOf(AxeInterface::class, $weaponFactory->makeAxe());
        self::assertInstanceOf(BadAxe::class, $weaponFactory->makeAxe());
    }

}
