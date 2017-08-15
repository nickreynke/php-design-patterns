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
        return 'Phone: ' . $this->getCurrentTemperature();
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
