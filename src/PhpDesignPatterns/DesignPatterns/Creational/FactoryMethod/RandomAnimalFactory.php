<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Class RandomAnimalFactory
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class RandomAnimalFactory implements AnimalFactoryInterface
{

    /**
     * @var array
     */
    private $availableAnimalClassPaths = [
        CatAnimal::class,
        DuckAnimal::class,
    ];

    /**
     * @inheritDoc
     */
    public function makeAnimal(): AnimalInterface
    {
        return $this->getRandomAnimal();
    }

    /**
     * @return AnimalInterface
     */
    protected function getRandomAnimal(): AnimalInterface
    {
        $randomAnimalClassPathKey = array_rand($this->availableAnimalClassPaths, 1);
        $randomAnimalClassPath = $this->availableAnimalClassPaths[$randomAnimalClassPathKey];

        return new $randomAnimalClassPath();
    }

}
