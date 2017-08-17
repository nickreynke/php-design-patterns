<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Weapon\Decorator;

/**
 * Class ExtraStabilityDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ExtraStabilityWeaponDecorator extends AbstractWeaponDecorator
{

    /**
     * @inheritDoc
     */
    public function getStability(): int
    {
        $newStability = $this->getWrapped()->getStability() + 20;

        if ($newStability > 100) {
            return 100;
        }

        if ($newStability < 0) {
            return 0;
        }

        return $newStability;
    }

}
