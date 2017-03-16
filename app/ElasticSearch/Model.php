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
   all El$stic model constructor
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

        $products = $this->api->all($type);

        return collect($products);
    }

    /**
     * Returns the type name of the elasticsearch.
     *
     * @return string
     */
    protected function getTypeName(): string
    {
        if (isset($this->typeName)) {
            return $this->typeName;
        }

        return $this->getModelNameBasedOnClassName();
    }

    /**
     * Given a fqn class, returns the class name in lowercase.
     *
     * @example
     *     From: DDrills\ElasticSearch\Models\Drill
     *     To: drill
     *
     * @return string
     */
    public function getModelNameBasedOnClassName(): string
    {
        $fqn = explode("\\", get_class($this));

        return strtolower(end($fqn));
    }
}