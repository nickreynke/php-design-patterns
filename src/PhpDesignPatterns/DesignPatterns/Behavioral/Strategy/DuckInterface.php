<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Interface DuckInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface DuckInterface
{

    /**
     * @param FlyStrategyInterface $flyStrategy
     *
     * @return DuckInterface
     */
    public function setFlyStrategy(FlyStrategyInterface $flyStrategy): DuckInterface;

    /**
     * Let the duck fly.
     */
    public function fly(): string;

    /**
     * @param QuackStrategyInterface $quackStrategy
     *
     * @return DuckInterface
     */
    public function setQuackStrategy(QuackStrategyInterface $quackStrategy): DuckInterface;

    /**
     * Let the duck quack.
     */
    public function quack(): string;

}
