<?php

namespace Encore\ECharts\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class EChartsController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->header('Title')
            ->description('Description')
            ->body(view('echarts::index'));
    }
}