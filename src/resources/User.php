<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class User extends CloseioClient
{
    
    const ENDPOINT_USER = 'user/{id}';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_USER;
    }

}
