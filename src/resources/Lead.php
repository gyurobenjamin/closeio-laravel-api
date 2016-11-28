<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Lead extends CloseioClient
{
    
    const ENDPOINT_LEAD = 'lead';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_LEAD;
    }

    /**
     * Merge two leads
     *
     * @return
     */
    public function merge()
    {

    }
}
