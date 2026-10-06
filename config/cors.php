<?php

declare(strict_types=1);

use Marko\Config\Env;

return [
    // Request paths CORS applies to, without the leading slash; `*` matches anything (including `/`).
    'paths' => Env::list('CORS_PATHS', ['*']),
    'allowed_origins' => Env::list('CORS_ALLOWED_ORIGINS', []),
    'allowed_methods' => Env::list('CORS_ALLOWED_METHODS', ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS']),
    'allowed_headers' => Env::list('CORS_ALLOWED_HEADERS', ['Content-Type', 'Authorization']),
    'expose_headers' => Env::list('CORS_EXPOSE_HEADERS', []),
    'supports_credentials' => Env::bool('CORS_SUPPORTS_CREDENTIALS', false),
    'max_age' => Env::int('CORS_MAX_AGE', 0, min: 0),
];
