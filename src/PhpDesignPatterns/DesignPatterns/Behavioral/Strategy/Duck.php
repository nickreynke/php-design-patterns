<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

/**
 * Class Duck
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Duck implements DuckInterface
{

    /**
     * @var FlyStrategyInterface
     */
    private $flyStrategy;

    /**
     * @var QuackStrategyInterface
     */
    private $quackStrategy;

    /**
     * Duck constructor.
     *
     * @param FlyStrategyInterface $flyStrategy
     * @param QuackStrategyInterface $quackStrategy
     */
    public function __construct(FlyStrategyInterface $flyStrategy, QuackStrategyInterface $quackStrategy)
    {
        $this->flyStrategy = $flyStrategy;
        $this->quackStrategy = $quackStrategy;
    }

    /**
     * @inheritDoc
     */
    public function setFlyStrategy(FlyStrategyInterface $flyStrategy): DuckInterface
    {
        $this->flyStrategy = $flyStrategy;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function fly(): string
    {
        return $this->flyStrategy->fly();
    }

    /**
     * @inheritDoc
     */
    public function setQuackStrategy(QuackStrategyInterface $quackStrategy): DuckInterface
    {
        $this->quackStrategy = $quackStrategy;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function quack(): string
    {
        return $this->quackStrategy->quack();
    }

}
