<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class BadAxe
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BadAxeWeapon implements AxeWeaponInterface
{

    /**
     * @inheritDoc
     */
    public function getStrength(): int
    {
        return 20;
    }

}
