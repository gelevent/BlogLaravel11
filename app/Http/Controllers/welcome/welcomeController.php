<?php

namespace App\Http\Controllers\welcome;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
    {
        return '<h1> Hallo World</h1>';
    }
}
