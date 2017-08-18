<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class GoodSword
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class GoodSwordWeapon implements SwordWeaponInterface
{

    /**
     * @inheritDoc
     */
    public function getStrength(): int
    {
        return 100;
    }

}
