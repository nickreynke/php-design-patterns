<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator;

/**
 * Class CaramelDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CaramelBeverageDecorator extends BeverageDecorator
{

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return $this->getWrapped()->getCost() + 2;
    }

}
