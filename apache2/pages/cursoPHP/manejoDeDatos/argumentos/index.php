<?php

function greet($name)
{
    return "Hello, $name.<br>";
}

echo greet('Edson');

// Por referencia
$course = 'PHP';
function path(&$course)
{
    $course = 'Laravel';
    echo "$course<br>";
}
path($course);
echo "$course<br>";

// Predeterminado
function greet_($name = 'Edson')
{
    return "Hello, $name<br>";
}

echo greet_();
echo greet_('Charly');

