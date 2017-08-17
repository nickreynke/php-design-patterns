<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator;

/**
 * Class CaramelDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CaramelDecorator extends BeverageDecorator
{

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Some caramel';
    }

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return 2;
    }

}
