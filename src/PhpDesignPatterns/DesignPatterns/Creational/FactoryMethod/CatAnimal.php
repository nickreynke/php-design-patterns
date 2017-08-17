<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Class CatAnimal
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CatAnimal implements AnimalInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'A cat';
    }

}
