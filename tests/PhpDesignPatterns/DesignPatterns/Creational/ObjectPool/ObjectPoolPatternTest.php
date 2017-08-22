<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

use PhpDesignPatterns\DesignPatterns\Creational\ObjectPool\ConnectionPool;
use PhpDesignPatterns\DesignPatterns\Creational\ObjectPool\ConnectionPoolInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class ObjectPoolPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ObjectPoolPatternTest extends TestCase
{

    public function testObjectPoolPattern(): void
    {
        /** @var ConnectionPoolInterface $connectionPool */
        $connectionPool = new ConnectionPool();

        $connection = $connectionPool->acquireConnection();

        self::assertFalse($connection->isOpened());
        $connection->open();
        self::assertTrue($connection->isOpened());

        $connectionPool->releaseConnection($connection);
        self::assertFalse($connection->isOpened());

        $connectionOne = $connectionPool->acquireConnection();
        $connectionTwo = $connectionPool->acquireConnection();

        self::assertNotSame($connectionOne, $connectionTwo);
    }

}
