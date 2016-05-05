<?php

namespace ElMatella\SimpleFacebookLaravelSdk;

use Illuminate\Support\Facades\Facade;

class FacebookFacade extends Facade {

    protected static function getFacadeAccessor()
    {
        return SimpleFacebookLaravelSdk::class;
    }
}