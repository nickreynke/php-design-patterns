<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon;

/**
 * Class BaseWeapon
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BaseWeapon implements WeaponInterface
{

    /**
     * @inheritDoc
     */
    public function aimAndFire(): void
    {
        // Aim and fire!
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Weapon';
    }

    /**
     * @inheritDoc
     */
    public function getStability(): int
    {
        return 50;
    }

    /**
     * @inheritDoc
     */
    public function getMaximumAmountOfAmmunition(): int
    {
        return 50;
    }

}
