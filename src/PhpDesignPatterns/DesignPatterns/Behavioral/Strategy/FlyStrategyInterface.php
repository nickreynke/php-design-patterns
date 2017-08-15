<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Interface FlyStrategyInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface FlyStrategyInterface
{

    /**
     * Let the object fly.
     */
    public function fly(): string;
}
