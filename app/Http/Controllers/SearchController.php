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
        if(auth()->user() == null) {
            return view('search.guest.search');
        } else {
            return view('search.login.search');
        }
    }
}
