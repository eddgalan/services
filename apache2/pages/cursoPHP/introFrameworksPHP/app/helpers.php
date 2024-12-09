<?php

if (!function_exists('view')) {
    function view(string $view): \App\Http\Response
    {
        return new App\Http\Response($view);
    }
}

if (!function_exists('viewPath')) {
    function viewPath($view): string
    {
        return __DIR__ . "/../views/$view.php";
    }
}
