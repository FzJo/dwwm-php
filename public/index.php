<?php

require '../vendor/autoload.php';

$url = "/";

if (array_key_exists("REDIRECT_URL", $_SERVER)) {
    $url = $_SERVER["REDIRECT_URL"];
} else if (array_key_exists("PATH_INFO", $_SERVER)) {
    $url = $_SERVER["PATH_INFO"];
}

$routes = [
    "/login" => [
        "controller" => "App\Controller\AuthentificationController",
        "method" => "login"
    ],
    "/signup" => [
        "controller" => "App\Controller\UserController",
        "method" => "createUser"
    ],
    "/404" => [
        "controller" => "App\Controller\ErrorController",
        "method" => "notFound"
    ],
    "/500" => [
        "controller" => "App\Controller\ErrorController",
        "method" => "internal"
    ]
];

$controller = null;

try {
    foreach ($routes as $key => $value) {
        if ($url === $key) {
            $controller = new $value["controller"];
            $methodName = $value["method"];
            $controller->$methodName();
        }
    }
    if (!$controller) {
        $controller = new $routes["/404"]["controller"];
        $methodName = $routes["/404"]["method"];
        $controller->$methodName();
    }
} catch (Throwable $e) {
    $controller = new $routes["/500"]["controller"];
    $methodName = $routes["/500"]["method"];
    $controller->$methodName();
}
