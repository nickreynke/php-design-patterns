# PHP Design Patterns

Design patterns, in PHP 7.

> This repository is currently in its development phase so don't wonder if there aren't any patterns or there are some patterns missing.
> (See [Added patterns](#added-patterns)) Also this repository intentionally set up for own learning purposes.

## Informational sources

* eBook "[Design Patterns Explained Simply](https://sourcemaking.com/design-patterns-ebook)" by Alexander Shvets
* YouTube playlist "[Head First: Design Patterns](https://www.youtube.com/playlist?list=PLrhzvIcii6GNjpARdnO4ueTUAVR9eMBpc)" by Christopher Okhravi

## Testing

For demonstration purposes I've set up tests which you can execute the design patterns
to see if they work properly, what they output and how you could use them.

To run the tests you need to install dependencies via [Composer](https://getcomposer.org)
by executing `composer install` in your console.

Finally run the tests by executing `php vendor/bin/phpunit` in your console.

The tests are located in the `tests` directory.

## Added patterns

### Behavioral design patterns

* [ ] **Chain of Responsibility** - „A way of passing a request between a chain of objects“
* [x] **Command** - „Encapsulate a command request as an object“
* [ ] **Interpreter** - „A way to include language elements in a program“
* [ ] **Iterator** - „Sequentially access the elements of a collection“
* [ ] **Mediator** - „Defines simplified communication between classes“
* [ ] **Memento** - „Capture and restore an object's internal state“
* [ ] **Null Object** - „Designed to act as a default value of an object“
* [x] **Observer** - „A way of notifying change to a number of classes“
* [ ] **State** - „Alter an object's behavior when its state changes“
* [x] **Strategy** - „Encapsulates an algorithm inside a class“
* [ ] **Template Method** - „Defer the exact steps of an algorithm to a subclass“
* [ ] **Visitor** - „Defines a new operation to a class without change“

### Creational design patterns

* [x] **Abstract Factory** - „Creates an instance of several families of classes“
* [x] **Builder** - „Separates object construction from its representation“
* [x] **Factory Method** - „Creates an instance of several derived classes“
* [x] **Object Pool** - „Avoid expensive acquisition and release of resources by recycling objects that are no longer in use“
* [x] **Prototype** - „A fully initialized instance to be copied or cloned“
* [x] **Singleton** - „A class of which only a single instance can exist“

> Note on the **Singleton** pattern:
>
> Try to avoid the pattern and use dependency injection instead to pass this single instance around.

### Structural design patterns

* [x] **Adapter** - „Match interfaces of different classes“
* [x] **Bridge** - „Separates an object’s interface from its implementation“
* [ ] **Composite** - „A tree structure of simple and composite objects“
* [x] **Decorator** - „Add responsibilities to objects dynamically“
* [ ] **Facade** - „A single class that represents an entire subsystem“
* [ ] **Flyweight** - „A fine-grained instance used for efficient sharing“
* [ ] **Private Class Data** - „Restricts accessor/mutator access“
* [ ] **Proxy** - „An object representing another object“
