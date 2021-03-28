<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function __construct()
    {
    }

    public function show()
    {
        return view('search.search');
    }

    public function area()
    {
        return view('search.search_area');
    }

    public function station()
    {
        return view('search.search_station');
    }
}
