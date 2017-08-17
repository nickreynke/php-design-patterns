<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage;

/**
 * Interface AbstractBeverage
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface BeverageInterface
{

    /**
     * Get the description of this beverage.
     *
     * @return string
     */
    public function getDescription(): string;

    /**
     * Get the cost of this beverage.
     *
     * @return int
     */
    public function getCost(): int;

}
