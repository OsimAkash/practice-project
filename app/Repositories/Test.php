<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Facade;

class Test extends Facade{
    protected static function getFacade()  {
        return 'addition';
    }
}