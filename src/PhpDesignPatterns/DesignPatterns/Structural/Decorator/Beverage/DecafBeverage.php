<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage;

/**
 * Class DecafBeverage
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class DecafBeverage implements BeverageInterface
{

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'A base decaf';
    }

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return 2;
    }

}
