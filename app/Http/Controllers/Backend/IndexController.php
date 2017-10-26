<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $page_title = "首页";
        $data = [];

        return view('index.index', compact('page_title', 'data'));
    }
}
