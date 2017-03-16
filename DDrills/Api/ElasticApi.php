<?php
namespace DDrills\Api;

/**
* Class responsible for facilitating queries on the Elastic Search.
*/
class ElasticApi
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
}