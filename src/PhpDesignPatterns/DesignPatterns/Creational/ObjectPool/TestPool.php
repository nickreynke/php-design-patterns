<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\ObjectPool;

/**
 * Class TestPool
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class TestPool extends \Pool
{

    /**
     * TestPool constructor.
     *
     * @param int $size
     * @param array $ctor
     */
    public function __construct($size, array $ctor = [])
    {
        parent::__construct($size, Connection::class, $ctor);
    }

}
