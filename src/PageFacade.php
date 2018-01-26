<?php


namespace Tarnama\Pages;


use Illuminate\Support\Facades\Facade;

class PageFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'pages';

    }
}