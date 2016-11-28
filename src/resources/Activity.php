<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Activity extends CloseioClient
{
    
    const ENDPOINT_ACTIVITY = 'activity';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_ACTIVITY;
    }

}
