<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Adapter;

/**
 * Class ExternalPlugAdaptee
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ExternalPlugAdaptee
{

    public function specificPlugIn(): void
    {
        // Woohoo I do something specific! :o
    }

}
