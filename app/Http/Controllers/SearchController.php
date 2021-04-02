<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function __construct(SearchLogic $searchLogic)
    {
        $this->searchLogic = $searchLogic;
    }

    public function show()
    {
        return view('search.search');
    }

    public function area()
    {
        return view('search.search_area');
    }

    public function areaList(Request $request)
    {
        $this->validate($request, [
            'search_area'          => ['required']
        ]);
        $data = $request->search_area;
        $list = $this->searchLogic->getSearchFromArea($data);

        return view('search.search_result', compact('list'));
        
    }

    public function station()
    {
        return view('search.search_station');
    }

    public function tokaido()
    {
        return view('search.train.train_tokaido');
    }

    public function keihintohoku()
    {
        return view('search.train.train_keihintohoku');
    }

    public function yamanote()
    {
        return view('search.train.train_yamanote');
    }
}
