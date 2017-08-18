<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory;

/**
 * Interface WeaponFactoryInterface
 *
 * Multiple "factory method"s.
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface WeaponFactoryInterface
{

    /**
     * First "factory method".
     *
     * @return SwordWeaponInterface
     */
    public function makeSword(): SwordWeaponInterface;

    /**
     * Second "factory method".
     *
     * @return AxeWeaponInterface
     */
    public function makeAxe(): AxeWeaponInterface;

}
