<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Adapter;

/**
 * Class EuropeanPlug
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class EuropeanPlug implements PlugInterface
{

    /**
     * @inheritDoc
     */
    public function plugIn(): string
    {
        return 'Plugged in european specific plug.';
    }

}
