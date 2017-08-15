<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\Builder;

use PhpDesignPatterns\DesignPatterns\Creational\Builder\CarToy;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\CheeseBurger;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\CokeDrink;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\KidsMealBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BuilderPatternTest extends TestCase
{

    public function testBuilderPattern(): void
    {
        $mealBuilder = new KidsMealBuilder();

        $mealBuilder->addBurger(new CheeseBurger());
        $mealBuilder->addDrink(new CokeDrink());
        $mealBuilder->addToy(new CarToy());

        $meal = $mealBuilder->getMeal();

        self::assertSame($mealBuilder->getAddedProducts(), $meal->getProducts());
    }

}
