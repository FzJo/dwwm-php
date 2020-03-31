<?php

require '../vendor/autoload.php';

$url = "/";

$redirectUrl = filter_input(INPUT_SERVER, "REDIRECT_URL");

$pathInfo = filter_input(INPUT_SERVER, "PATH_INFO");

if ($redirectUrl) {
    $url = $redirectUrl;
} else if ($pathInfo) {
    $url = $pathInfo;
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
