<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Bridge;

/**
 * Class DarkTheme
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class DarkTheme implements ThemeInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Dark Theme';
    }

    /**
     * @inheritDoc
     */
    public function getColor(): string
    {
        return '#000000';
    }

}
