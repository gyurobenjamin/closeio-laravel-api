<?php

namespace Gyurobenjamin\CloseioLaravelApi;

use GuzzleHttp\Client as GuzzleClient;
use Gyurobenjamin\CloseioLaravelApi\Resources;

class CloseioClient
{

    /**
     *
     * @return void
     */
    public function __construct()
    {

        $this->lead = new Resources\Lead();
        $this->contact = new Resources\Contact();
        $this->activity = new Resources\Activity();
        $this->opportunity = new Resources\Opportunity();
        $this->task = new Resources\Task();
        $this->user = new Resources\User();
        $this->organization = new Resources\Organization();
    }

    /**
     *
     * @param string $method
     * @return mixed
     */
    public function call($method = 'POST', $endpoint, $data = [])
    {
        $g_client = new GuzzleClient([
            'base_uri' => config('closeio.base_url') . '/',
            'auth' => [
                config('closeio.api_key'),
                '',
            ],
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);
        $dataHttpQ = http_build_query($data);
        $endpoint = $method == 'GET' && $dataHttpQ ? "{$endpoint}/?{$dataHttpQ}" : "{$endpoint}/";
        $data = $data ? ['json' => (array) $data] : [];

        \Log::info('Closeio api request: ', ['method' => $method, 'endpoint' => $endpoint, 'data' => $data]);

        $g_response_b = false;
        $error = false;

        try {

            $g_response = $g_client->request($method, $endpoint, $data);
            $g_response_b = json_decode($g_response->getBody());

            \Log::info('Closeio api response: ', ['body' => $g_response_b]);

        } catch (\GuzzleHttp\Exception\RequestException $e) {

            \Log::error('Closeio api request error: ', ['error' => $e]);
            $error = $e->getResponse() ? json_decode($e->getResponse()->getBody()->getContents()) : true;

        } catch (\Exception $e) {

            \Log::error('Closeio api error: ', ['error' => $e]);
            $error = true;
        }

        return [
            $g_response_b,
            $error,
        ];
    }

    /**
     * Retrieve a single resource
     *
     * @param string $id
     * @param array $data
     * @return mixed
     */
    public function get($id, $data = [])
    {
        $endpoint = $this->endpoint . '/' . $id;
        return $this->call('GET', $endpoint, $data);
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
     * @param array $data
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
