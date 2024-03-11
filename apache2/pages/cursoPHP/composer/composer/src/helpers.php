<?php

if (!function_exists('toUpper')) {
    function toUpper($text)
    {
        return Text\Format::toUpperText($text);
    }
}

if (!function_exists('toLower')) {
    function toLower($text)
    {
        return Text\Format::toLowerText($text);
    }
}
