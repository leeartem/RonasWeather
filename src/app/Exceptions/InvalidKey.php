<?php

namespace App\Exceptions;

use Exception;

class InvalidKey extends Exception
{
    public function report()
    {
        //
    }
    
    public function render($request)
    {
        return response([
            'message' => 'API ключ введен неверно.',
        ]);
    }
}
