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
        $url = sprintf('%s/%s', $this->parseUrl(), $id);

        $response = $this->http->get($url);

        return $this->parseResponse($response);
    }

    /**
     * Find all objects from the given type.
     *
     * @param string $type
     *
     * @return array
     */
    public function all(string $type, array $params = []): array
    {
        return $this->search($type, $params);
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
        $url = $this->parseUrl($url) . '/_search';

        $params = $this->parseParams($params);

        $response = $this->http->request('get', $url, ['json' => $params]);

        return $this->parseResponse($response);
    }

    public function parseParams(array $params): array
    {
        return array_merge(
            $params,
            [
                'aggregations' => [
                    'line' => [
                        'terms' => [
                            'field' => 'line'
                        ]
                    ],
                    'eletric_voltage' => [
                        'terms' => [
                            'field' => 'eletric_voltage'
                        ]
                    ]
                ]
            ]
        );
    }

    /**
     * Parse the response from guzzle http client
     *
     * @param  Response $response
     *
     * @return array
     */
    public function parseResponse($response): array
    {
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
    protected function parseUrl(string $url): string
    {
        return "es:9200/ddrills/{$url}";
    }
}