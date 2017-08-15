# PHP Design Patterns

Design patterns, in PHP 7.

> This repository is currently in its development phase so don't wonder if there aren't any patterns or there are some patterns missing.
> (See [Added patterns](#added-patterns))

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

* [ ] Chain of Responsibility
* [ ] Command
* [ ] Interpreter
* [ ] Iterator
* [ ] Mediator
* [ ] Memento
* [ ] Null Object
* [x] Observer
* [ ] State
* [x] Strategy
* [ ] Template Method
* [ ] Visitor

### Creational design patterns

* [x] Abstract Factory
* [x] Builder
* [ ] Factory Method
* [ ] Object Pool
* [ ] Prototype
* [ ] Singleton

### Structural design patterns

* [ ] Adapter
* [x] Bridge
* [ ] Composite
* [ ] Decorator
* [ ] Facade
* [ ] Flyweight
* [ ] Private Class Data
* [ ] Proxy
