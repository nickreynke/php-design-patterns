<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\State;

/**
 * Class LedLampOffState
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LedLampOffState implements LedLampStateInterface
{

    /**
     * @inheritDoc
     */
    public function getLuminosity(): int
    {
        return 0;
    }

}
