<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder;

/**
 * Class NormalMealBuilder
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class NormalMealBuilder extends AbstractMealBuilder
{

    /**
     * @inheritDoc
     */
    public function getMeal(): MealInterface
    {
        return (new NormalMeal())
            ->setProducts($this->getAddedProducts());
    }

}
