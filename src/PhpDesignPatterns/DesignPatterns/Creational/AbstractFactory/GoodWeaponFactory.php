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
    public function makeSword(): SwordInterface
    {
        return new GoodSword();
    }

    /**
     * @inheritDoc
     */
    public function makeAxe(): AxeInterface
    {
        return new GoodAxe();
    }

}
