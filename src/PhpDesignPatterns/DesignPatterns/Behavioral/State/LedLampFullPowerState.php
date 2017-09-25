<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\State;

/**
 * Class LedLampFullPowerState
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LedLampFullPowerState implements LedLampStateInterface
{

    /**
     * @inheritDoc
     */
    public function getLuminosity(): int
    {
        return 100;
    }

}
