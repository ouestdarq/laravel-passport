<?php

function proxymurder_passport_dir($path = null)
{
    return $path ?
        ($path[0] === '/' ? __DIR__ . $path : __DIR__ . '/' . $path)
        : __DIR__;
}
