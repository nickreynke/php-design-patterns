<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Observer;

/**
 * Class DesktopDisplay
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class DesktopDisplay implements DisplayInterface, \SplObserver
{

    /**
     * @var int
     */
    private $currentTemperature = 0;

    /**
     * @inheritDoc
     */
    public function getCurrentTemperature(): int
    {
        return $this->currentTemperature;
    }

    /**
     * @inheritDoc
     */
    public function display(): string
    {
        // Just for demonstration purposes.
        return 'Desktop: ' . $this->getCurrentTemperature();
    }

    /**
     * @inheritDoc
     */
    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherStation) {
            $this->currentTemperature = $subject->getTemperature();
        }

        $this->display();
    }

}
