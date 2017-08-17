<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator;

/**
 * Class SoyDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class SoyBeverageDecorator extends BeverageDecorator
{

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return $this->getWrapped()->getCost() + 1;
    }

}
