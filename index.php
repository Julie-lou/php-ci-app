<?php

function add($a, $b)
{
    return $a + $b;
}

function greet($name)
{
    return "Hello, $name! Welcome to PHP CI.";
}

if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    echo greet("Jenkins") . PHP_EOL;
}