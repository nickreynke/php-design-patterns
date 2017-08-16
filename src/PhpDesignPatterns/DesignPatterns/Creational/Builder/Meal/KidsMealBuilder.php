<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Class KidsMealBuilder
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class KidsMealBuilder extends AbstractMealBuilder
{

    /**
     * @inheritDoc
     */
    public function getMeal(): MealInterface
    {
        return (new KidsMeal())
            ->setProducts($this->getAddedProducts());
    }

}
