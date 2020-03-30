<?php

namespace App\Controller;

class ErrorController
{

    public function notFound()
    {
        header("HTTP/1.1 404 Not Found");
        include __DIR__ . "./../../templates/error/not-found.html.php";
    }

    public function internal()
    {
        header("HTTP/1.1 500 Internal Server Error");
        include __DIR__ . "./../../templates/error/internal.html.php";
    }

}