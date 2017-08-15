<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Interface QuackStrategyInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface QuackStrategyInterface
{

    /**
     * Let the object quack.
     */
    public function quack(): string;
}
