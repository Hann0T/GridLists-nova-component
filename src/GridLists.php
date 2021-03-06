<?php

namespace Limasoft\GridLists;

use Illuminate\Http\Request;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\Tool;

class GridLists extends Tool
{
    public static $modelResource;

    function __construct($resources = null)
    {
        Self::$modelResource = $resources;
    }

    /**
     * Perform any tasks that need to happen when the tool is booted.
     *
     * @return void
     */
    public function boot()
    {
        Nova::script('grid-lists', __DIR__.'/../dist/js/tool.js');
        Nova::style('grid-lists', __DIR__.'/../dist/css/tool.css');
    }

    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(Request $request)
    {
        return MenuSection::make('Grid Lists')
            ->path('/grid-lists')
            ->icon('server');
    }
}
