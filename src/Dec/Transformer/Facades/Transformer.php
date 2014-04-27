<?php namespace Dec\Transformer\Facades;

use Illuminate\Support\Facades\Facade;

class Transformer extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'transformer';
    }

}