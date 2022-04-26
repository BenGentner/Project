<?php

namespace App\Http\Controllers;

use App\Models\Nav;
use App\Models\User;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function show()
    {
        return Nav::all()->load("page");
    }
}
