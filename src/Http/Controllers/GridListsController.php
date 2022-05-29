<?php

namespace Limasoft\GridLists\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Limasoft\GridLists\GridLists;

class GridListsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         return GridLists::$modelResource;
    }
}
