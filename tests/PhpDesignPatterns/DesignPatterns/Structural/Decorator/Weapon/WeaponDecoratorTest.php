<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon;

use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\BaseWeapon;
use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\Decorator\ExtraAmmunitionWeaponDecorator;
use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\Decorator\ExtraStabilityWeaponDecorator;
use PHPUnit\Framework\TestCase;

/**
 * Class WeaponDecoratorTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class WeaponDecoratorTest extends TestCase
{

    public function testWeaponDecoratorPattern(): void
    {
        // Add extra ammunition to new base weapon.
        $weaponDecorator = new ExtraAmmunitionWeaponDecorator(new BaseWeapon());

        self::assertInstanceOf(ExtraAmmunitionWeaponDecorator::class, $weaponDecorator);
        self::assertInstanceOf(BaseWeapon::class, $weaponDecorator->getWrapped());
        self::assertEquals(50, $weaponDecorator->getStability());
        self::assertEquals(75, $weaponDecorator->getMaximumAmountOfAmmunition());

        // Add extra stability to existing decorator.
        $weaponDecorator = new ExtraStabilityWeaponDecorator($weaponDecorator);

        self::assertInstanceOf(ExtraStabilityWeaponDecorator::class, $weaponDecorator);
        self::assertInstanceOf(ExtraAmmunitionWeaponDecorator::class, $weaponDecorator->getWrapped());
        self::assertEquals(70, $weaponDecorator->getStability());
        self::assertEquals(75, $weaponDecorator->getMaximumAmountOfAmmunition());
        self::assertEquals('Weapon', $weaponDecorator->getName());
    }

}
