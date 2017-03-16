<?php
namespace DDrills\ElasticSearch;

use GuzzleHttp\Client;

/**
* Class responsible for facilitating queries on the Elastic Search.
*/
class Api
{
    /**
     * Guzzle http client
     *
     * @var Client
     */
    protected $http;

    /**
     * Elastic Api Constructor
     *
     * @param Client $http Guzzle Http client
     */
    function __construct(Client $http)
    {
        $this->http = $http;
    }

    /**
     * Find an object with the type given by its id.
     *
     * @param  string $type
     * @param  int    $id
     *
     * @return array
     */
    public function find(string $type, int $id): array
    {
        return $this->search("{$type}/{$id}");
    }

    /**
     * Make a request on ElasticSearch Rest client.
     *
     * @param  string $url
     * @param  array  $params
     *
     * @return array
     */
    protected function search($url, array $params = []): array
    {
        $response = $this->http->get($this->parseUrl($url), $params);

        if ($response->getStatusCode() === 200) {
            $jsonResponse = json_decode(
                $response->getBody()->getContents(),
                true
            );
        }

        return $jsonResponse ?? [];
    }

    /**
     * Returns the url to the elastic search api.
     *
     * @param  string $url
     *
     * @return string
     */
    public function parseUrl(string $url): string
    {
        return "es:9200/ddrills/{$url}";
    }
}