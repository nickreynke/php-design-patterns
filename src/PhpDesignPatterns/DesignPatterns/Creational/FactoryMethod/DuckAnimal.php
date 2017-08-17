<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Class DuckAnimal
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class DuckAnimal implements AnimalInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'A duck';
    }

}
