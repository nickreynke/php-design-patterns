<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder;

/**
 * Class ChickenBurger
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ChickenBurger implements BurgerInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // Just for demonstration purposes.
        return 'Chicken Burger';
    }

}
