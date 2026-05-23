<?php

declare(strict_types=1);

function route_request(string $method, string $path): array
{
    $routes = [
        'GET' => [
            '/' => ['status' => 200, 'view' => 'home'],
            '/health' => ['status' => 200, 'json' => ['ok' => true]],
        ],
        'POST' => [
            '/api/echo' => ['status' => 200, 'handler' => 'echo_payload'],
        ],
    ];

    if (!isset($routes[$method][$path])) {
        return ['status' => 404, 'json' => ['error' => 'Not Found']];
    }

    return $routes[$method][$path];
}

function echo_payload(): array
{
    $raw = file_get_contents('php://input') ?: '';
    $payload = json_decode($raw, true);

    return [
        'status' => 200,
        'json' => [
            'received' => $payload,
            'timestamp' => gmdate(DATE_ATOM),
        ],
    ];
}
