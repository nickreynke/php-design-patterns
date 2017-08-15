<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Behavioral\Strategy;

use PhpDesignPatterns\DesignPatterns\Behavioral\Strategy\Duck;
use PhpDesignPatterns\DesignPatterns\Behavioral\Strategy\NoFlyStrategy;
use PhpDesignPatterns\DesignPatterns\Behavioral\Strategy\NoQuackStrategy;
use PhpDesignPatterns\DesignPatterns\Behavioral\Strategy\SimpleFlyStrategy;
use PhpDesignPatterns\DesignPatterns\Behavioral\Strategy\SimpleQuackStrategy;
use PHPUnit\Framework\TestCase;

/**
 * Class StrategyPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class StrategyPatternTest extends TestCase
{

    public function testStrategyPattern(): void
    {
        // Inject strategies to a new duck.
        $duck = new Duck(new NoFlyStrategy(), new SimpleQuackStrategy());

        // Execute strategies.
        self::assertEquals('It cannot fly!', $duck->fly());
        self::assertEquals('It simply quacked!', $duck->quack());

        // Set different strategies for the duck.
        $duck
            ->setFlyStrategy(new SimpleFlyStrategy())
            ->setQuackStrategy(new NoQuackStrategy());

        // Execute strategies.
        self::assertEquals('It simply flew!', $duck->fly());
        self::assertEquals('It cannot quack!', $duck->quack());
    }

}
