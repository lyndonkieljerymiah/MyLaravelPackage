<?php 


namespace MyPackage\Supports\Facades;


use Illuminate\Support\Facades\Facade;

class DataBundle extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bundle';
    }

}