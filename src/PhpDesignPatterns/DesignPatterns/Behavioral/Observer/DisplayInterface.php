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
     * @return int
     */
    public function getCurrentTemperature(): int;

    /**
     * Display information.
     *
     * @return string
     */
    public function display(): string;
}
