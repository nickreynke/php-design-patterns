<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\Prototype;

use PhpDesignPatterns\DesignPatterns\Creational\Prototype\Cloneable;
use PhpDesignPatterns\DesignPatterns\Creational\Prototype\Image;
use PhpDesignPatterns\DesignPatterns\Creational\Prototype\ImageFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class PrototypePatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class PrototypePatternTest extends TestCase
{

    public function testPrototypePattern(): void
    {
        $prototypeFactory = new ImageFactory();

        $firstImage = $prototypeFactory->clonePrototype();
        $secondImage = $prototypeFactory->clonePrototype();

        self::assertInstanceOf(Image::class, $firstImage);
        self::assertInstanceOf(Image::class, $secondImage);

        self::assertInstanceOf(Cloneable::class, $firstImage);
        self::assertInstanceOf(Cloneable::class, $secondImage);

        self::assertNotSame($firstImage, $secondImage);
    }

}
