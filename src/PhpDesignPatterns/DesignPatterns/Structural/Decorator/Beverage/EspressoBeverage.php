<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage;

/**
 * Class EspressoBeverage
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class EspressoBeverage implements BeverageInterface
{

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'A base espresso. What else?';
    }

    /**
     * @inheritDoc
     */
    public function getCost(): int
    {
        return 1;
    }

}
