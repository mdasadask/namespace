<?php

class MyClass {}
function myfunction() {}
const MYCONST = 1;





// namespace Animals;

use Animals\Cat;
use Animals\Dog as D;
use Animals\Test\TestAnimals;

// include_once "vendor/autoload.php";

include_once "Animals/Cat.php";
include_once "Animals/Dog.php";
include_once "Animals/NoNs.php";
include_once "Animals/Extra.php";
include_once "Animals/Test/TestAnimals.php";

$cat = new Cat();
$cat->greet();

$dog = new D();
$dog->greet();

// $test = new Test\TestAnimals();
$test = new TestAnimals();
$test->greet();

$no_ns = new \NoNs();
$no_ns->greet();

echo HTML;
echo Animals\asad;
Animals\myFunc();
