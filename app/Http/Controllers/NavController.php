<?php

namespace App\Http\Controllers;

use App\Models\nav;
use App\Models\User;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return Nav::all()->load("page");
    }
}
