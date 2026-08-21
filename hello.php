<?php

function sayHello(string $name): string
{
    return "Hello, $name! This is from the new branch.";
}

echo sayHello("Jenkins") . PHP_EOL;
