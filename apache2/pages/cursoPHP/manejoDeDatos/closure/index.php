<?php

$greet = function($name) 
{
    return "Hello, $name";
};

echo $greet('Edson');
echo "<hr>";

function greet_(Closure $lang, $name)
{
    return $lang($name);
}

$es = function ($name) { return "Hola, $name"; };
$en = function ($name) { return "Hello, $name"; };
echo greet_($en, 'Edson') . "<br>";
echo greet_($es, 'Carlos') . "<br>";
