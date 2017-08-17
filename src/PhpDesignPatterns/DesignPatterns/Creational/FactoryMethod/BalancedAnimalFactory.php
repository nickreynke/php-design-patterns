<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Class BalancedAnimalFactory
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BalancedAnimalFactory implements AnimalFactoryInterface
{

    /**
     * @var array
     */
    private $availableAnimalClassPaths = [
        CatAnimal::class,
        DuckAnimal::class,
    ];

    /**
     * @var array
     */
    private $usedAnimalClassPaths = [];

    /**
     * @inheritDoc
     */
    public function makeAnimal(): AnimalInterface
    {
        return $this->getBalancedAnimal();
    }

    /**
     * @return AnimalInterface
     */
    protected function getBalancedAnimal(): AnimalInterface
    {
        // If no more animal class path are available => reset.
        if (empty($this->availableAnimalClassPaths)) {
            $this->availableAnimalClassPaths = $this->usedAnimalClassPaths;
            $this->usedAnimalClassPaths = [];
        }

        $randomAnimalClassPathKey = array_rand($this->availableAnimalClassPaths, 1);
        $randomAnimalClassPath = $this->availableAnimalClassPaths[$randomAnimalClassPathKey];

        // Remove random animal class path from available class paths array by its key.
        unset($this->availableAnimalClassPaths[$randomAnimalClassPathKey]);

        // Add the random animal class path to the array containing used class paths;
        $this->usedAnimalClassPaths[] = $randomAnimalClassPath;

        return new $randomAnimalClassPath();
    }

}
