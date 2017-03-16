<?php
namespace DDrills\ElasticSearch;

use Illuminate\Support\Collection;

/**
* This class will act like an Eloquent model, but for ElasticSearch.
*/
abstract class Model
{
    /**
     * Elastic Api
     *
     * @var Elastic Api
     */
    protected $api;

    /**
     * Elastic model constructor
     *
     * @param Api $api
     */
    public function __construct(Api $api)
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
        return $this->api->find($this->getTypeName(), $id);
    }


    /**
     * Get all products on the ElasticSearch
     *
     * @return collection
     */
    public function all(): Collection
    {
        $type = $this->getTypeName();

        $products = $this->api->search($type);

        return collect($products);
    }

    /**
     * Returns the type name of the elasticsearch.
     *
     * @return string
     */
    protected function getTypeName(): string
    {
        if ($this->typeName) {
            return $this->typeName;
        }

        return strtolower(get_class($this));
    }
}