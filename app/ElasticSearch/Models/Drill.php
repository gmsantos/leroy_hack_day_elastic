<?php
namespace DDrills\ElasticSearch\Models;

use DDrills\ElasticSearch\Model;

/**
 * Drill model, responsible for operations regarding drills.
 */
class Drill extends Model
{
    /**
     * Name of the type ( table/collection ).
     *
     * @var string
     */
    protected $typeName = 'product';
}