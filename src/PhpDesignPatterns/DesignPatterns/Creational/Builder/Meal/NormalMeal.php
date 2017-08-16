<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Class NormalMeal
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class NormalMeal implements MealInterface
{

    /**
     * @var ProductInterface[]
     */
    private $products;

    /**
     * @inheritDoc
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @inheritDoc
     */
    public function setProducts(array $products): MealInterface
    {
        $this->products = $products;

        return $this;
    }

}
