<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Composite;


/**
 * Interface DirectoryInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface DirectoryInterface extends FilesystemItemInterface
{

    /**
     * @return FilesystemItemInterface[]
     */
    public function getFilesystemItems(): array;

    /**
     * @param FilesystemItemInterface[] $filesystemItems
     */
    public function setFilesystemItems(array $filesystemItems);

    /**
     * @param FilesystemItemInterface $filesystemItem
     * @param bool $searchRecursively
     *
     * @return bool
     */
    public function hasFilesystemItem(FilesystemItemInterface $filesystemItem, bool $searchRecursively = false): bool;

    /**
     * @param FilesystemItemInterface $filesystemItem
     */
    public function addFilesystemItem(FilesystemItemInterface $filesystemItem): void;

    /**
     * @param FilesystemItemInterface $filesystemItem
     */
    public function removeFilesystemItem(FilesystemItemInterface $filesystemItem): void;

}
