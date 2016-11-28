<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Opportunity extends CloseioClient
{
    
    const ENDPOINT_OPPORTUNITY = 'opportunity';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_OPPORTUNITY;
    }

}
