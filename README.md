# marko/cors

CORS middleware for Marko --- enables browser-based frontends and mobile apps to access your API by adding the correct HTTP headers automatically.

## Installation

```bash
composer require marko/cors
```

## Quick Example

The middleware registers itself globally, so preflights and cross-origin responses are handled as soon as you allow an origin:

```bash
CORS_ALLOWED_ORIGINS=https://app.example.com
CORS_PATHS=api/*
```

## Documentation

Full usage, API reference, and examples: [marko/cors](https://marko.build/docs/packages/cors/)
