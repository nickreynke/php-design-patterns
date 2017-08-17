<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator;

/**
 * Class SoyDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class SoyDecorator extends BeverageDecorator
{

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'Some soy';
    }

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return 1;
    }

}
