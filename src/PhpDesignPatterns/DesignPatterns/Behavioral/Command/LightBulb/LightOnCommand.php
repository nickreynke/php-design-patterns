<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Class LightOnCommand
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LightOnCommand implements CommandInterface
{

    /**
     * @var LightBulb
     */
    private $receiver;

    /**
     * OnCommand constructor.
     *
     * @param LightBulb $receiver
     */
    public function __construct(LightBulb $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     * @inheritDoc
     */
    public function execute(): void
    {
        $this->receiver->turnOn();
    }

}
