<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\State;

/**
 * Class LedLampDimmedState
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LedLampDimmedState implements LedLampStateInterface
{

    /**
     * @inheritDoc
     */
    public function getLuminosity(): int
    {
        return 50;
    }

}
