<?php

namespace App\Exceptions;

use Exception;

class CityNotFound extends Exception
{
    public function report()
    {
        //
    }
    
    public function render($request)
    {
        return response([
            'message' => 'Город не найден.',
        ]);
    }
}
