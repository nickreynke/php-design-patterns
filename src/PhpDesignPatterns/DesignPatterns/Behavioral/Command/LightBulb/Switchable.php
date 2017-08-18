<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Interface Switchable
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface Switchable
{

    /**
     * Changes the state of this object to `on`.
     */
    public function turnOn(): void;

    /**
     * Changes the state of this object to `off`.
     */
    public function turnOff(): void;

}
