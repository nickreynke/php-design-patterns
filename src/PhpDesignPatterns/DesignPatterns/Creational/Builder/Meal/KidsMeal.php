<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Class KidsMeal
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class KidsMeal implements MealInterface
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
