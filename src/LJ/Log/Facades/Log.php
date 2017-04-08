<?php
namespace Towerful\Log\Facades;

use Illuminate\Support\Facades\Facade;
class Log extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'log';
    }

} 
