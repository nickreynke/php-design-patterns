<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Class SimpleFlyStrategy
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class SimpleFlyStrategy implements FlyStrategyInterface
{

    /**
     * @inheritDoc
     */
    public function fly(): string
    {
        // Just for demonstration purposes.
        return 'It simply flew!';
    }

}
