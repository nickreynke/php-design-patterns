<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\PrivateClassData;

use PhpDesignPatterns\DesignPatterns\Structural\PrivateClassData\DataClass;
use PhpDesignPatterns\DesignPatterns\Structural\PrivateClassData\MainClass;
use PHPUnit\Framework\TestCase;

/**
 * Class PrivateClassDataPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class PrivateClassDataPatternTest extends TestCase
{

    public function testPrivateClassDataPattern(): void
    {
        $attribute1 = 'Test';
        $attribute2 = 123;
        $attribute3 = 1.23;

        $mainClass = new MainClass($attribute1, $attribute2, $attribute3);
        $dataClass = $mainClass->getDataClass();

        self::assertEquals($attribute1, $dataClass->getAttribute1());
        self::assertEquals($attribute2, $dataClass->getAttribute2());
        self::assertEquals($attribute3, $dataClass->getAttribute3());
    }

}
