<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Adapter;

use PhpDesignPatterns\DesignPatterns\Structural\Adapter\EuropeanPlug;
use PhpDesignPatterns\DesignPatterns\Structural\Adapter\ExternalPlugAdaptee;
use PhpDesignPatterns\DesignPatterns\Structural\Adapter\PlugAdapter;
use PhpDesignPatterns\DesignPatterns\Structural\Adapter\PlugInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class AdapterPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class AdapterPatternTest extends TestCase
{

    public function testAdapterPattern(): void
    {
        $externalAdaptee = new ExternalPlugAdaptee();
        $plug = new PlugAdapter($externalAdaptee);

        self::assertInstanceOf(PlugInterface::class, $plug);
        self::assertEquals('Adapted plug and plugged it in.', $plug->plugIn());

        $plug = new EuropeanPlug();
        self::assertEquals('Plugged in european specific plug.', $plug->plugIn());
    }

}
