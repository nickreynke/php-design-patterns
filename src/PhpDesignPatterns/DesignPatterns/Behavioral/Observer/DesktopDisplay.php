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
     * @var WeatherStation
     */
    private $weatherStation;

    /**
     * @inheritDoc
     */
    public function display(): string
    {
        // Just for demonstration purposes.
        return 'Desktop: ' . $this->weatherStation->getTemperature();
    }

    /**
     * @inheritDoc
     */
    public function update(\SplSubject $subject): void
    {
        if ($subject instanceof WeatherStation) {
            $this->weatherStation = $subject;
        }

        $this->display();
    }

}
