<?php namespace Vovanmix\VideoApi\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class VideoApi
 * @package Vovanmix\Videochannel\Facades
 */
class VideoApi extends Facade {

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() {

        return 'video-api';
    }
}