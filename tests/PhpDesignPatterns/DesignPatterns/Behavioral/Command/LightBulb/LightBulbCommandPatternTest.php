<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Behavioral\Command;

use PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb\ButtonStickCommandInvoker;
use PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb\LightBulb;
use PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb\LightOffCommand;
use PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb\LightOnCommand;
use PHPUnit\Framework\TestCase;

/**
 * Class CommandPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LightBulbCommandPatternTest extends TestCase
{

    public function testLightBulbCommandPattern(): void
    {
        $commandReceiver = new LightBulb();

        $onCommand = new LightOnCommand($commandReceiver);
        $offCommand = new LightOffCommand($commandReceiver);

        $commandInvoker = new ButtonStickCommandInvoker($onCommand, $offCommand);

        $commandInvoker->clickOn();
        self::assertTrue($commandReceiver->isLightOn());

        $commandInvoker->clickOff();
        self::assertFalse($commandReceiver->isLightOn());
    }

}
