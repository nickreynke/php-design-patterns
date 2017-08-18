<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Creational\Singleton;

/**
 * Class Singleton
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Singleton
{

    /**
     * @var Singleton
     */
    private static $instance;

    /**
     * Singleton constructor.
     *
     * Prohibit object instantiation from the outside.
     */
    protected function __construct()
    {
    }

    /**
     * Prohibit object cloning.
     */
    final private function __clone()
    {
    }

    /**
     * @return Singleton
     */
    public static function getInstance(): Singleton
    {
        // If the instance isn't instantiated yet > instantiate it!
        if (self::$instance === null) {
            self::$instance = new self();
        }

        // ... and return it.
        return self::$instance;
    }

}
