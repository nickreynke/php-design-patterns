<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

/**
 * Class Connection
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Connection implements ConnectionInterface
{

    /**
     * @var bool
     */
    private $opened;

    /**
     * Connection constructor.
     */
    public function __construct()
    {
        $this->opened = false;
    }

    /**
     * @inheritDoc
     */
    public function open(): ConnectionInterface
    {
        $this->opened = true;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function close(): void
    {
        $this->opened = false;
    }

    /**
     * @inheritDoc
     */
    public function isOpened(): bool
    {
        return $this->opened;
    }

}
