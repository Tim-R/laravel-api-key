<?php
return [
    /*
     * Database connection to use
     */
    'connection' => env('DB_DATABASE_API', 'mysql'),

    /*
     * Name of auth header in which the token is passed
     */
    'auth_header' => env('API_AUTH_HEADER', 'X-Authorization')
];
