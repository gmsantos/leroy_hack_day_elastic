<?php
namespace DDrills;

use Api\ElasticApi;

/**
* This class will act like an Eloquent model, but for ElasticSearch.
*/
abstract class ElasticModel
{
    /**
     * Elastic Api
     *
     * @var ElasticApi
     */
    protected $api;

    /**
     * Elastic model constructor
     *
     * @param ElasticApi $api
     */
    function __construct(ElasticApi $api)
    {
        $this->api = $api;
    }

    /**
     * Find an Elastic Model by its id.
     *
     * @param  int $id
     *
     * @return ElasticModel
     */
    public function find($id)
    {
        $model = $this->api->find($id);
    }
}