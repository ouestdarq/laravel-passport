<?php

function woops_laravel_passport($path = null)
{
    return $path ?
        ($path[0] === '/' ? dirname(__DIR__) . $path : dirname(__DIR__) . '/' . $path)
        : dirname(__DIR__);
}