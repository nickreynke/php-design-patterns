<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Class LightOffCommand
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LightOffCommand implements CommandInterface
{

    /**
     * @var LightBulb
     */
    private $receiver;

    /**
     * OffCommand constructor.
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
        $this->receiver->turnOff();
    }

}
