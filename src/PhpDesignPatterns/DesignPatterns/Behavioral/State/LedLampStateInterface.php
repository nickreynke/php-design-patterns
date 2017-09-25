<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\State;

/**
 * Interface LedLampInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface LedLampStateInterface
{

    /**
     * Returns the current luminosity of this LED lamp in percent from 0 - 100.
     *
     * @return int
     */
    public function getLuminosity(): int;

}
