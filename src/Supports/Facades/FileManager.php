<?php


namespace MyPackage\Supports\Facades;


use Illuminate\Support\Facades\Facade;


class FileManager extends  Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filemanager';
    }

}