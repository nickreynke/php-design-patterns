<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class BadWeaponFactory
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BadWeaponFactory implements WeaponFactoryInterface
{

    /**
     * @inheritDoc
     */
    public static function makeSword(): SwordInterface
    {
        return new BadSword();
    }

    /**
     * @inheritDoc
     */
    public static function makeAxe(): AxeInterface
    {
        return new BadAxe();
    }

}