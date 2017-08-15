<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Bridge;

/**
 * Interface PageInterface
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
interface PageInterface
{

    /**
     * @return ThemeInterface
     */
    public function getTheme(): ThemeInterface;

    /**
     * @param ThemeInterface $theme
     */
    public function setTheme(ThemeInterface $theme): PageInterface;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @param string $title
     */
    public function setTitle(string $title): PageInterface;

    /**
     * @return string
     */
    public function getContent(): string;

    /**
     * @param string $content
     */
    public function setContent(string $content): PageInterface;
}
