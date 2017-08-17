<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator;

use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\BeverageInterface;

/**
 * Class BeverageDecorator
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
abstract class BeverageDecorator implements BeverageInterface
{

    /**
     * Beverage wrapped by this decorator.
     *
     * @var BeverageInterface
     */
    private $wrapped;

    /**
     * BeverageDecorator constructor.
     *
     * @param BeverageInterface $wrapped Beverage wrapped by this decorator.
     */
    public function __construct(BeverageInterface $wrapped)
    {
        $this->wrapped = $wrapped;
    }

    /**
     * Returns the beverage wrapped by this decorator.
     *
     * @return BeverageInterface
     */
    public function getWrapped(): BeverageInterface
    {
        return $this->wrapped;
    }

}
