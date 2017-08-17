<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon;

/**
 * Interface WeaponInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface WeaponInterface
{

    public function aimAndFire(): void;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * Gets the stability in percent from 0 (no stability) to 100 (maximum stability).
     *
     * @return int
     */
    public function getStability(): int;

    /**
     * @return int
     */
    public function getMaximumAmountOfAmmunition(): int;
}
