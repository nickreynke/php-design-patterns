<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Command\LightBulb;

/**
 * Interface CommandInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface CommandInterface
{

    /**
     * Runs this command.
     */
    public function execute(): void;

}
