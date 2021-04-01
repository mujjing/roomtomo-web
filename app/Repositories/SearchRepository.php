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

}
