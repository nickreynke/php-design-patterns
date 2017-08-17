<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\Decorator;

use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\WeaponInterface;

/**
 * Class AbstractWeaponDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
abstract class AbstractWeaponDecorator implements WeaponInterface
{

    /**
     * @var WeaponInterface
     */
    private $wrapped;

    /**
     * AbstractWeaponDecorator constructor.
     *
     * @param WeaponInterface $wrapped
     */
    public function __construct(WeaponInterface $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    /**
     * @return WeaponInterface
     */
    public function getWrapped(): WeaponInterface
    {
        return $this->wrapped;
    }

    /**
     * @inheritDoc
     */
    public function aimAndFire(): void
    {
        $this->wrapped->aimAndFire();
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->wrapped->getName();
    }

    /**
     * @inheritDoc
     */
    public function getStability(): int
    {
        return $this->getWrapped()->getStability();
    }

    /**
     * @inheritDoc
     */
    public function getMaximumAmountOfAmmunition(): int
    {
        return $this->getWrapped()->getMaximumAmountOfAmmunition();
    }

}
