<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Class SimpleQuackStrategy
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class SimpleQuackStrategy implements QuackStrategyInterface
{

    /**
     * @inheritDoc
     */
    public function quack(): string
    {
        // Just for demonstration purposes.
        return 'It simply quacked!';
    }

}
