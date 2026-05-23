<?php

declare(strict_types=1);

return [
    'app_env' => getenv('APP_ENV') ?: 'development',
    'app_debug' => filter_var(getenv('APP_DEBUG') ?: true, FILTER_VALIDATE_BOOL),
    'app_url' => getenv('APP_URL') ?: 'http://localhost:8000',
    'cache_path' => getenv('CACHE_PATH') ?: __DIR__ . '/../data/cache',
    'timezone' => getenv('TIMEZONE') ?: 'UTC',
];
