<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ContactLogic $contactLogic)
    {
        $this->middleware('auth');
        $this->contactLogic = $contactLogic;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        $contactData = $this->contactLogic->get();
        return view('contact', compact('contactData'));
    }

    public function contactCreate()
    {
        return view('contact_create');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title'                 => ['required', 'string'],
            'content'               => ['required', 'string'],
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];
        $userID = auth()->user()->id;
        $this->contactLogic->create($data, $userID);
        return redirect()->route('contact.show');
    }

    public function read($id)
    {
        $contactData = $this->contactLogic->getContent($id);
        return view('contact_read', compact('contactData'));
    }

    public function contactUpdate($id)
    {
        $contactData = $this->contactLogic->getContent($id);
        $show_id = $id;
        return view('contact_update', compact('contactData', 'show_id'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title'                 => ['required', 'string'],
            'content'               => ['required', 'string'],
        ]);

        $data = [
            'title' => $request->title,
            'content' => $request->content
        ];
        $userID = auth()->user()->id;
        $this->contactLogic->update($data, $userID, $id);
        return redirect()->route('contact.show');
    }
}
