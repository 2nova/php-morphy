<?php 

namespace Novanova\PHPMorphy\Facades;

use Illuminate\Support\Facades\Facade;

class PHPMorphy extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'phpmorphy';
    }

}