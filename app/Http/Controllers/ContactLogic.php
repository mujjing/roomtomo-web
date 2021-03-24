<?php
namespace App\Http\Controllers;

use App\Repositories\ContactRepository;
use DB;
use DateTime;

class ContactLogic
{
    public function __construct(
        ContactRepository $contact_repo
    )
    {
        $this->contact_repo = $contact_repo;
    }

    public function get()
    {
        return $this->contact_repo->getQuery();
    }

    public function getContent($id)
    {
        return $this->contact_repo->getContent($id);
    }

    public function create($data, $user_id)
    {
        $now = new DateTime();
        $authentication_at = $now->format('Y-m-d H:i:s');
        DB::table('contact')->insert([
            'title' => $data['title'],
            'content' => $data['content'],
            'user_id' => $user_id,
            'application_at' => $authentication_at
        ]);
    }

    public function update($data, $user_id, $id)
    {
        $now = new DateTime();
        $authentication_at = $now->format('Y-m-d H:i:s');
        DB::table('contact')
            ->where('contact_id', $id)
            ->update([
                'title' => $data['title'],
                'content' => $data['content'],
                'user_id' => $user_id,
                'application_at' => $authentication_at
            ]);
    }
}
