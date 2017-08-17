<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

use PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod\AnimalInterface;
use PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod\BalancedAnimalFactory;
use PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod\RandomAnimalFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class FactoryMethodTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class FactoryMethodPatternTest extends TestCase
{

    public function testFactoryMethodPattern(): void
    {
        $animalFactory = new BalancedAnimalFactory();

        // Be sure that there is always an animal returned by the factory.
        for ($i = 0; $i < 4; $i++) {
            self::assertInstanceOf(AnimalInterface::class, $animalFactory->makeAnimal());
        }

        $animalFactory = new RandomAnimalFactory();

        // Be sure that there is always an animal returned by the factory.
        for ($i = 0; $i < 4; $i++) {
            self::assertInstanceOf(AnimalInterface::class, $animalFactory->makeAnimal());
        }
    }

}
