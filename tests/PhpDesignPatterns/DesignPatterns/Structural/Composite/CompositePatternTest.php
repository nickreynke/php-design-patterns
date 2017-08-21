<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Composite;

use PhpDesignPatterns\DesignPatterns\Structural\Composite\Directory;
use PhpDesignPatterns\DesignPatterns\Structural\Composite\File;
use PHPUnit\Framework\TestCase;

/**
 * Class CompositePatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class CompositePatternTest extends TestCase
{

    public function testCompositePattern(): void
    {
        $directory = new Directory();
        $directory->setName('Example folder');

        $secondDirectory = new Directory();
        $secondDirectory->setName('Second example folder');

        $file = new File();
        $file->setName('Example file');

        $secondDirectory->addFilesystemItem($file);
        $directory->addFilesystemItem($secondDirectory);

        self::assertFalse($directory->hasFilesystemItem($file));
        self::assertTrue($directory->hasFilesystemItem($secondDirectory));
        self::assertTrue($secondDirectory->hasFilesystemItem($file));
        self::assertTrue($directory->hasFilesystemItem($file, true));
    }

}
