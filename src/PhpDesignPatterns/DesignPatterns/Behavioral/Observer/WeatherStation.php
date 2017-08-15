<?php
declare(strict_types=1);

namespace PhpDesignPatterns\DesignPatterns\Behavioral\Observer;

/**
 * Class WeatherStation
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class WeatherStation implements \SplSubject
{

    /**
     * @var \SplObserver[]
     */
    private $observers = [];

    /**
     * @var int
     */
    private $temperature = 0;

    /**
     * @inheritDoc
     */
    public function attach(\SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @inheritDoc
     */
    public function detach(\SplObserver $observer): void
    {
        $key = array_search($observer, $this->observers, true);

        if ($key !== false) {
            unset($this->observers[$key]);
        }
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    /**
     * @return \SplObserver[]
     */
    public function getObservers(): array
    {
        return $this->observers;
    }

    /**
     * (Get current state/data of observable.)
     *
     * @return int
     */
    public function getTemperature(): int
    {
        return $this->temperature;
    }

    /**
     * (Change state/data of observable.)
     *
     * @param int $temperature
     */
    public function setTemperature(int $temperature): void
    {
        $this->temperature = $temperature;
    }

}
