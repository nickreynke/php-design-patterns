<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Class NoQuackStrategy
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class NoQuackStrategy implements QuackStrategyInterface
{

    /**
     * @inheritDoc
     */
    public function quack(): string
    {
        // Just for demonstration purposes.
        return 'It cannot quack!';
    }

}
