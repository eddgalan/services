<?php

/* ..:: Texto ::.. */
echo "<h2>Texto</h2><br>";
echo 'Texto de una línea
        en varias líneas<br>';

echo 'Escape de una comilla \' de un backslash \\<br>';

/* ..:: Arrays ::.. */
echo "<br><h2>Arrays</h2>";
$courses = [
    'backend' => [
        'php',
        'laravel',
    ],
];
echo "Has elegido el curso de {$courses['backend'][0]}<br>";

/** ..:: Objetos ::.. */
echo "<br><h2>Objetos</h2>";
class User
{
    public $name = 'Edson';
}
$user = new User;
echo "$user->name quiere aprender {$courses['backend'][0]}";

echo "<br><br>";
$teacher = 'italo';
$italo = 'Profesor de PHP<br>';
echo "$teacher es {$$teacher}";

/** ..:: Funciones ::.. */
echo "<br><h2>Funciones</h2>";
function getTeacher()
{
    return 'teacher_';
}
$teacher_ = 'Italo';
echo "${getTeacher()} enseña PHP<br>";  // Esta forma está deprecada
echo "{${getTeacher()}} enseña PHP<br>";
