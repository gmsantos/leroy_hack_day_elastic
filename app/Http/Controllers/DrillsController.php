<?php
namespace Drills\Http\Controllers;

use Illuminate\Http\Request;

class DrillsController extends Controller
{
    /**
     * Shows a list of drills
     *
     * @return Response
     */
    public function index()
    {
        return view('drills.index');
    }
}
