<?php
declare(strict_types=1);

namespace Tests\PhpDesignPatterns\DesignPatterns\Behavioral\Observer;

use PhpDesignPatterns\DesignPatterns\Behavioral\Observer\DesktopDisplay;
use PhpDesignPatterns\DesignPatterns\Behavioral\Observer\PhoneDisplay;
use PhpDesignPatterns\DesignPatterns\Behavioral\Observer\WeatherStation;
use PHPUnit\Framework\TestCase;

/**
 * Class ObserverPatternTest
 *
 * @author Nicklas Reincke <contact@reynke.com>
 */
class ObserverPatternTest extends TestCase
{

    public function testObserverPattern(): void
    {
        // Create (concrete) observable (supplier).
        $observable = new WeatherStation();

        // Create (concrete) observers (subscribers).
        $observerOne = new PhoneDisplay();
        $observerTwo = new DesktopDisplay();

        // Add observers to observable. (Observers subscribe to observable.)
        $observable->attach($observerOne);
        $observable->attach($observerTwo);

        // Assert that observers were successfully attached to observable.
        self::assertTrue(in_array($observerOne, $observable->getObservers(), true));
        self::assertTrue(in_array($observerTwo, $observable->getObservers(), true));

        // Notify all observers (subscribers), within observable, that state has changed (for example).
        $observable->notify();

        // Remove observer.
        $observable->detach($observerTwo);

        // Assert that observer was successfully removed from observable.
        self::assertNotTrue(in_array($observerTwo, $observable->getObservers(), true));

        // Change state of observable and notify all observers (just "$observerOne" in this case), within observable.
        $observable->setTemperature(9000);
        $observable->notify();
    }

}
