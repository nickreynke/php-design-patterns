<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Composite;

/**
 * Interface FilesystemItemInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface FilesystemItemInterface
{

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @param string $name
     *
     * @return void
     */
    public function setName(string $name): void;

}
