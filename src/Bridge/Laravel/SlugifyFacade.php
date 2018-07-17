<?php

namespace Italomoralesf\Slugify\Bridge\Laravel;

use Illuminate\Support\Facades\Facade;

class SlugifyFacade extends Facade
{
    
    protected static function getFacadeAccessor()
    {
        return 'slugify';
    }
    
}