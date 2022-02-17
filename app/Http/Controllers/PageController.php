<?php

namespace App\Http\Controllers;

use App\Models\page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(Page $page)
    {
        return view("page", compact("page"));
    }
}
