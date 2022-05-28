<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Passport Routes Subdomain
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'subdomain' => env('PASSPORT_ROUTES_SUBDOMAIN', 'accounts'),

    /*
    |--------------------------------------------------------------------------
    | Passport Routes Prefix
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'prefix' => env('PASSPORT_ROUTES_PREFIX', 'oauth'),

];