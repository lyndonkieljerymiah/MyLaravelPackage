<?php


namespace MyPackage\Supports\Facades;


use Illuminate\Support\Facades\Facade;

class Result extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return 'result';
    }

}