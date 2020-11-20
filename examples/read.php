<?php

require __DIR__ . "/../vendor/autoload.php";

use CoffeCode\Datalayer\Connect;

$conn = Connect::getInstance();
$error = Connect::getError();
