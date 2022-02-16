<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function index()
    {
        return redirect()->route('root', User::all());
    }
}
