<?php


namespace iarif4u\bnumbeer\Facade;


use Illuminate\Support\Facades\Facade;

class Bnumber extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Bnumber';
    }
}
