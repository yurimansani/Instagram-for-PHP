<?php namespace SocialNetworkApi\Instagram\Support\Laravel\Facade;

use Illuminate\Support\Facades\Facade;

class Instagram extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'andreyco.instagram';
    }

}
