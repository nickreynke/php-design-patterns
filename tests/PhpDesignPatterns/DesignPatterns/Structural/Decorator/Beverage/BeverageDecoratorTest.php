<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage;

use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator\CaramelBeverageDecorator;
use PhpDesignPatterns\DesignPatterns\Structural\Decorator\Beverage\Decorator\SoyBeverageDecorator;
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
        $beverageDecorator = new CaramelBeverageDecorator(new SoyBeverageDecorator(new EspressoBeverage()));

        // Get the cost and description hierarchically.
        self::assertEquals(4, $beverageDecorator->getCost());
        self::assertEquals('An espresso. What else?', $beverageDecorator->getDescription());

        self::assertInstanceOf(CaramelBeverageDecorator::class, $beverageDecorator);
        self::assertInstanceOf(SoyBeverageDecorator::class, $beverageDecorator->getWrapped());

        /** @var SoyBeverageDecorator $decorator */
        $decorator = $beverageDecorator->getWrapped();
        $beverage = $decorator->getWrapped();

        self::assertInstanceOf(EspressoBeverage::class, $beverage);
    }

}
