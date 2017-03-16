<?php
namespace DDrills\Http\Controllers;

use Illuminate\Http\Request;
use DDrills\ElasticSearch\Models\Drill;

/**
 * Responsible for rendering Drills products.
 */
class DrillsController extends Controller
{
    /**
     * Drill model
     *
     * @var Drill
     */
    protected $drills;

    /**
     * Drill Constructor.
     *
     * @param Drill $drill
     */
    public function __construct(Drill $drill)
    {
        $this->drill = $drill;
    }

    /**
     * Shows a list of drills.
     *
     * @return Response
     */
    public function index()
    {
        return view('drills.index');
    }

    /**
     * Shows a list of drills.
     *
     * @return Response
     */
    public function details($id)
    {
        $drill = $this->drill->find($id);

        return view('drills.index', compact('drill'));
    }
}
