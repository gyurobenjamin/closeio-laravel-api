<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Contact extends CloseioClient
{
    
    const ENDPOINT_CONTACT = 'contact';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_CONTACT;
    }

}
