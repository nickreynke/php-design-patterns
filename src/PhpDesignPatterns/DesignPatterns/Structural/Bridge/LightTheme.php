<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Bridge;

/**
 * Class LightTheme
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class LightTheme implements ThemeInterface
{

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Light Theme';
    }

    /**
     * @inheritDoc
     */
    public function getColor(): string
    {
        return '#ffffff';
    }

}
