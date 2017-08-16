<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Class CheeseBurger
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CheeseBurger implements BurgerInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // Just for demonstration purposes.
        return 'Cheeseburger';
    }

}
