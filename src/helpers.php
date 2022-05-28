<?php

function src_dir($path = null)
{
    return __DIR__ . $path;
}

function package_dir($path = null)
{
    return dirname(__DIR__) . $path;
}