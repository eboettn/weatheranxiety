<?php

declare(strict_types=1);

$config = require __DIR__ . '/../includes/config.php';
require __DIR__ . '/../includes/router.php';

date_default_timezone_set($config['timezone']);

$method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
$path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

$route = route_request($method, $path);

if (isset($route['handler']) && function_exists($route['handler'])) {
    $route = $route['handler']();
}

http_response_code($route['status'] ?? 200);

if (isset($route['json'])) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode($route['json'], JSON_PRETTY_PRINT);
    exit;
}

$view = $route['view'] ?? 'home';
$viewFile = __DIR__ . '/views/' . $view . '.php';

if (!is_file($viewFile)) {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode(['error' => 'View not found'], JSON_PRETTY_PRINT);
    exit;
}

require $viewFile;
