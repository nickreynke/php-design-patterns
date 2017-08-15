<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Structural\Bridge;

use PhpDesignPatterns\DesignPatterns\Structural\Bridge\DarkTheme;
use PhpDesignPatterns\DesignPatterns\Structural\Bridge\LightTheme;
use PhpDesignPatterns\DesignPatterns\Structural\Bridge\Page;
use PHPUnit\Framework\TestCase;

/**
 * Class BridgePatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class BridgePatternTest extends TestCase
{

    public function testBridgePattern(): void
    {
        // Create themes.
        $darkTheme = new DarkTheme();
        $lightTheme = new LightTheme();

        // Create page.
        $page = (new Page())
            ->setTitle('Example Page')
            ->setContent('Content');

        // Inject theme.
        // We can inject everything here that implements the "ThemeInterface".
        $page->setTheme($lightTheme);

        // Assert page content.
        self::assertEquals('Example Page: Content with theme "Light Theme".', $page->getContent());

        // Inject different theme.
        $page->setTheme($darkTheme);

        // Assert page content.
        self::assertEquals('Example Page: Content with theme "Dark Theme".', $page->getContent());
    }

}
