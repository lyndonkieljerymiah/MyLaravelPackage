<?php

namespace Supports\Facades;


use Illuminate\Support\Facades\Facade;



class EventListenerRegister extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return 'eventListenerRegister';
    }

}