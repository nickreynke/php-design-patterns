<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class BadSword
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BadSwordWeapon implements SwordWeaponInterface
{

    /**
     * @inheritDoc
     */
    public function getStrength(): int
    {
        return 40;
    }

}
