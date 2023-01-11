<?php
include "Project/namespaceExample.php";

use const Project\E;
use function Project\sayHi;
use Project\Example;

echo E; // Accedemos a la constante E

sayHi(); // Accedemos a la función sayHi()

$example = new Example();
$example->test();