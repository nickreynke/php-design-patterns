<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Adapter;

/**
 * Class PlugAdapter
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class PlugAdapter implements PlugInterface
{

    /**
     * @var ExternalPlugAdaptee
     */
    private $adaptee;

    /**
     * PlugAdapter constructor.
     *
     * @param ExternalPlugAdaptee $adaptee
     */
    public function __construct(ExternalPlugAdaptee $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    /**
     * @inheritDoc
     */
    public function plugIn(): string
    {
        $this->adaptee->specificPlugIn();

        return 'Adapted plug and plugged it in.';
    }

}
