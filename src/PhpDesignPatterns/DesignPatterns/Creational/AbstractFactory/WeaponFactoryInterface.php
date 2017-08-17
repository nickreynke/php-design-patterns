<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Interface WeaponFactoryInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface WeaponFactoryInterface
{

    /**
     * @return SwordInterface
     */
    public function makeSword(): SwordInterface;

    /**
     * @return AxeInterface
     */
    public function makeAxe(): AxeInterface;

}
