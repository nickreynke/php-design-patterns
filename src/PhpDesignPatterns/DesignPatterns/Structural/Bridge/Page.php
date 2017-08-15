<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Structural\Bridge;

/**
 * Class Page
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class Page implements PageInterface
{

    /**
     * @var ThemeInterface
     */
    private $theme;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * @inheritDoc
     */
    public function getTheme(): ThemeInterface
    {
        return $this->theme;
    }

    /**
     * @inheritDoc
     */
    public function setTheme(ThemeInterface $theme): PageInterface
    {
        $this->theme = $theme;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @inheritDoc
     */
    public function setTitle(string $title): PageInterface
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getContent(): string
    {
        return $this->getTitle() . ': ' . $this->content . ' with theme "' . $this->getTheme()->getName() . '".';
    }

    /**
     * @inheritDoc
     */
    public function setContent(string $content): PageInterface
    {
        $this->content = $content;

        return $this;
    }

}
