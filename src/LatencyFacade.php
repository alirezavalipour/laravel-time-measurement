<?php

namespace Lantency;

use Illuminate\Support\Facades\Facade;

class LatencyFacade extends Facade
{

    protected static function getFacadeAccessor()
    {
        return  self::class;
    }

    public static function shouldProxyTo($class)
    {
        app()->singleton(self::class, $class);
    }

}
