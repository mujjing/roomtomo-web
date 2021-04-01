<?php
namespace App\Http\Controllers;

use App\Repositories\SearchRepository;

class SearchLogic
{
    public function __construct(
        SearchRepository $search_repo
    )
    {
        $this->search_repo = $search_repo;
    }

    public function get()
    {
        return $this->search_repo->getQuery();
    }
}
