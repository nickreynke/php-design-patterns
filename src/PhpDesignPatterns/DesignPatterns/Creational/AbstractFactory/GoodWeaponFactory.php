<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class GoodWeaponFactory
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class GoodWeaponFactory implements WeaponFactoryInterface
{

    /**
     * @inheritDoc
     */
    public static function makeSword(): SwordInterface
    {
        return new GoodSword();
    }

    /**
     * @inheritDoc
     */
    public static function makeAxe(): AxeInterface
    {
        return new GoodAxe();
    }

}
