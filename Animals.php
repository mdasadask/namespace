<?php

namespace Animals;

// autoload hoyeche, but namespace alada, tai use 

// use Animals\Test\TestAnimals;

include_once "vendor/autoload.php";

$cat = new Cat();
$cat->greet();

// $test = new TestAnimals();
// $test->greet();

$test = new Test\TestAnimals();
$test->greet();