<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Class LightBulb
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LightBulb implements CommandReceiverInterface, Switchable
{

    /**
     * @var bool
     */
    private $lightOn = false;

    /**
     * Turns on the light of the light bulb.
     */
    public function turnOn(): void
    {
        $this->lightOn = true;
    }

    /**
     * Turns off the light of the light bulb.
     */
    public function turnOff(): void
    {
        $this->lightOn = false;
    }

    /**
     * @return bool
     */
    public function isLightOn(): bool
    {
        return $this->lightOn;
    }

}
