<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\Decorator;

/**
 * Class ExtraAmmunitionDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ExtraAmmunitionWeaponDecorator extends AbstractWeaponDecorator
{

    /**
     * @inheritDoc
     */
    public function getMaximumAmountOfAmmunition(): int
    {
        return $this->getWrapped()->getMaximumAmountOfAmmunition() + 25;
    }

}
