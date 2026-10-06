<?php

declare(strict_types=1);

use Marko\Cors\Middleware\CorsMiddleware;

return [
    // Load before every module that registers global middleware so CORS runs outermost:
    // preflights short-circuit before sessions, auth or page cache, and every response
    // (cached, 401/403, 404/405) still gets the CORS headers.
    'sequence' => [
        'before' => [
            'marko/page-cache',
            'marko/session-file',
            'marko/session-database',
            'marko/authentication',
            'marko/authentication-token',
            'marko/authorization',
            'marko/layout',
        ],
    ],
    'globalMiddleware' => [
        CorsMiddleware::class,
    ],
];
