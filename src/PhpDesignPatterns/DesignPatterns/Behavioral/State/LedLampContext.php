<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\State;

/**
 * Class LedLampContext
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LedLampContext implements LedLampStateInterface
{

    /**
     * @var LedLampStateInterface
     */
    private $state;

    /**
     * LedLampContext constructor.
     *
     * @param LedLampStateInterface $state
     */
    public function __construct(LedLampStateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @return LedLampStateInterface
     */
    public function getState(): LedLampStateInterface
    {
        return $this->state;
    }

    /**
     * @param LedLampStateInterface $state
     */
    public function setState(LedLampStateInterface $state)
    {
        $this->state = $state;
    }

    /**
     * @inheritDoc
     */
    public function getLuminosity(): int
    {
        return $this->state->getLuminosity();
    }

}
