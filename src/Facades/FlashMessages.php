<?php

namespace wadeshuler\FlashMessages\Facades;

use Illuminate\Support\Facades\Facade;

class FlashMessages extends Facade
{
    /**
      * Get the registered name of the component.
      *
      * @return string
      */
     protected static function getFacadeAccessor()
     {
         return \wadeshuler\FlashMessages\FlashMessages::class;
     }
}
