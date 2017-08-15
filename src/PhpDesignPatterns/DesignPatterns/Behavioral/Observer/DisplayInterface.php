<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Observer;

/**
 * Interface DisplayInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface DisplayInterface
{

    /**
     * Display information.
     */
    public function display(): string;
}
