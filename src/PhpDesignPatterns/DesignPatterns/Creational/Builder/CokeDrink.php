<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder;

/**
 * Class Coke
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CokeDrink implements DrinkInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        // Just for demonstration purposes.
        return 'Coke';
    }

}
