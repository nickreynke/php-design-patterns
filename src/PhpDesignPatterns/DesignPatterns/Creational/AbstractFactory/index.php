<?php
declare(strict_types=1);

require __DIR__ . '/../../../../../vendor/autoload.php';

use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\BadWeaponFactory;
use PhpDesignPatterns\DesignPatterns\Creational\AbstractFactory\GoodWeaponFactory;

// Make good weapons! >:D
var_dump(GoodWeaponFactory::makeSword());
var_dump(GoodWeaponFactory::makeAxe());

// Make bad weapons! >:(
var_dump(BadWeaponFactory::makeSword());
var_dump(BadWeaponFactory::makeAxe());
