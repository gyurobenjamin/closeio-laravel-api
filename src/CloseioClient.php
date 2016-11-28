<?php

namespace Gyurobenjamin\CloseioLaravel;

use GuzzleHttp\Client as GuzzleClient;

use Gyurobenjamin\CloseioLaravel\Resources;

class CloseioClient
{

    /**
     *
     * @return void
     */
    public function __construct()
    {

        $this->lead             = new Resources\Lead();
        $this->contact          = new Resources\Contact();
        $this->activity         = new Resources\Activity();
        $this->opportunity      = new Resources\Opportunity();
        $this->task             = new Resources\Task();
        $this->user             = new Resources\User();
        $this->organization     = new Resources\Organization();
    }

    /**
     * 
     * @param string $method
     * @return mixed
     */
    public function call($method = 'POST', $endpoint, $data = [])
    {
        $g_client = new GuzzleClient([

            'base_uri'  => config('closeio.base_url').'/',
            'auth'      => [

                config('closeio.api_key'),
                ''
            ]
        ]);

        try {
            
            $g_response = $g_client->request($method, $endpoint, (array)$data);

            return json_decode($g_response->getBody());

        } catch (\GuzzleHttp\Exception\ClientException $e) {
            
            return false;
        }
    }

    /**
     * Retrieve a single resource
     *
     * @param string $id
     * @return mixed
     */
    public function get($id)
    {
        $endpoint = $this->endpoint . '/' . $id;
        return $this->call('GET', $endpoint);
    }

    /**
     * List or search for resource(s)
     *
     * @return mixed
     */
    public function search()
    {
        return $this->call('GET', $this->endpoint);
    }

    /**
     * Delete a resource
     *
     * @param string $id
     * @return mixed
     */
    public function delete($id)
    {
        $endpoint = $this->endpoint . '/' . $id;
        return $this->call('DELETE', $endpoint);
    }

    /**
     * Update an existing resource
     *
     * @param string $id
     * @return mixed
     */
    public function update($id, $data)
    {
        $endpoint = $this->endpoint . '/' . $id;
        return $this->call('PUT', $endpoint, $data);
    }

    /**
     * Create a new resource
     *
     * @return
     */
    public function create($data)
    {
        $endpoint = $this->endpoint;
        return $this->call('POST', $endpoint, $data);
    }

}
