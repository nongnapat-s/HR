<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ListManager;

class ListController extends Controller
{
    /**
     * Response List request
     *
     * @var string
     */
    public function getList(Request $request, $name)
    {
        return (new ListManager($name, $request->search))->getList();
    }

    /**
     * Response Autocomplate request
     *
     * @var string
     */
    public function getDevbridgeAutocomplete(Request $request, $name)
    {
        return (new ListManager($name, $request->search))->getDevbridgeAutocomplete();
    }
}