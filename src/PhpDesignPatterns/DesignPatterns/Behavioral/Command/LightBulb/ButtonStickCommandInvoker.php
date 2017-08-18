<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Class ButtonStickCommandInvoker
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ButtonStickCommandInvoker implements CommandInvokerInterface
{

    /**
     * @var LightOnCommand
     */
    private $lightOnCommand;

    /**
     * @var LightOffCommand
     */
    private $lightOffCommand;

    /**
     * ButtonStickCommandInvoker constructor.
     *
     * @param LightOnCommand $lightOnCommand
     * @param LightOffCommand $lightOffCommand
     */
    public function __construct(LightOnCommand $lightOnCommand, LightOffCommand $lightOffCommand)
    {
        $this->lightOnCommand = $lightOnCommand;
        $this->lightOffCommand = $lightOffCommand;
    }

    /**
     * Clicking the `on` button.
     */
    public function clickOn(): void
    {
        $this->lightOnCommand->execute();
    }

    /**
     * Clicking the `off` button.
     */
    public function clickOff(): void
    {
        $this->lightOffCommand->execute();
    }

}
