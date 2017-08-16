<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

use PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal\CarToy;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal\CheeseBurger;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal\CokeDrink;
use PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal\KidsMealBuilder;
use PHPUnit\Framework\TestCase;

/**
 * Class BuilderPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class MealBuilderPatternTest extends TestCase
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
