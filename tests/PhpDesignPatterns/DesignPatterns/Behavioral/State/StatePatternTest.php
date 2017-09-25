<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Behavioral\State;

use PhpDesignPatterns\DesignPatterns\Behavioral\State\LedLampContext;
use PhpDesignPatterns\DesignPatterns\Behavioral\State\LedLampDimmedState;
use PhpDesignPatterns\DesignPatterns\Behavioral\State\LedLampFullPowerState;
use PHPUnit\Framework\TestCase;

/**
 * Class StatePatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class StatePatternTest extends TestCase
{

    public function testStatePattern(): void
    {
        $ledLampContext = new LedLampContext(new LedLampDimmedState());

        self::assertInstanceOf(LedLampDimmedState::class, $ledLampContext->getState());
        self::assertEquals(50, $ledLampContext->getLuminosity());

        $ledLampContext->setState(new LedLampFullPowerState());

        self::assertEquals(100, $ledLampContext->getLuminosity());
    }

}
