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
    public function makeSword(): SwordWeaponInterface
    {
        return new BadSwordWeapon();
    }

    /**
     * @inheritDoc
     */
    public function makeAxe(): AxeWeaponInterface
    {
        return new BadAxeWeapon();
    }

}
