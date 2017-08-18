<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Interface AnimalFactoryInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface AnimalFactoryInterface
{

    /**
     * The actual "factory method".
     *
     * @return AnimalInterface
     */
    public function makeAnimal(): AnimalInterface;

}
