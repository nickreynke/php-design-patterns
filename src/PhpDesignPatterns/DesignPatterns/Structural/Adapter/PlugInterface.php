<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Adapter;

/**
 * Interface PlugInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface PlugInterface
{

    /**
     * @return string
     */
    public function plugIn(): string;

}
