<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Interface MealInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface MealInterface
{

    /**
     * @return ProductInterface[]
     */
    public function getProducts(): array;

    /**
     * @param ProductInterface[] $products
     *
     * @return MealInterface
     */
    public function setProducts(array $products): MealInterface;

}
