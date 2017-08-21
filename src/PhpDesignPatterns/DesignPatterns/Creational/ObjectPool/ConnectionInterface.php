<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

/**
 * Interface Connection
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface ConnectionInterface
{

    /**
     * @return ConnectionInterface
     */
    public function open(): ConnectionInterface;

    /**
     * Close the connection.
     */
    public function close(): void;

    /**
     * Whether this connection is opened by its `open()` method.
     *
     * @return bool
     */
    public function isOpened(): bool;

}
