<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder;

/**
 * Interface BagBuilderInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface MealBuilderInterface
{

    /**
     * @param BurgerInterface $burger
     *
     * @return MealBuilderInterface
     */
    public function addBurger(BurgerInterface $burger): MealBuilderInterface;

    /**
     * @param DrinkInterface $drink
     *
     * @return MealBuilderInterface
     */
    public function addDrink(DrinkInterface $drink): MealBuilderInterface;

    /**
     * @param ToyInterface $toy
     *
     * @return MealBuilderInterface
     */
    public function addToy(ToyInterface $toy): MealBuilderInterface;

    /**
     * @return MealInterface
     */
    public function getMeal(): MealInterface;

}
