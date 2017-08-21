<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Adapter;

/**
 * Class UsaPlug
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class UsaPlug implements PlugInterface
{

    /**
     * @inheritDoc
     */
    public function plugIn(): string
    {
        return 'Plugged in USA specific plug.';
    }

}
