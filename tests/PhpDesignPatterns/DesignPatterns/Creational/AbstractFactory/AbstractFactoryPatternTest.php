<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\AxeWeaponInterface;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadAxeWeapon;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadSwordWeapon;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadWeaponFactory;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodAxeWeapon;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodSwordWeapon;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodWeaponFactory;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\SwordWeaponInterface;
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
        self::assertInstanceOf(SwordWeaponInterface::class, $weaponFactory->makeSword());
        self::assertInstanceOf(GoodSwordWeapon::class, $weaponFactory->makeSword());
        self::assertInstanceOf(AxeWeaponInterface::class, $weaponFactory->makeAxe());
        self::assertInstanceOf(GoodAxeWeapon::class, $weaponFactory->makeAxe());
        self::assertEquals(100, $weaponFactory->makeSword()->getStrength());
        self::assertEquals(80, $weaponFactory->makeAxe()->getStrength());

        /** @var WeaponFactoryInterface $weaponFactory */
        $weaponFactory = new BadWeaponFactory();

        // Make bad weapons! >:(
        self::assertInstanceOf(SwordWeaponInterface::class, $weaponFactory->makeSword());
        self::assertInstanceOf(BadSwordWeapon::class, $weaponFactory->makeSword());
        self::assertInstanceOf(AxeWeaponInterface::class, $weaponFactory->makeAxe());
        self::assertInstanceOf(BadAxeWeapon::class, $weaponFactory->makeAxe());
        self::assertEquals(40, $weaponFactory->makeSword()->getStrength());
        self::assertEquals(20, $weaponFactory->makeAxe()->getStrength());
    }

}
