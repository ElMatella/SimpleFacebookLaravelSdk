<?php

use ElMatella\SimpleFacebookLaravelSdk\SimpleFacebookLaravelSdk;

if (! function_exists('facebook')) {
    /**
     * Get the available facebook instance.
     *
     * @return \App\ElMatella\FacebookLaravelSdk
     */
    function facebook()
    {
        return app(SimpleFacebookLaravelSdk::class);
    }
}