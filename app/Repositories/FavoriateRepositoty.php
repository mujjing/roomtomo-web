<?php

namespace App\Repositories;

use App\Model\Favoriate;
use DB;

class FavoriateRepositoty extends BaseRepository
{
    protected $model;

    public function __construct(Favoriate $model)
    {
        $this->model = $model;
    }

    public function getQuery()
    {
        $query = $this->model->query()->first();
        return $query;
    }

    public function searchQuery($userId, $roomId)
    {
        $query = $this->model
            ->where('user_id', $userId)
            ->where('room_id', $roomId)
            ->first();
        return $query;
    }

    public function insertQuery($userId, $roomId)
    {
        $query = $this->model
            ->insert(['user_id' => $userId, 'room_id' => $roomId]);
        return $query;
    }

    public function deleteQuery($userId, $roomId)
    {
        $query = DB::table('favoriate')
            ->where('user_id', '=', $userId)
            ->where('room_id', '=', $roomId)
            ->delete();

        return $query;
    }
}
