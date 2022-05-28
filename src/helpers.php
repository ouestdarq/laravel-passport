<?php

function src_path($path = null)
{
    return $path ?
        ($path[0] === '/' ? __DIR__ . $path : __DIR__ . '/' . $path)
        : __DIR__;
}

function package_path($path = null)
{
    return $path ?
        ($path[0] === '/' ? dirname(__DIR__) . $path : dirname(__DIR__) . '/' . $path)
        : dirname(__DIR__);
}