<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Composite;

/**
 * Class Directory
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Directory implements FilesystemItemInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var FilesystemItemInterface[]
     */
    private $filesystemItems = [];

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

    /**
     * @return FilesystemItemInterface[]
     */
    public function getFilesystemItems(): array
    {
        return $this->filesystemItems;
    }

    /**
     * @param FilesystemItemInterface[] $filesystemItems
     */
    public function setFilesystemItems(array $filesystemItems)
    {
        $this->filesystemItems = $filesystemItems;
    }

    /**
     * @param FilesystemItemInterface $filesystemItem
     * @param bool $searchRecursively
     *
     * @return bool
     */
    public function hasFilesystemItem(FilesystemItemInterface $filesystemItem, bool $searchRecursively = false): bool
    {
        if (!$searchRecursively) {
            $filesystemItemHash = $this->hashFilesystemItem($filesystemItem);
            return array_key_exists($filesystemItemHash, $this->filesystemItems);
        }

        foreach ($this->getFilesystemItems() as $filesystemItemInDirectory) {

            if ($this->isSameFilesystemItem($filesystemItemInDirectory, $filesystemItem)) {
                return true;
            }

            if ($filesystemItemInDirectory instanceof Directory && $filesystemItemInDirectory->hasFilesystemItem($filesystemItem)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @param Directory $directory
     * @param FilesystemItemInterface $filesystemItem
     * @param bool $searchRecursively
     *
     * @return bool
     */
    protected function hasFilesystemItemInDirectory(
        Directory $directory,
        FilesystemItemInterface $filesystemItem,
        bool $searchRecursively
    ): bool {
        return $directory->hasFilesystemItem($filesystemItem, $searchRecursively);
    }

    /**
     * @param FilesystemItemInterface $expected
     * @param FilesystemItemInterface $actual
     *
     * @return bool
     */
    protected function isSameFilesystemItem(FilesystemItemInterface $expected, FilesystemItemInterface $actual): bool
    {
        return $this->hashFilesystemItem($expected) === $this->hashFilesystemItem($actual);
    }

    /**
     * @param FilesystemItemInterface $filesystemItem
     *
     * @return string
     */
    protected function hashFilesystemItem(FilesystemItemInterface $filesystemItem): string
    {
        return spl_object_hash($filesystemItem);
    }

    /**
     * @param FilesystemItemInterface $filesystemItem
     */
    public function addFilesystemItem(FilesystemItemInterface $filesystemItem): void
    {
        if ($this->hasFilesystemItem($filesystemItem)) {
            return;
        }

        $filesystemItemHash = $this->hashFilesystemItem($filesystemItem);
        $this->filesystemItems[$filesystemItemHash] = $filesystemItem;
    }

    /**
     * @param FilesystemItemInterface $filesystemItem
     */
    public function removeFilesystemItem(FilesystemItemInterface $filesystemItem): void
    {
        if (!$this->hasFilesystemItem($filesystemItem)) {
            return;
        }

        $filesystemItemHash = $this->hashFilesystemItem($filesystemItem);
        unset($this->filesystemItems[$filesystemItemHash]);
    }

}
