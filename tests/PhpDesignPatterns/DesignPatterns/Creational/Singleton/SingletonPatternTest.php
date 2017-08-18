<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\Singleton;

use PhpDesignPatterns\DesignPatterns\Creational\Singleton\Singleton;
use PHPUnit\Framework\TestCase;

/**
 * Class SingletonPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class SingletonPatternTest extends TestCase
{

    public function testSingletonPattern(): void
    {
        $singletonOne = Singleton::getInstance();
        $singletonTwo = Singleton::getInstance();

        self::assertSame($singletonOne, $singletonTwo);
    }

}
