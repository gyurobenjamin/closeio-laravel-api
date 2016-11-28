<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Organization extends CloseioClient
{
    
    const ENDPOINT_ORGANIZATION = 'organization';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_ORGANIZATION;
    }

}
