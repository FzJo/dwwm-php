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
    ]
];

foreach ($routes as $key => $value) {
    if ($url === $key) {
        $className = $value["controller"];
        $obj = new $className;
        $methodName = $value["method"];
        $obj->$methodName();
    }
}
