<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

/**
 * Interface ConnectionPoolInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface ConnectionPoolInterface
{

    /**
     * @return ConnectionInterface
     */
    public function acquireConnection(): ConnectionInterface;

    /**
     * @param ConnectionInterface $connection
     *
     * @return ConnectionPoolInterface
     *
     * @throws \RuntimeException Thrown if supplied connection wasn't acquired by this pool or was already released.
     */
    public function releaseConnection(ConnectionInterface $connection): ConnectionPoolInterface;

}
