<?php

/**
 * Local configuration.
 *
 * Duplicate this file as `local.php` and change its settings as required.
 * `local.php` is ignored by git and safe to use for local and sensitive data like usernames and passwords.
 */

declare(strict_types=1);

$baseUrl = 'http://light.dotkernel.localhost';

$databases = [
    'default' => [
        'host'     => 'localhost',
        'dbname'   => 'light',
        'user'     => 'root',
        'password' => '123',
        'port'     => 3306,
        'driver'   => 'pdo_mysql',
        'charset'  => 'utf8mb4',
        'collate'  => 'utf8mb4_general_ci',
    ],
    // you can add more database connections into this array
];

return [
    'databases'   => $databases,
    'doctrine'    => [
        'connection' => [
            'orm_default' => [
                'params' => $databases['default'],
            ],
        ],
    ],
    'application' => [
        'url' => $baseUrl,
    ],
    'routes'      => [
        'page' => [
            'about'      => 'about',
            'who-we-are' => 'who-we-are',
            'books'      => 'books',
        ],
    ],
];
