<?php

namespace Animals;

/**
 * ! 1. autoload hoyeche, but namespace alada, tai use 
 * include_once "./Animals/Test/TestAnimals.php";
 * $test = new Test\a\b\c\TestAnimals();
 * $test->greet();
 * ! If include, can not give namespace according to folder but autoload
 * 
 */



// 1. use Animals\Test\TestAnimals;

include_once "vendor/autoload.php";

// $cat = new Cat();
// $cat->greet();

// $test = new TestAnimals();
// $test->greet();

$test = new Test\TestAnimals();
$test->greet();
