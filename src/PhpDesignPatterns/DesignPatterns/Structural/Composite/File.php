<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Composite;

/**
 * Class File
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class File implements FilesystemItemInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
