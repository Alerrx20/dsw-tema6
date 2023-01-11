<?php
include "Project/namespaceExample.php";

echo Project\E; // Accedemos a la constante E

Project\sayHi(); // Accedemos a la función sayHi()

$example = new Project\Example();
$example->test();