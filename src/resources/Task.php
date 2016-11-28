<?php

namespace Gyurobenjamin\CloseioLaravel\Resources;

use Gyurobenjamin\CloseioLaravel\CloseioClient;

class Task extends CloseioClient
{
    
    const ENDPOINT_TASK = 'task';

    /**
     *
     * @return void
     */
    public function __construct()
    {
        $this->endpoint = self::ENDPOINT_TASK;
    }

}
