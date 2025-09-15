<?php

namespace M2i\Ecf\Controller;

class ErrorController
{
    public function httpNotFound()
    {
        header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
        
        echo "Page not found";
    }
}