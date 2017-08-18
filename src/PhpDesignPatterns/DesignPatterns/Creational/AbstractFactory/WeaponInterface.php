<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Interface WeaponInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface WeaponInterface
{

    /**
     * Returns the strength of the weapon in percentage from zero (no strength) to 100 (most intensive).
     *
     * @return int
     */
    public function getStrength(): int;

}
