<?php

namespace App\Http\Controllers\Api;

use App\Model\Contact;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ContactResources;

class ContactController extends Controller
{
    public function getContact()
    {
        $contactList = Contact::all();
        $data = ContactResources::collection($contactList);
        return $data;
    }

    public function addContact(Request $request)
    {
        $inputData = $request->all();
        $list = Contact::create($inputData);
        return new ContactResources($list);
    }

    public function updateContact(Request $request, $id)
    {
        $data = Contact::find($id);
        $data->update($request->all());
        $dataUpdating = new ContactResources($data);
        return $dataUpdating;
    }

}
