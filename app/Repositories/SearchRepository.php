<?php

namespace App\Repositories;

use App\Model\Room;

class SearchRepository extends BaseRepository
{
    protected $model;

    public function __construct(Room $model)
    {
        $this->model = $model;
    }

    public function getQuery()
    {
        $query = $this->model->query()->get();
        return $query;
    }

    public function getSearchFromArea($data)
    {
        $query = $this->model->query()
            ->whereIn('city', $data)
            ->get();
        return $query;
    }

    public function getSearchFromStation($data)
    {
        $query = $this->model->query()
            ->whereIn('station', $data)
            ->get();
        return $query;
    }
}
