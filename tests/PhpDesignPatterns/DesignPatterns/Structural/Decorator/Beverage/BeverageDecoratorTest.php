<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage;

use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator\CaramelDecorator;
use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator\SoyDecorator;
use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\EspressoBeverage;
use PHPUnit\Framework\TestCase;

/**
 * Class BeverageDecoratorTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BeverageDecoratorTest extends TestCase
{

    public function testBeverageDecoratorPattern(): void
    {
        $beverageDecorator = new CaramelDecorator(new SoyDecorator(new EspressoBeverage()));

        // Get the cost and description hierarchically.
        self::assertEquals(4, $beverageDecorator->getCost());
        self::assertEquals('An espresso. What else?', $beverageDecorator->getDescription());

        self::assertInstanceOf(CaramelDecorator::class, $beverageDecorator);
        self::assertInstanceOf(SoyDecorator::class, $beverageDecorator->getWrapped());

        /** @var SoyDecorator $decorator */
        $decorator = $beverageDecorator->getWrapped();
        $beverage = $decorator->getWrapped();

        self::assertInstanceOf(EspressoBeverage::class, $beverage);
    }

}
