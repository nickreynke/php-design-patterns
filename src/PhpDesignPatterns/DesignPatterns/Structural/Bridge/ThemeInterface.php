<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Bridge;

/**
 * Interface ThemeInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface ThemeInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getColor(): string;
}
