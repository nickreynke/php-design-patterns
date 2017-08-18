<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Class GoodAxe
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class GoodAxeWeapon implements AxeWeaponInterface
{

    /**
     * @inheritDoc
     */
    public function getStrength(): int
    {
        return 80;
    }

}
