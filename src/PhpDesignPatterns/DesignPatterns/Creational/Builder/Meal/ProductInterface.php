<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Builder\Meal;

/**
 * Interface ProductInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface ProductInterface
{

    /**
     * @return string
     */
    public function getName(): string;

}
