<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Observer;

/**
 * Class PhoneDisplay
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class PhoneDisplay implements DisplayInterface, \SplObserver
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
        return 'Phone: ' . $this->weatherStation->getTemperature();
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
