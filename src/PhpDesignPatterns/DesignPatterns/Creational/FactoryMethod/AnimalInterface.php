<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\FactoryMethod;

/**
 * Interface AnimalInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface AnimalInterface
{

    /**
     * @return string
     */
    public function getName(): string;

}
