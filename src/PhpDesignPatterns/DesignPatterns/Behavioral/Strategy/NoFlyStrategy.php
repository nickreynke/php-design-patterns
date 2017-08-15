<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Class NoFlyStrategy
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class NoFlyStrategy implements FlyStrategyInterface
{

    /**
     * @inheritDoc
     */
    public function fly(): string
    {
        // Just for demonstration purposes.
        return 'It cannot fly!';
    }

}
