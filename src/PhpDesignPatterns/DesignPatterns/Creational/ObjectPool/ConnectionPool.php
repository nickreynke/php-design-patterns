<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

/**
 * Class ConnectionPool
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ConnectionPool implements ConnectionPoolInterface
{

    /**
     * @var ConnectionInterface[]
     */
    private $occupiedConnections = [];

    /**
     * @var ConnectionInterface[]
     */
    private $freeConnections = [];

    /**
     * @inheritdoc
     */
    public function acquireConnection(): ConnectionInterface
    {
        if (empty($this->freeConnections)) {
            $connection = new Connection();
        } else {
            $connection = array_pop($this->freeConnections);
        }

        $this->occupiedConnections[$this->hashConnectionObject($connection)] = $connection;

        return $connection;
    }

    /**
     * @inheritdoc
     */
    public function releaseConnection(ConnectionInterface $connection): ConnectionPoolInterface
    {
        $connectionObjectHash = $this->hashConnectionObject($connection);

        if (!array_key_exists($connectionObjectHash, $this->occupiedConnections)) {
            throw new \RuntimeException(
                'Error releasing connection: Supplied connection wasn\'t acquired by this pool or was already released.'
            );
        }

        if ($connection->isOpened()) {
            $connection->close();
        }

        unset($this->occupiedConnections[$connectionObjectHash]);
        $this->freeConnections[$connectionObjectHash] = $connection;

        return $this;
    }

    /**
     * @param ConnectionInterface $connection
     *
     * @return string
     */
    protected function hashConnectionObject(ConnectionInterface $connection): string
    {
        return spl_object_hash($connection);
    }

}
