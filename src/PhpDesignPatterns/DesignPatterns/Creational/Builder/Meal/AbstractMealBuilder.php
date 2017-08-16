<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Class AbstractMealBuilder
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
abstract class AbstractMealBuilder implements MealBuilderInterface
{

    /**
     * @var ProductInterface[]
     */
    private $addedProducts;

    /**
     * @inheritDoc
     */
    public function addBurger(BurgerInterface $burger): MealBuilderInterface
    {
        $this->addedProducts[] = $burger;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addDrink(DrinkInterface $drink): MealBuilderInterface
    {
        $this->addedProducts[] = $drink;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addToy(ToyInterface $toy): MealBuilderInterface
    {
        $this->addedProducts[] = $toy;

        return $this;
    }

    /**
     * @return ProductInterface[]
     */
    public function getAddedProducts(): array
    {
        return $this->addedProducts;
    }

}
