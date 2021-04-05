<?php
namespace App\Http\Controllers;

use App\Repositories\SearchRepository;
use App\Repositories\FavoriateRepositoty;

class SearchLogic
{
    public function __construct(
        SearchRepository $search_repo,
        FavoriateRepositoty $favoriate_repo
    )
    {
        $this->search_repo = $search_repo;
        $this->favoriate_repo = $favoriate_repo;
    }

    public function get()
    {
        return $this->search_repo->getQuery();
    }

    public function getSearchFromArea($data)
    {
        return $this->search_repo->getSearchFromArea($data);
    }

    public function getSearchFromStation($data)
    {
        return $this->search_repo->getSearchFromStation($data);
    }

    public function submitFavoriate($userId, $roomId)
    {
        $search = $this->favoriate_repo->searchQuery($userId, $roomId);
        if ($search == null || empty($search)) {
            return $this->favoriate_repo->insertQuery($userId, $roomId);
        } else {
            return $this->favoriate_repo->deleteQuery($userId, $roomId);
        }
        
    }
}
