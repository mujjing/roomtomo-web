<?php

namespace App\Repositories;

use App\Model\Contact;

class ContactRepository extends BaseRepository
{
    protected $model;

    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    public function getQuery()
    {
        $query = $this->model->query()->get();
        return $query;
    }

    public function getContent($id)
    {
        $query = $this->model->query()
            ->where('contact_id', $id)
            ->get();
        return $query;
    }

}
